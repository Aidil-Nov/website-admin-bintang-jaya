@extends('app')

@section('title', 'dashboard')

@section('content')
    <header class="mb-6 flex items-center justify-between">
        <h1 class="text-3xl font-semibold">Dashboard</h1>
    </header>
    <div class="mb-3">
        <h1 class="text-2xl font-bold">Hai Utin, selamat datang di Bintang Jaya</h1>
        <p>
            Bagian ini menampilkan pemasukan, pengeluaran, profit pada hari ini
            tanggal 02 Maret 2025 serta seluruh total pelanggan.
        </p>
    </div>
    <!-- Card -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-2 mb-8">
        <div class="bg-green-100 dark:bg-green-900 p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-green-600 dark:text-green-300">Total Pemasukan</p>
                    <p class="text-lg font-bold text-green-800 dark:text-green-200 mt-2">Rp 15.250.000</p>
                    <p class="text-green-800 dark:text-green-200 text-sm">+20% dari kemarin</p>
                </div>
                <i data-feather="arrow-up-circle" class="w-8 h-8 text-green-600"></i>
            </div>
        </div>
        <div class="bg-red-100 dark:bg-red-900 p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-red-600 dark:text-red-300">Total Pengeluaran</p>
                    <p class="text-lg font-bold text-red-800 dark:text-red-200 mt-2">Rp 15.250.000</p>
                    <p class="text-red-800 dark:text-red-200 text-sm">-20% dari kemarin</p>
                </div>
                <i data-feather="arrow-down-circle" class="w-8 h-8 text-red-600"></i>
            </div>
        </div>
        <div class="bg-cyan-100 dark:bg-cyan-900 p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-cyan-600 dark:text-cyan-300">Total Profit</p>
                    <p class="text-lg font-bold text-cyan-800 dark:text-cyan-200 mt-2">Rp 15.250.000</p>
                    <p class="text-cyan-800 dark:text-cyan-200 text-sm">+20% dari kemarin</p>
                </div>
                <i data-feather="pie-chart" class="w-8 h-8 text-cyan-600"></i>
            </div>
        </div>
        <div class="bg-blue-100 dark:bg-blue-900 p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-blue-600 dark:text-blue-300">Total Saldo</p>
                    <p class="text-lg font-bold text-blue-800 dark:text-blue-200 mt-2">Rp 15.250.000</p>
                    <p class="text-blue-800 dark:text-blue-200 text-sm">-+10% dari kemarin</p>
                </div>
                <i data-feather="dollar-sign" class="w-8 h-8 text-blue-600"></i>
            </div>
        </div>
    </div>

    <div class="mb-3 grid grid-cols-1 gap-4 md:grid-cols-3">
        <div class="rounded-lg bg-white p-5 shadow-md">
            <h3 class="font-bold">Statistik Pemasukan</h3>
            <p>Berdasarkan pemasukan mingguan</p>
        </div>
        <div class="rounded-lg bg-white p-5 shadow-md">
            <h3 class="font-bold">Statistik Profitabilitas</h3>
            <p>Berdasarkan profit bulanan</p>
        </div>
        <div class="rounded-lg bg-white p-5 shadow-md">
            <h3 class="font-bold">Statistik Penjualan Produk</h3>
            <p>Berdasarkan penjualan bulanan</p>
        </div>
    </div>

    <!-- stok -->
    <div class="grid grid-cols-1 gap-4 md:grid-cols-1">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-8">
            <div class="mb-3 dark:text-gray-200">
                <h3 class="font-bold">Stok Material</h3>
                <p>Sisa stok paling sedikit front shop BD223</p>
            </div>
            {{-- Filter --}}
            <div class="flex flex-wrap gap-4 mb-4">
                <input type="date" class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                <select class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                    <option>Semua Kategori</option>
                    <option>Pemasukan</option>
                    <option>Pengeluaran</option>
                </select>
                <input type="text" placeholder="Cari..."
                    class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Deskripsi
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Kategori
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Jenis</th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Jumlah</th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        {{-- Contoh Data --}}
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">2024-03-20</td>
                            <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">Gaji Bulanan</td>
                            <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">Gaji</td>
                            <td class="px-4 py-3 text-sm">
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs
                                                                          dark:bg-green-900 dark:text-green-200">
                                    Pemasukan
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm font-medium text-green-600 dark:text-green-400">
                                + Rp 10.000.000
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <div class="flex gap-2">
                                    <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400">
                                        <i data-feather="edit" class="w-4 h-4"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800 dark:text-red-400">
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
            <!-- <div class="mb-3">
                        <h3 class="font-bold">Stok Material</h3>
                        <p>Sisa stok paling sedikit front shop BD223</p>
                    </div>
                    <table class="w-full border text-left">
                        <thead>
                            <tr class="border">
                                <th class="border p-3">Nama</th>
                                <th class="border p-3">Kode</th>
                                <th class="border p-3">Tipe</th>
                                <th class="border p-3">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border">
                                <td class="border p-3">Kusen Mobil</td>
                                <td class="border p-3">BD223</td>
                                <td class="border p-3">Front Shop</td>
                                <td class="border p-3">3 Btg</td>
                            </tr>
                            <tr class="border">
                                <td class="border p-3">Sliding Door</td>
                                <td class="border p-3">BD223</td>
                                <td class="border p-3">Sliding Door</td>
                                <td class="border p-3">100 Btg</td>
                            </tr>
                            <tr class="border">
                                <td class="border p-3">Kusen C</td>
                                <td class="border p-3">BD223</td>
                                <td class="border p-3">Front Shop</td>
                                <td class="border p-3">50 Btg</td>
                            </tr>
                        </tbody>
                    </table> -->
        </div>

        <!-- <div class="rounded-lg bg-white p-5 shadow-md">
            <div class="mb-3">
                <h3 class="font-bold">Presensi Karyawan</h3>
                <p>Menampilkan karyawan yang masuk hari ini</p>
            </div>
            <table class="w-full border text-left">
                <thead>
                    <tr class="border">
                        <th class="border p-3">Nama</th>
                        <th class="border p-3">Divisi</th>
                        <th class="border p-3">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border">
                        <td class="border p-3">Fikri</td>
                        <td class="border p-3">Aluminium</td>
                        <td class="border p-3">Masuk</td>
                    </tr>
                    <tr class="border">
                        <td class="border p-3">Malidi</td>
                        <td class="border p-3">Aluminium</td>
                        <td class="border p-3">Izin</td>
                    </tr>
                    <tr class="border">
                        <td class="border p-3">Kartolo</td>
                        <td class="border p-3">Meubel</td>
                        <td class="border p-3">Masuk</td>
                    </tr>
                </tbody>
            </table>
        </div> -->
    </div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
@endsection