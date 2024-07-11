<div>
    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Peminjaman Lab FT
                UNG</a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="{{ route('dashboard') }}"
                class="flex items-center {{ Route::is('dashboard') ? 'active-nav-link' : 'opacity-75' }} text-white py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            @switch($role)
                @case(0)
                    <a href="{{ route('ruangan.index') }}"
                        class="flex items-center {{ Route::is('ruangan.*') ? 'active-nav-link' : 'opacity-75' }} text-white hover:opacity-100 py-4 pl-6 nav-item">
                        <i class="fas fa-sticky-note mr-3"></i>
                        Ruangan
                    </a>
                    <a href="{{ route('peminjaman.index') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        <i class="fas fa-table mr-3"></i>
                        Daftar Peminjaman
                    </a>
                @break

                @case(1)
                    <a href="{{ route('peminjaman.index') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        <i class="fas fa-table mr-3"></i>
                        Pinjam Ruangan
                    </a>
                @break

                @default
            @endswitch

        </nav>
    </aside>
</div>
