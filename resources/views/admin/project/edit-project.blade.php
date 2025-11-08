@extends('admin.main')

@section('container')
    <div class="mb-6">
        <div class="flex items-center gap-4">
            {{-- Back Button --}}
            <a href="{{ route('manage-project') }}"
                class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-[#23272F]">Edit Project</h1>
                <p class="text-gray-600 mt-1">Ubah data project pada form berikut</p>
            </div>
        </div>
    </div>

    {{-- Form Card --}}
    <div class="bg-white rounded-3xl shadow-lg border border-[#52a08a]/10 overflow-hidden">
        <div class="p-8">
            <form action="{{ route('manage-project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Title Field --}}
                <div class="mb-6">
                    <label for="title" class="block text-sm font-semibold text-[#23272F] mb-2">
                        Judul Project <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="title" name="title" value="{{ $project->title }}" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#52a08a] focus:border-transparent transition-all duration-200"
                        placeholder="Contoh: Website E-commerce Fashion">
                </div>

                {{-- Description Field --}}
                <div class="mb-6">
                    <label for="description" class="block text-sm font-semibold text-[#23272F] mb-2">
                        Deskripsi Project
                    </label>
                    <textarea id="description" name="description" rows="5"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#52a08a] focus:border-transparent transition-all duration-200 resize-none"
                        placeholder="Jelaskan detail project, fitur utama, teknologi yang digunakan, dll.">{{ $project->description }}</textarea>

                </div>

                {{-- Link Field --}}
                <div class="mb-6">
                    <label for="link" class="block text-sm font-semibold text-[#23272F] mb-2">
                        Link Project
                    </label>
                    <input type="url" id="link" name="link" value="{{ $project->link }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#52a08a] focus:border-transparent transition-all duration-200"
                        placeholder="Input link project...">

                </div>

                {{-- Image Upload Field --}}
                <div class="mb-8">
                    <label for="image" class="block text-sm font-semibold text-[#23272F] mb-2">
                        Gambar Project
                    </label>
                    <div class="relative">
                        <input type="file" id="image" name="image" accept="image/*" class="hidden" onchange="previewImage(event)">
                        <input type="hidden" name="oldImage" value="{{ $project->image }}">
                        <label for="image"
                            class="flex flex-col items-center justify-center w-full h-48 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-[#52a08a] transition-colors duration-200 bg-gray-50 hover:bg-gray-100">
                            <div id="preview-container" class="{{ $project->image ? 'w-full h-full p-4' : 'hidden w-full h-full p-4' }}">
                                <img id="preview-image"
                                    src="{{ $project->image ? asset('storage/' . $project->image) : '/images/sample-project.jpg' }}"
                                    alt="Preview" class="w-full h-full object-contain rounded-lg">
                            </div>

                            <div id="upload-placeholder" class="{{ $project->image ? 'hidden flex-col items-center justify-center py-6' : 'flex-col items-center justify-center py-6' }}">
                                <svg class="w-12 h-12 text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <p class="text-sm text-gray-600 font-medium mb-1">Klik untuk upload gambar</p>
                                <p class="text-xs text-gray-500">PNG, JPG, JPEG hingga 2MB</p>
                            </div>
                        </label>
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="flex items-center justify-end gap-4 pt-6 border-t border-gray-200">
                    {{-- <a href="{{ route('manage-project') }}"
                        class="px-6 py-2.5 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-all duration-200">
                        Batal
                    </a> --}}
                    <button type="submit"
                        class="px-6 py-2.5 bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold rounded-lg shadow-lg transition-all duration-200 flex items-center gap-2">
                        {{-- <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg> --}}
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Image Preview Script --}}
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-image').src = e.target.result;
                    document.getElementById('preview-container').classList.remove('hidden');
                    document.getElementById('upload-placeholder').classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
