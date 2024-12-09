<x-admin-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <!-- Menampilkan variabel title yang dikirim dari controller -->
        {{ $title }}
    </h2>

    <div class="shadow px-6 py-4 bg-white rounded sm:px-16 sm:py-16">
        <div class="container mx-auto">
            <form enctype="multipart/form-data" action="{{ (isset($package)) ? route('barang.update', $package->package_id) : route('barang.store') }}" method="POST">
                @csrf
                @if (isset($package))
                    @method('PUT')
                @endif

                <div class="px-2 py-8 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                        <div class="col-span-6 sm:col-span-3">
                            <label for="package_code" class="block text-sm font-medium text-gray-700">Kode Barang</label>
                            <input 
                                type="text" 
                                id="package_code" 
                                name="package_code" 
                                placeholder="Kode Barang" 
                                required 
                                value="{{ (isset($package)) ? $package->package_code : old('package_code') }}"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            >
                            @error('package_code')
                                <div class="text-xs text-red-800">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Nama Barang -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="package_name" class="block text-sm font-medium text-gray-700">Nama Barang</label>
                            <input 
                                type="text" 
                                id="package_name" 
                                name="package_name" 
                                placeholder="Nama Barang" 
                                required 
                                value="{{ (isset($package))? $package->package_name : old('package_name') }}"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            >
                            @error('package_name')
                                <div class="text-xs text-red-800">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Harga -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="package_priice" class="block text-sm font-medium text-gray-700">Harga</label>
                            <input 
                                type="number" 
                                name="package_priice" 
                                id="package_priice" 
                                placeholder="Harga Barang" 
                                required 
                                value="{{ (isset($package))? $package->package_priice : old('package_priice') }}"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            >
                            @error('package_priice')
                                <div class="text-xs text-red-800">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="package_desk" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea name="package_desk" id="package_desk" cols="30" rows="2"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadowsm sm:text-sm border-gray-300 rounded-md">
                            {{(isset($package))?$package->package_desk:old('package_desk')}}
                            </textarea>
                            @error('package_desk')
                                <div class="text-xs text-red-800">{{ $message }}</div>
                            @enderror
                            </div>
                           

                        <!-- Kelompok Komunitas -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="komunitas_id" class="block text-sm font-medium text-gray-700">Komunitas</label>
                            <select 
                                id="komunitas_id" 
                                name="komunitas_id"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">Pilih Komunitas</option>
                                @foreach ($komunitas as $item)
                                <option  
                                    {{ ((isset($package) && $package->komunitas_id == $item->komunitas_id) || old('komunitas_id') == $item->komunitas_id) ? 'selected' : '' }}
                                    value="{{ $item->komunitas_id }}"> {{ $item->komunitas_nama }}
                                </option>
                                @endforeach
                            </select>
                            @error('komunitas_id')
                                <div class="text-xs text-red-800">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Foto -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="gambar" class="block text-sm font-medium text-gray-700">Photo</label>
                            <input 
                                type="file" 
                                name="gambar" 
                                id="gambar"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            >
                            @error('gambar')
                                <div class="text-xs text-red-800">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Tombol Submit -->
                <div class="px-4 py-3 bg-white text-right sm:px-6">
                    <button 
                        type="submit" class="inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring bg-indigo-600 hover:bg-indigo-700 text-white">Save
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'package_desk' );
    </script>
</x-admin-layout>
