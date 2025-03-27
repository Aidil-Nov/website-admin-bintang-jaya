{{-- resources/views/keuangan.blade.php --}}
@extends('app')
@section('title', 'Keuangan')
@section('content')
    {{-- Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">Manajemen Keuangan</h1>
        <p class="text-gray-600 dark:text-gray-400 mt-2">Kelola pemasukan dan pengeluaran</p>
    </div>

    {{-- Ringkasan Keuangan --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        {{-- Card Pemasukan --}}
        <div class="bg-green-100 dark:bg-green-900 p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-green-600 dark:text-green-300">Total Pemasukan</p>
                    <p class="text-2xl font-bold text-green-800 dark:text-green-200 mt-2">Rp 15.250.000</p>
                </div>
                <i data-feather="arrow-up-circle" class="w-8 h-8 text-green-600"></i>
            </div>
        </div>

        {{-- Card Pengeluaran --}}
        <div class="bg-red-100 dark:bg-red-900 p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-red-600 dark:text-red-300">Total Pengeluaran</p>
                    <p class="text-2xl font-bold text-red-800 dark:text-red-200 mt-2">Rp 8.750.000</p>
                </div>
                <i data-feather="arrow-down-circle" class="w-8 h-8 text-red-600"></i>
            </div>
        </div>

        {{-- Card Saldo --}}
        <div class="bg-blue-100 dark:bg-blue-900 p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-blue-600 dark:text-blue-300">Saldo Saat Ini</p>
                    <p class="text-2xl font-bold text-blue-800 dark:text-blue-200 mt-2">Rp 6.500.000</p>
                </div>
                <i data-feather="dollar-sign" class="w-8 h-8 text-blue-600"></i>
            </div>
        </div>
    </div>

    {{-- Form Transaksi --}}
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Tambah Transaksi</h2>
        <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
            {{-- Jumlah --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Jumlah <span class="text-red-500">*</span>
                </label>
                <input type="number" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                       dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                    placeholder="Masukkan jumlah" required>
            </div>

            {{-- Tipe Transaksi --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Jenis Transaksi <span class="text-red-500">*</span>
                </label>
                <select class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                          dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                    <option value="income">Pemasukan</option>
                    <option value="expense">Pengeluaran</option>
                </select>
            </div>

            {{-- Kategori --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Kategori
                </label>
                <select class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                          dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                    <option value="gaji">Gaji</option>
                    <option value="usaha">Usaha</option>
                    <option value="investasi">Investasi</option>
                    <option value="belanja">Belanja</option>
                </select>
            </div>

            {{-- Tanggal --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Tanggal <span class="text-red-500">*</span>
                </label>
                <input type="date" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                       dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                    value="{{ date('Y-m-d') }}" required>
            </div>

            {{-- Deskripsi --}}
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Deskripsi
                </label>
                <textarea class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                       dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" rows="3"
                    placeholder="Tambahkan deskripsi transaksi"></textarea>
            </div>

            {{-- Tombol Submit --}}
            <div class="md:col-span-2">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors
                                                       flex items-center gap-2">
                    <i data-feather="plus-circle"></i>
                    Tambah Transaksi
                </button>
            </div>
        </form>
    </div>

    {{-- Grafik Keuangan --}}
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Statistik Keuangan</h2>
        <div class="w-full h-64">
            <canvas id="financeChart"></canvas>
        </div>
    </div>

    {{-- Daftar Transaksi --}}
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Riwayat Transaksi</h2>

        {{-- Filter --}}
        <div class="flex flex-wrap gap-4 mb-4">
            <input type="date" class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
            <select class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                <option>Semua Kategori</option>
                <option>Pemasukan</option>
                <option>Pengeluaran</option>
            </select>
            <input type="text" placeholder="Cari..."
                class="px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
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
    </div>

    @section('scripts')
        <script>
            feather.replace();

            // Inisialisasi Chart
            const ctx = document.getElementById('financeChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                    datasets: [{
                        label: 'Pemasukan',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: '#10B981',
                    },
                    {
                        label: 'Pengeluaran',
                        data: [8, 15, 7, 3, 6, 9],
                        backgroundColor: '#EF4444',
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endsection
@endsection