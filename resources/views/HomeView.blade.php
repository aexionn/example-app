<x-layout :title="$title">
    <main>
        @section('content')
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="font-[sans-serif] overflow-x-auto py-4">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 whitespace-nowrap">
                        <tr>
                            <th class="p-4 text-left text-sm font-medium text-white">Nama Gudang</th>
                            <th class="p-4 text-left text-sm font-medium text-white">Jumlah Varian Barang</th>
                            <th class="p-4 text-left text-sm font-medium text-white">Lokasi</th>
                            <th class="p-4 text-left text-sm font-medium text-white">Kapasitas</th>
                            <th class="p-4 text-left text-sm font-medium text-white">Nama Supervisor</th>
                            {{-- <th class="p-4 text-left text-sm font-medium text-white">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody class="whitespace-nowrap">
                        @foreach ($Detail as $item)
                            <tr class="even:bg-blue-50">
                                <td class="p-4 text-sm text-black">{{ $item['nm_tempat'] }}</td>
                                <td class="p-4 text-sm text-black">{{ $item->barang->count() }}</td>
                                {{-- @foreach ($Count as $items)
                                @endforeach --}}
                                <td class="p-4 text-sm text-black">{{ $item['lokasi'] }}</td>
                                <td class="p-4 text-sm text-black">{{ $item['kapasitas'] }}</td>
                                <td class="p-4 text-sm text-black">{{ $item['nm_supervisor'] }}</td>
                                {{-- <td class="flex items-center">
                                    <a href="/save/barang/{{ $item['id_barang'] }}" class="inline-block" title="Ubah">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
                                            <path d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"/>
                                            <path d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"/>
                                        </svg>
                                    </a>
                                    <form action="/delete/barang/{{ $item['id_barang'] }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $item['nm_barang'] }}')" class="m-4" title="Hapus">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-yellow-500 hover:fill-yellow-700" viewBox="0 0 24 24">
                                                <path d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"/>
                                                <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                    {{-- @dd($Detail) --}}
                </table>
            </div>
            {{-- <div class="font-[sans-serif] overflow-x-auto flex flex-row">
                <a href="/save/barang" type="button"
                class="px-5 py-2 rounded-lg text-sm tracking-wider font-medium border 
                border-green-700 outline-none bg-transparent hover:bg-green-700 text-green-700 
                hover:text-white transition-all duration-300">Simpan</a>
                <a href="/softDelInfo/barang" type="button"
                class="px-5 py-2 ml-2 rounded-lg text-sm tracking-wider font-medium border 
                border-blue-700 outline-none bg-transparent hover:bg-blue-700 text-blue-700 
                hover:text-white transition-all duration-300">Recycle bin</a>
            </div> --}}
        </div>
        @endsection
    </main>
</x-layout>