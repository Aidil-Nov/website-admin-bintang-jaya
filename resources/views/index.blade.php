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

    <!-- STATISTIK -->
    <div class="container max-w-full">
        <h3 class="font-bold">Pemasukan</h3>
        <div class="h-64 w-full">
            <canvas id="ChartPemasukan"></canvas>
        </div>
    </div>
    <div class="mb-3 grid grid-cols-2 gap-4 md:grid-cols-2">
        <div class="rounded-lg bg-white p-5 shadow-md">
            <h3 class="font-bold">Pengeluaran</h3>
            <div class="h-64 w-full">
                <canvas id="ChartPengeluaran"></canvas>
            </div>
        </div>
        <div class="rounded-lg bg-white p-5 shadow-md">
            <h3 class="font-bold">Kategori Penjualan Produk</h3>
            <div class="h-64 w-full">
                <canvas id="ChartProduk"></canvas>
            </div>
        </div>
        <div class="rounded-lg bg-white p-5 shadow-md">
            <h3 class="font-bold">Profit</h3>
            <div class="h-64 w-full">
                <canvas id="ChartProfit"></canvas>
            </div>
        </div>
        <div class="rounded-lg bg-white p-5 shadow-md">
            <h3 class="font-bold">Saldo</h3>
            <div class="h-64 w-full">
                <canvas id="ChartSaldo"></canvas>
            </div>
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

                <select class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                    <option>Semua Kategori</option>
                    <option>Kosen</option>
                    <option>Holo</option>
                </select>
                <input type="text" placeholder="Cari..."
                    class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Kode
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Nama
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Kategori
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Merek
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Supplier
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Jumlah Stok
                            </th>

                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        {{-- Contoh Data --}}
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">FA21</td>
                            <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">Kosen Pintu</td>
                            <td class="px-4 py-3 text-sm">
                                <span
                                    class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs
                                                                                                                                                                          dark:bg-green-900 dark:text-green-200">
                                    Kosen
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm font-medium text-green-600 dark:text-green-400">
                                Inkalum
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">Alkas Serdam</td>
                            <td class="px-4 py-3 text-sm">
                                1000
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
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        </script>
    @endpush
    @vite(['resources/js/charts/chart-pemasukan.js'])
    @vite(['resources/js/charts/chart-pengeluaran.js'])
    @vite(['resources/js/charts/chart-produk.js'])
    @vite(['resources/js/charts/chart-profit.js'])
    @vite(['resources/js/charts/chart-saldo.js'])
@endsection