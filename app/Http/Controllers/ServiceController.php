<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // ambil data service (terbaru dulu) dan paginasi
        $services = \App\Models\Service::orderBy('created_at', 'desc')->paginate(10);

        return view('user.consultation.consultation', compact('services'));
    }
}
