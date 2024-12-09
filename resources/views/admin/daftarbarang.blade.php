<x-admin-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{$title}}
    </h2>

    <div>
        <div class="shadow px-6 py-4 bg-white rounded sm:px-16 sm:py-16">
            <div class="grid grid-cols-12 items-center">
                <div class="col-span-6 p-4">
                    <a href="{{ route('barang.create') }}">
                        <button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">
                            Tambah
                        </button>
                    </a>
                    <button class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green-200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none">
                        Update
                    </button>
                    <button class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none">
                        Delete
                    </button>
                </div>
                <div class="col-span-6 p-4 flex justify-end">
                    <form action="{{ route('barang.index') }}" method="GET" class="flex items-center space-x-2">
                        <select id="komunitas" name="komunitas_id"
                            class="block py-2 px-4 border border-gray-300 bg-white rounded-l-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">Pilih Komunitas</option>
                            @foreach ($komunitas as $item)
                                <option value="{{ $item->komunitas_id }}" {{ (isset($_GET['komunitas_id']) && $_GET['komunitas_id'] == $item->komunitas_id) ? 'selected' : '' }}>
                                    {{ $item->komunitas_nama }}
                                </option>
                            @endforeach
                        </select>
                        <input type="text" name="s" value="{{ isset($_GET['s']) ? $_GET['s'] : '' }}"
                            class="py-2 px-4 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                        <button type="submit"
                            class="rounded-r-md border px-4 py-1 border-gray-300 bg-gray-50 text-gray-500 hover:text-white hover:bg-blue-600">
                            Cari
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-4">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Deskripsi
                            </th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($package as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <input type="checkbox" name="" id="">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{ asset($item->gambar) }}" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->package_name }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ $item->package_priice }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $item->package_desk }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('barang.edit', $item->package_id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <form action="{{ route('barang.destroy', $item->package_id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600 hover:text-red-900" onclick="return confirm('Anda Yakin?')" type="submit">
                                            Del
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <?php if (Request::path()=='barang'){?>
                    <div class="m-4"> {{ $package->appends(request()->query())->links() }}</div>
                <?php }?>
            </div>
        </div>
    </div>
</x-admin-layout>
