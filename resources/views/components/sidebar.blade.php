@props(['active' => '', 'logo' => null])

<!-- Botón de hamburguesa para abrir menú en dispositivos moviles -->
<div class="lg:hidden">
    <button id="sidebarToggle" aria-label="Abrir menú" class="m-3 p-2 rounded-md focus:outline-none focus:ring">
        <!-- simple hamburger -->
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
</div>

<!-- Overlay -->
<div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden lg:hidden" aria-hidden="true"></div>

<!-- Sidebar -->
<aside id="sidebar" class="fixed left-0 top-0 h-full w-64 bg-[#0894ff] text-gray-100 transform -translate-x-full lg:translate-x-0 transition-transform duration-200 z-40" role="navigation">
    <!-- Logo -->
    <div class="flex items-center gap-3 px-4 py-5 border-b border-gray-700">
        @if($logo)
            <img src="{{ $logo }}" alt="Logo" class="h-10 w-auto">
        @else
            {{--! TODO: QUITAR --}}
            <div class="h-10 w-10 flex items-center justify-center rounded-md bg-gray-700">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M3 12h18M3 6h18M3 18h18" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
        @endif
        <span class="font-semibold text-lg">Mi App</span>
        <!-- Close button for mobile -->
        <button id="sidebarClose" class="ml-auto lg:hidden p-1 rounded-md focus:outline-none focus:ring"
            aria-label="Cerrar menú">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Menu -->
    <nav class="px-2 py-4 space-y-1">
        <a href="{{route('dashboard')}}" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 {{ $active === 'dashboard' ? 'bg-gray-900' : '' }}">
            <x-fas-table-columns class="w-6"/>
            <span class="text-lg">Espacios</span>
        </a>
        <a href="{{route('entries.index')}}" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 {{ $active === 'entries' ? 'bg-gray-900' : '' }}">
            <x-fas-file-lines class="w-5" />
            <span class="text-lg">Posts</span>
        </a>
        <a href="{{route('users.index')}}" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 {{ $active === 'users' ? 'bg-gray-900' : '' }}">
            <x-fas-users class="w-6" />
            <span class="text-lg">Usuarios</span>
        </a>
    </nav>

    <!-- Footer -->
    <div class="absolute bottom-0 w-full px-4 py-4 text-xs text-gray-400 border-t border-gray-700">
        <div class="text-gray-700 font-medium">
            © {{ date('Y') }} By Kaihatsu Code
        </div>
    </div>
</aside>
