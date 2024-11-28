<x-homelayout>
  <div class="bg-white">
      <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>
    
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
          <!--Produk 1-->
          @foreach ($package as $key => $item)
          <div class="group relative">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
              <img src="{{ $item->gambar }}" alt="{{ $item->package_name }}" class="w-full object-cover object-center">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $item->package_name }}
                  </a>
                </h3>
              </div>
              <p class="text-sm font-medium text-gray-900">
                {{ $item->package_priice }}
              </p>
            </div>
            <div class="mt-2">
              <p class="text-sm font-medium text-gray-700">
                {{ $item->package_desk }}
              </p>
            </div>
            <div class="mt-4">
              <p class="text-sm font-medium text-gray-900">
                Nama Komunitas: {{ $item->komunitas->komunitas_nama }}
              </p>
              <p class="text-sm text-gray-700">
                Deskripsi Komunitas: {{ $item->komunitas->komunitas_desk }}
              </p>
              <p class="text-sm text-gray-700">
                Kontak Komunitas: {{ $item->komunitas->kontak_nama }}
              </p>
            </div>
            {{-- <div class="mt-4">
              <p class="text-sm font-medium text-gray-900">
                Nama kategori: {{ $item->kategori->kategori_nama }}
              </p>
              <p class="text-sm text-gray-700">
                Kategori Harga: {{ $item->kategori->kategori_harga }}
              </p>
              <p class="text-sm text-gray-700">
                Kategori Ukuran: {{ $item->kategori->kategori_ukuran }}
              </p>
            </div> --}}
          </div>
          @endforeach
          <!-- More products... -->
        </div>
      </div>
  </div>
  </x-homelayout>
  