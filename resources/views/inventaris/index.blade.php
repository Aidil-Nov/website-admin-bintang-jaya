{{-- resources/views/inventaris.blade.php --}}
@extends('app')
@section('title', 'Inventaris')

@section('content')
    {{-- Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">Manajemen Inventaris</h1>
        <p class="text-gray-600 dark:text-gray-400 mt-2">Kelola aset dan barang perusahaan</p>
    </div>

    {{-- Statistik Inventaris --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
        {{-- Total Barang --}}
        <div class="bg-blue-100 dark:bg-blue-900 p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-blue-600 dark:text-blue-300">Total Barang</p>
                    <p class="text-2xl font-bold text-blue-800 dark:text-blue-200 mt-2">1,248</p>
                </div>
                <i data-feather="box" class="w-8 h-8 text-blue-600"></i>
            </div>
        </div>

        {{-- Barang Tersedia --}}
        <div class="bg-green-100 dark:bg-green-900 p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-green-600 dark:text-green-300">Tersedia</p>
                    <p class="text-2xl font-bold text-green-800 dark:text-green-200 mt-2">892</p>
                </div>
                <i data-feather="check-circle" class="w-8 h-8 text-green-600"></i>
            </div>
        </div>

        {{-- Barang Dipinjam --}}
        <div class="bg-yellow-100 dark:bg-yellow-900 p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-yellow-600 dark:text-yellow-300">Dipinjam</p>
                    <p class="text-2xl font-bold text-yellow-800 dark:text-yellow-200 mt-2">156</p>
                </div>
                <i data-feather="clock" class="w-8 h-8 text-yellow-600"></i>
            </div>
        </div>

        {{-- Barang Rusak --}}
        <div class="bg-red-100 dark:bg-red-900 p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-red-600 dark:text-red-300">Rusak/Hilang</p>
                    <p class="text-2xl font-bold text-red-800 dark:text-red-200 mt-2">200</p>
                </div>
                <i data-feather="alert-triangle" class="w-8 h-8 text-red-600"></i>
            </div>
        </div>
    </div>

    {{-- Form Tambah Barang --}}
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Tambah Barang Inventaris</h2>
        <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
            {{-- Nama Barang --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Nama Barang <span class="text-red-500">*</span>
                </label>
                <input type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                   dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                    placeholder="Misal: Laptop Dell XPS 15" required>
            </div>

            {{-- Kode Barang --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Kode Barang <span class="text-red-500">*</span>
                </label>
                <input type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                   dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                    placeholder="Misal: LP-DELL-XPS15-001" required>
            </div>

            {{-- Kategori --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Kategori <span class="text-red-500">*</span>
                </label>
                <select class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                      dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                    <option value="">Pilih Kategori</option>
                    <option value="elektronik">Elektronik</option>
                    <option value="furniture">Furniture</option>
                    <option value="kendaraan">Kendaraan</option>
                    <option value="alat_kantor">Alat Kantor</option>
                </select>
            </div>

            {{-- Lokasi --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Lokasi Penyimpanan
                </label>
                <input type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                   dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                    placeholder="Misal: Ruang Server">
            </div>

            {{-- Jumlah --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Jumlah <span class="text-red-500">*</span>
                </label>
                <input type="number" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                   dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" min="1"
                    value="1" required>
            </div>

            {{-- Kondisi --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Kondisi <span class="text-red-500">*</span>
                </label>
                <select class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                      dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                    <option value="baik">Baik</option>
                    <option value="rusak_ringan">Rusak Ringan</option>
                    <option value="rusak_berat">Rusak Berat</option>
                </select>
            </div>

            {{-- Tanggal Pembelian --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Tanggal Pembelian
                </label>
                <input type="date" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                   dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
            </div>

            {{-- Harga --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Harga (Rp)
                </label>
                <input type="number" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                   dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                    placeholder="Misal: 15000000">
            </div>

            {{-- Deskripsi --}}
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Deskripsi
                </label>
                <textarea class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                   dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" rows="3"
                    placeholder="Spesifikasi lengkap barang"></textarea>
            </div>

            {{-- Upload Gambar --}}
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Foto Barang
                </label>
                <div class="flex items-center justify-center w-full">
                    <label
                        class="flex flex-col w-full h-32 border-2 border-dashed rounded-lg cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <i data-feather="upload" class="w-8 h-8 text-gray-400"></i>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Klik untuk upload gambar</p>
                        </div>
                        <input type="file" class="hidden" />
                    </label>
                </div>
            </div>

            {{-- Tombol Submit --}}
            <div class="md:col-span-2">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors
                                                   flex items-center gap-2">
                    <i data-feather="save"></i>
                    Simpan Barang
                </button>
            </div>
        </form>
    </div>

    {{-- Daftar Inventaris --}}
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Daftar Inventaris</h2>

        {{-- Filter dan Pencarian --}}
        <div class="flex flex-wrap gap-4 mb-4">
            <select class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                <option>Semua Kategori</option>
                <option>Elektronik</option>
                <option>Furniture</option>
                <option>Kendaraan</option>
            </select>

            <select class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                <option>Semua Kondisi</option>
                <option>Baik</option>
                <option>Rusak Ringan</option>
                <option>Rusak Berat</option>
            </select>

            <input type="text" placeholder="Cari barang..."
                class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">

            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 flex items-center gap-2">
                <i data-feather="filter" class="w-4 h-4"></i>
                Filter
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Kode</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Nama Barang
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Kategori
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Jumlah</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Kondisi
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Lokasi</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    {{-- Contoh Data --}}
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">LP-DELL-XPS15-001</td>
                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-gray-200 rounded-md overflow-hidden">
                                    <img src="https://via.placeholder.com/50" alt="Laptop"
                                        class="w-full h-full object-cover">
                                </div>
                                <span>Laptop Dell XPS 15</span>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">Elektronik</td>
                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">5</td>
                        <td class="px-4 py-3 text-sm">
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs
                                                              dark:bg-green-900 dark:text-green-200">
                                Baik
                            </span>
                        </td>
                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">Ruang IT</td>
                        <td class="px-4 py-3 text-sm">
                            <div class="flex gap-2">
                                <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400" title="Edit">
                                    <i data-feather="edit" class="w-4 h-4"></i>
                                </button>
                                <button class="text-purple-600 hover:text-purple-800 dark:text-purple-400" title="Detail">
                                    <i data-feather="eye" class="w-4 h-4"></i>
                                </button>
                                <button class="text-yellow-600 hover:text-yellow-800 dark:text-yellow-400" title="Pinjam">
                                    <i data-feather="share-2" class="w-4 h-4"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800 dark:text-red-400" title="Hapus">
                                    <i data-feather="trash-2" class="w-4 h-4"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="mt-6 flex justify-center">
            <nav class="flex gap-2">
                <button class="px-3 py-1 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300">&laquo;
                    Previous</button>
                <button class="px-3 py-1 bg-blue-600 text-white rounded-lg">1</button>
                <button class="px-3 py-1 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300">Next
                    &raquo;</button>
            </nav>
        </div>
    </div>
    </div>

    @section('scripts')
        <script>
            feather.replace();
        </script>
    @endsection
@endsection