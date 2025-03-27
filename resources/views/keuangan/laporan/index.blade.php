@extends('app')
@section('title', 'Laporan Keuangan')

@section('content')
    <div class="flex-1 ml-64 p-8">
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
        <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-4">
            <div class="rounded-lg bg-white p-5 shadow-md">
                <h3 class="text-lg font-medium">Pemasukan</h3>
                <p class="mt-2 text-2xl font-bold">Rp1,250,000</p>
                <p>+55% dari minggu lalu</p>
            </div>
            <div class="rounded-lg bg-white p-5 shadow-md">
                <h3 class="text-lg font-medium">Pengeluaran</h3>
                <p class="mt-2 text-2xl font-bold">Rp24,500</p>
                <p>-55% dari kemarin</p>
            </div>
            <div class="rounded-lg bg-white p-5 shadow-md">
                <h3 class="text-lg font-medium">Profit</h3>
                <p class="mt-2 text-2xl font-bold">Rp100,000</p>
                <p>+45% dari bulan lalu</p>
            </div>
            <div class="rounded-lg bg-white p-5 shadow-md">
                <h3 class="text-lg font-medium">Pelanggan</h3>
                <p class="mt-2 text-2xl font-bold">1320</p>
                <p>+10 dari bulan lalu</p>
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
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-lg bg-white p-5 shadow-md">
                <div class="mb-3">
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
                </table>
            </div>
            <div class="rounded-lg bg-white p-5 shadow-md">
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
            </div>
        </div>

        </main><!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    </div>
@endsection