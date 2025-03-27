{{-- resources/views/absensi.blade.php --}}
@extends('app')
@section('title', 'Absensi')
@section('content')
    {{-- Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800s">Sistem Absensi</h1>
        <p class="text-gray-600 dark:text-gray-400 mt-2">Catat kehadiran harian Anda</p>
    </div>

    {{-- Form Absensi --}}
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-8">
        <form action="#" method="POST" class="space-y-4">
            @csrf

            {{-- Nama Karyawan --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Nama Lengkap <span class="text-red-500">*</span>
                </label>
                <input type="text"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                                               dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                    placeholder="Masukkan nama lengkap" required>
            </div>

            {{-- Tanggal & Waktu --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Tanggal <span class="text-red-500">*</span>
                    </label>
                    <input type="date"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                                                                   dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                        value="{{ date('Y-m-d') }}" readonly>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Waktu Sekarang
                    </label>
                    <input type="text" class="w-full px-4 py-2 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600
                                                                                   dark:text-gray-200"
                        value="{{ date('H:i:s') }}" readonly>
                </div>
            </div>

            {{-- Tombol Action --}}
            <div class="flex gap-4 mt-6">
                <button type="button" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors
                                                                               flex items-center gap-2">
                    <i data-feather="clock"></i>
                    Check-In
                </button>

                <button type="button" class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors
                                                                               flex items-center gap-2">
                    <i data-feather="log-out"></i>
                    Check-Out
                </button>
            </div>
        </form>
    </div>

    {{-- Riwayat Absensi --}}
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Riwayat Absensi</h2>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Check-In
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Check-Out
                        </th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Status</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    {{-- Contoh Data --}}
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">2024-03-20</td>
                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">08:00:00</td>
                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">17:00:00</td>
                        <td class="px-4 py-3">
                            <span
                                class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs
                                                                                            dark:bg-green-900 dark:text-green-200">
                                Tepat Waktu
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400">
                                <i data-feather="edit" class="w-4 h-4"></i>
                            </button>
                        </td>
                    </tr>

                    {{-- Tambahkan lebih banyak baris sesuai kebutuhan --}}
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

            // Update waktu real-time
            function updateTime() {
                const timeElement = document.querySelector('input[type="text"][readonly]');
                if (timeElement) {
                    const now = new Date();
                    timeElement.value = now.toLocaleTimeString();
                }
            }
            setInterval(updateTime, 1000);
        </script>
    @endsection
@endsection