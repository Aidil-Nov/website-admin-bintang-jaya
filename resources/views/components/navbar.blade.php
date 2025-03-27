<aside class="w-64 h-screen bg-gray-800 text-white fixed left-0">
    <div class="p-4 border-b border-gray-700">
        <h1 class="text-xl font-bold">Logo</h1>
    </div>
    <nav class="mt-4">
        <!-- Dashboard -->
        <div class="space-y-1 px-4 rounded mb-2">
            <a href="{{ route('dashboard') }}"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-colors
                {{ request()->routeIs('dashboard') ? 'bg-gray-900 text-gray-100' : 'text-gray-400 hover:bg-gray-700' }}">
                <i data-feather="home"></i>
                <span>Dashboard</span>
            </a>
        </div>

        <!-- Keuangan -->
        <div class="space-y-1 px-4 rounded mb-2">
            <a href="{{ route('keuangan') }}"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-colors
                {{ request()->routeIs('keuangan') ? 'bg-gray-900 text-gray-100' : 'text-gray-400 hover:bg-gray-700' }}">
                <i data-feather="dollar-sign"></i>
                <span>Keuangan</span>
            </a>
        </div>

        <!-- Absensi -->
        <div class="space-y-1 px-4 rounded mb-2">
            <a href="{{ route('absensi') }}"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-colors
                {{ request()->routeIs('absensi') ? 'bg-gray-900 text-gray-100' : 'text-gray-400 hover:bg-gray-700' }}">
                <i data-feather="user-check"></i>
                <span>Absensi</span>
            </a>
        </div>

        <!-- Inventaris -->
        <div class="space-y-1 px-4 rounded mb-2">
            <a href="{{ route('inventaris') }}"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-colors
                {{ request()->routeIs('inventaris') ? 'bg-gray-900 text-gray-100' : 'text-gray-400 hover:bg-gray-700' }}">
                <i data-feather="inbox"></i>
                <span>Inventaris</span>
            </a>
        </div>

        <!-- Stok -->
        <div class="space-y-1 px-4 rounded mb-2">
            <a href="{{ route('stok') }}"
                class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-colors
                {{ request()->routeIs('stok') ? 'bg-gray-900 text-gray-100' : 'text-gray-400 hover:bg-gray-700' }}">
                <i data-feather="layers"></i>
                <span>Stok Material</span>
            </a>
        </div>
    </nav>
</aside>

@push('scripts')
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            feather.replace();
            
            // Untuk menu dropdown (jika ada)
            document.querySelectorAll('.arrow_down').forEach(chevron => {
                chevron.addEventListener('click', function() {
                    const submenu = this.closest('li').querySelector('.submenu');
                    submenu.classList.toggle('hidden');
                    feather.replace();
                });
            });
        });
    </script>
@endpush