@extends('admin.main')

@section('container')
    <div class="mb-6">
        <div class="flex items-center gap-4">
            {{-- Back Button --}}
            <a href="{{ route('manage-activity') }}"
                class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-[#23272F]">Tambah Activity Baru</h1>
                <p class="text-gray-600 mt-1">Isi form di bawah untuk menambahkan activity baru</p>
            </div>
        </div>
    </div>

    {{-- Error Messages --}}
    @if ($errors->any())
        <div class="mb-6 bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg">
            <div class="flex items-start gap-3">
                <svg class="w-5 h-5 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                        clip-rule="evenodd" />
                </svg>
                <div>
                    <p class="font-semibold mb-1">Terdapat beberapa error:</p>
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li class="text-sm">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    {{-- Form Card --}}
    <div class="bg-white rounded-3xl shadow-lg border border-[#52a08a]/10 overflow-hidden">
        <div class="p-8">
            <form action="{{ route('manage-activity.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Title Field --}}
                <div class="mb-6">
                    <label for="title" class="block text-sm font-semibold text-[#23272F] mb-2">
                        Judul <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#52a08a] focus:border-transparent transition-all duration-200"
                        placeholder="Judul activity">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Description Field --}}
                <div class="mb-6">
                    <label for="description" class="block text-sm font-semibold text-[#23272F] mb-2">
                        Deskripsi
                    </label>
                    <textarea id="description" name="description" rows="5"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#52a08a] focus:border-transparent transition-all duration-200 resize-none"
                        placeholder="Jelaskan activity...">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500">Deskripsi singkat tentang activity</p>
                </div>

                {{-- Image Upload Field --}}
                <div class="mb-8">
                    <label for="image" class="block text-sm font-semibold text-[#23272F] mb-2">
                        Gambar
                    </label>
                    <div class="relative">
                        <input type="file" id="image" name="image" accept="image/*,image/avif" class="hidden" onchange="previewImage(event)">
                        <label for="image"
                            class="flex flex-col items-center justify-center w-full h-48 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-[#52a08a] transition-colors duration-200 bg-gray-50 hover:bg-gray-100">
                            <div id="preview-container" class="hidden w-full h-full p-4">
                                <img id="preview-image" src="" alt="Preview" class="w-full h-full object-contain rounded-lg">
                            </div>
                            <div id="upload-placeholder" class="flex flex-col items-center justify-center py-6">
                                <svg class="w-12 h-12 text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <p class="text-sm text-gray-600 font-medium mb-1">Klik untuk upload gambar</p>
                                <p class="text-xs text-gray-500">PNG, JPG, JPEG, AVIF hingga 2MB</p>
                            </div>
                        </label>
                    </div>
                    @error('image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Activity Date & Category --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="activity_date" class="block text-sm font-semibold text-[#23272F] mb-2">Tanggal Kegiatan <span class="text-red-500">*</span></label>
                        <input type="date" id="activity_date" name="activity_date" value="{{ old('activity_date') }}" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#52a08a] focus:border-transparent transition-all duration-200">
                        @error('activity_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="category_activity_id" class="block text-sm font-semibold text-[#23272F] mb-2">Kategori</label>
                        <select id="category_activity_id" name="category_activity_id" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#52a08a] transition-all duration-200">
                            <option value="">-- Pilih Kategori --</option>
                            @if(isset($categories) && $categories->count())
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ old('category_activity_id') == $cat->id ? 'selected' : '' }}>{{ $cat->category_name }}</option>
                                @endforeach
                            @else
                                <option value="1">Default</option>
                            @endif
                        </select>
                        @error('category_activity_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Gallery Images Upload --}}
                <div class="mb-8">
                    <label for="gallery" class="block text-sm font-semibold text-[#23272F] mb-2">Gallery Gambar</label>
                    <div class="relative">
                        <input type="file" id="gallery" name="gallery[]" accept="image/*,image/avif" multiple class="hidden" onchange="previewGallery(event)">
                        <label for="gallery" class="flex flex-col items-center justify-center w-full h-36 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-[#52a08a] transition-colors duration-200 bg-gray-50 hover:bg-gray-100">
                            <div class="flex flex-col items-center justify-center py-4">
                                <svg class="w-10 h-10 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9"/>
                                </svg>
                                <p class="text-sm text-gray-600">Klik untuk pilih beberapa gambar</p>
                                <p class="text-xs text-gray-500">Bisa memilih banyak file. PNG, JPG, JPEG, AVIF hingga 2MB</p>
                            </div>
                        </label>
                    </div>
                    @error('gallery')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror

                    {{-- Preview Thumbnails --}}
                    <div id="gallery-preview" class="mt-4 flex flex-wrap gap-3"></div>
                </div>

                {{-- Action Buttons --}}
                <div class="flex items-center justify-end gap-4 pt-6 border-t border-gray-200">
                    <a href="{{ route('manage-activity') }}"
                        class="px-6 py-2.5 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-all duration-200">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-6 py-2.5 bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold rounded-lg shadow-lg transition-all duration-200 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
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

        function previewGallery(event) {
            const files = Array.from(event.target.files || []);
            const container = document.getElementById('gallery-preview');
            container.innerHTML = '';
            files.forEach(file => {
                const reader = new FileReader();
                const wrapper = document.createElement('div');
                wrapper.className = 'w-24 h-24 bg-gray-50 rounded-lg overflow-hidden flex items-center justify-center border border-gray-200';
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'w-full h-full object-cover';
                    wrapper.appendChild(img);
                }
                reader.readAsDataURL(file);
                container.appendChild(wrapper);
            });
        }
    </script>
@endsection
