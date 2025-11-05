<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function userConsultation(Request $request)
    {
        $data = $request->validate([
            'id' => 'nullable|integer|unique:consultations,id',
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            // The dropdown sends either a service id or a plain text value; we accept any string here
            'service' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $consultation = new \App\Models\Consultation();

        if (!empty($data['id'])) {
            $consultation->id = $data['id'];
        }

        $consultation->name = $data['name'];
        $consultation->email = $data['email'] ?? null;
        $consultation->phone = $data['phone'] ?? null;
        $consultation->company = $data['company'] ?? null;
        // If service is an ID from the dropdown, store its name into the string column
        if (!empty($data['service']) && is_numeric($data['service'])) {
            $serviceModel = \App\Models\Service::find($data['service']);
            $consultation->service = $serviceModel->service_name ?? (string) $data['service'];
        } else {
            $consultation->service = $data['service'] ?? null;
        }
        $consultation->description = $data['description'] ?? null;

        $consultation->save();

        return redirect()->route('consultation')->with('success', 'Permintaan konsultasi Anda berhasil dikirim.');
    }

    //admin
    public function manageConsultation()
    {
        $query = \App\Models\Consultation::query();

        // Filter by search query if exists
        if ($search = request('q')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('company', 'like', "%{$search}%")
                    ->orWhere('service', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $consultations = $query->orderBy('created_at', 'desc')->paginate(10);

        // Ambil data service (semua service; ubah ->pluck('service_name','id') jika hanya butuh id => name)
        $services = \App\Models\Service::orderBy('service_name')->get();

        return view('admin.consultation.manage-consultation', compact('consultations', 'services'));
    }

    public function showAddConsultationForm()
    {
        // Provide services list to the add consultation view
        $services = \App\Models\Service::orderBy('service_name')->get();
        return view('admin.consultation.add-consultation', compact('services'));
    }

    public function addConsultation(Request $request)
    {
        $data = $request->validate([
            'id' => 'nullable|integer|unique:consultations,id',
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            // The dropdown sends either a service id or a plain text value; we accept any string here
            'service' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $consultation = new \App\Models\Consultation();

        if (!empty($data['id'])) {
            $consultation->id = $data['id'];
        }

        $consultation->name = $data['name'];
        $consultation->email = $data['email'] ?? null;
        $consultation->phone = $data['phone'] ?? null;
        $consultation->company = $data['company'] ?? null;
        // If service is an ID from the dropdown, store its name into the string column
        if (!empty($data['service']) && is_numeric($data['service'])) {
            $serviceModel = \App\Models\Service::find($data['service']);
            $consultation->service = $serviceModel->service_name ?? (string) $data['service'];
        } else {
            $consultation->service = $data['service'] ?? null;
        }
        $consultation->description = $data['description'] ?? null;

        $consultation->save();

        return redirect()->route('manage-consultation')->with('success', 'Permintaan konsultasi Anda berhasil dikirim.');
    }

    public function showConsultation($id)
    {
        $consultation = \App\Models\Consultation::findOrFail($id);
        return view('admin.consultation.detail-consultation', compact('consultation'));
    }

    public function showEditConsultationForm($id)
    {
        $consultation = \App\Models\Consultation::findOrFail($id);
        // Provide services list to the edit consultation view
        $services = \App\Models\Service::orderBy('service_name')->get();
        return view('admin.consultation.edit-consultation', compact('consultation', 'services'));
    }

    public function editConsultation(Request $request, $id)
    {
        $data = $request->validate([
            // 'id' => 'required|integer|exists:consultations,id',
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            // The dropdown sends either a service id or a plain text value; we accept any string here
            'service' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $consultation = \App\Models\Consultation::findOrFail($id);

        $consultation->name = $data['name'];
        $consultation->email = $data['email'] ?? null;
        $consultation->phone = $data['phone'] ?? null;
        $consultation->company = $data['company'] ?? null;

        // If service is an ID from the dropdown, store its name into the string column
        if (!empty($data['service']) && is_numeric($data['service'])) {
            $serviceModel = \App\Models\Service::find($data['service']);
            $consultation->service = $serviceModel->service_name ?? (string) $data['service'];
        } else {
            $consultation->service = $data['service'] ?? null;
        }

        $consultation->description = $data['description'] ?? null;

        $consultation->save();

        return redirect()->route('manage-consultation')->with('success', 'Permintaan konsultasi berhasil diperbarui.');
    }

    public function deleteConsultation($id)
    {
        $consultation = \App\Models\Consultation::findOrFail($id);
        $consultation->delete();

        return redirect()->route('manage-consultation')->with('success', 'Permintaan konsultasi berhasil dihapus.');
    }
}
