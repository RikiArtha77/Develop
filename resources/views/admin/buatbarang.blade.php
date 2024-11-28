<x-admin-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <!-- menampilkan variabel title yang dikirim dari controller-->
        {{$title}}
        </h2>
        <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 ">
        <div class="container mx-auto">
        <!-- menggunakan route('petani.update') jika terdapat $petani
        menggunakan route('petani.create') untuk tambah data baru -->
        <!-- enctype='multipart/form-data' digunakan jika terdapat upload file -->
        <form enctype='multipart/form-data' action="{{(isset($petani))?route('petani.update', $petani-
        >id_penjual):route('petani.store')}}" method="POST">
        <!-- generate token-->
        @CSRF
        <!-- menggunakan method PUT untuk update jika ditemukan $petani-->
        @if(isset($petani))@method('PUT')@endif
        <div class="px-2 py-8 bg-white sm:p-6">
        <div class="grid grid-cols-6 gap-6">
         <div class="col-span-6 sm:col-span-3">
         <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
         <!-- isset($petani) => jika ada $petani -> maka tampilkan data petani tsb-->
         <!-- jika tidak -->
         <!-- old untuk menyimpan input yang telah diberikan pengguna -->
         <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" required value="{{(
        isset($petani))?$petani->nama:old('nama')}}"
         class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadowsm sm:text-sm border-gray-300 rounded-md">
         <!-- menampilkan pesan error berdasarkan nama field-->
         @error('nama')
         <div class=" text-xs text-red-800">{{ $message }}</div>
    @enderror
    </div>
    <div class="col-span-6 sm:col-span-3">
    <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
    <input type="number" name="nik" id="nik" placeholder="NIK Anggota Tani" required value
    ="{{(isset($petani))?$petani->nik:old('nik')}}"
    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadowsm sm:text-sm border-gray-300 rounded-md" />
    @error('nik')
    <div class=" text-xs text-red-800">{{ $message }}</div>
    @enderror
    </div>
    <div class="col-span-6 sm:col-span-3">
    <label for="telp" class="block text-sm font-medium text-gray-700">Telp</label>
    <input type="text" name="telp" placeholder="08129921991" id="telp" value="{{(isset($pet
    ani))?$petani->telp:old('telp')}}"
    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadowsm sm:text-sm border-gray-300 rounded-md">
    @error('telp')
    <div class=" text-xs text-red-800">{{ $message }}</div>
    @enderror
    </div>
    <div class="col-span-6 sm:col-span-3">
    <label for="kelompok" class="block text-sm font-medium text-gray700">Kelompok Tani</label>
    <select id="kelompok" name="id_kelompok_tani"
    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white roundedmd shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    <option value="">Pilih Kelompok Tani</option>
    <!-- menampilkan list kelompok petani-->
    @foreach ($kelompoks as $item)
    <option value="{{$item->id_kelompok_tani}}"
    {{((isset($petani)&&$petani->id_kelompok_tani==$item-
    >id_kelompok_tani) || old('id_kelompok_tani')==$item-
    >id_kelompok_tani)?'selected':''}}> {{$item->nama_kelompok}}</option>
    @endforeach
    </select>
    @error('id_kelompok_tani')
    <div class=" text-xs text-red-800">{{ $message }}</div>
    @enderror
    </div>
    <div class="col-span-6 sm:col-span-3">
    <label for="foto" class="block text-sm font-medium text-gray-700">Photo</label>
    <input type="file" name="foto" id="foto"
    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadowsm sm:text-sm border-gray-300 rounded-md">
    @error('foto')
    <div class=" text-xs text-red-800">{{ $message }}</div>
    @enderror
    </div>
    <div class="col-span-6 sm:col-span-3">
    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
    <textarea name="alamat" id="alamat" cols="30" rows="2"
    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadowsm sm:text-sm border-gray-300 rounded-md">
    {{(isset($petani))?$petani->alamat:old('alamat')}}
    </textarea>
    </div>
    <div class="col-span-6 sm:col-span-3">
    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
    <input type="radio" checked {{((isset($petani)&&$petani-
    >status=='Y') || old('status')=='Y')?'checked':''}} name="status" value="Y" class="focus:ringindigo-500 h-4 w-4 text-indigo-600 border-gray-300 "> Aktif &nbsp;&nbsp;
    <input type="radio" {{((isset($petani)&&$petani-
    >status=='N') || old('status')=='N')?'checked':''}} name="status" value="N" class="focus:ringindigo-500 h-4 w-4 text-indigo-600 border-gray-300 "> Non-Aktif
    </div>
    </div>
    </div>
    <hr>
    <div class="px-4 py-3 bg-white text-right sm:px-6">
    <button type="submit" class="inline-flex justify-center w-24 py-2 px-4 border bordertransparent shadow-sm text-sm font-medium rounded-md ring bg-indigo-600 hover:bg-indigo700 text-white">
    Save
    </button>
    </div>
    </form>
    </div>
    </div>
</x-admin-layout>