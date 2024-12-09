<x-homelayout>
  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>
  
      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($package as $key => $item)
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ $item->gambar }}" alt="{{ $item->package_name }}" class="w-full object-cover object-center">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#" onclick="openModal({{ $item->package_id }})">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  {{ $item->package_name }}
                </a>
              </h3>
            </div>
            <p class="text-sm font-medium text-gray-900">
              {{ $item->package_priice }}
            </p>
          </div>
          <div>
            <p class="text-sm font-medium text-gray-900">
              {{ $item->komunitas->komunitas_nama }}
            </p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- Modal Overlay -->
  <div id="modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg w-3/4 max-w-lg p-6">
      <div id="modal-content" class="text-gray-900">
        <!-- Konten akan dimasukkan di sini -->
      </div>
      <button class="mt-4 px-4 py-2 bg-red-500 text-white rounded" onclick="closeModal()">Close</button>
    </div>
  </div>

  <!-- Script -->
  <script>
    const packages = @json($package);

    function openModal(id) {
      const item = packages.find(p => p.package_id === id);
      const modalContent = `
        <img src="${item.gambar}" alt="${item.package_name}" class="w-full rounded-md mb-4">
        <h2 class="text-xl font-bold">${item.package_name}</h2>
        <p class="text-gray-700 mt-2">${item.package_desk}</p>
        <p class="text-gray-900 font-medium mt-2">Harga: ${item.package_priice}</p>
      `;
      document.getElementById('modal-content').innerHTML = modalContent;
      document.getElementById('modal').classList.remove('hidden');
    }

    function closeModal() {
      document.getElementById('modal').classList.add('hidden');
    }
  </script>
</x-homelayout>
