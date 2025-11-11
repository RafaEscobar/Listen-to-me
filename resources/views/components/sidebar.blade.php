{{-- Sidebar partial --}}
@props(['active' => '', 'logo' => null])

<!-- Mobile: Toggle button -->
<div class="lg:hidden">
  <button id="sidebarToggle" aria-label="Abrir menú" class="m-3 p-2 rounded-md focus:outline-none focus:ring">
    <!-- simple hamburger -->
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
    </svg>
  </button>
</div>

<!-- Sidebar + overlay -->
<div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden lg:hidden" aria-hidden="true"></div>

<aside id="sidebar"
       class="fixed left-0 top-0 h-full w-64 bg-gray-800 text-gray-100 transform -translate-x-full lg:translate-x-0 transition-transform duration-200 z-40"
       role="navigation" aria-label="Sidebar">
  <!-- Logo -->
  <div class="flex items-center gap-3 px-4 py-5 border-b border-gray-700">
    @if($logo)
      <img src="{{ $logo }}" alt="Logo" class="h-10 w-auto">
    @else
      {{-- Inline SVG fallback logo --}}
      <div class="h-10 w-10 flex items-center justify-center rounded-md bg-gray-700">
        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path d="M3 12h18M3 6h18M3 18h18" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    @endif
    <span class="font-semibold text-lg">Mi App</span>
    <!-- Close button for mobile -->
    <button id="sidebarClose" class="ml-auto lg:hidden p-1 rounded-md focus:outline-none focus:ring" aria-label="Cerrar menú">
      <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
  </div>

  <!-- Menu -->
  <nav class="px-2 py-4 space-y-1">
    <a href="#"
       class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 {{ $active === 'dashboard' ? 'bg-gray-900' : '' }}">
      <!-- icon -->
      <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M3 13h8V3H3v10zM13 21h8v-8h-8v8zM13 3v8h8V3h-8zM3 21h8v-8H3v8z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <span>Dashboard</span>
    </a>

    <a href="#"
       class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 {{ $active === 'reports' ? 'bg-gray-900' : '' }}">
      <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 17v-6h6v6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <span>Reportes</span>
    </a>

    <a href="#"
       class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 {{ $active === 'settings' ? 'bg-gray-900' : '' }}">
      <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 15.5A3.5 3.5 0 1 0 12 8.5a3.5 3.5 0 0 0 0 7zM19.4 15a1.7 1.7 0 0 0 .3 1.9l.1.1a1 1 0 0 1-1.4 1.4l-.1-.1a1.7 1.7 0 0 0-1.9-.3 1.7 1.7 0 0 0-1 1.6V21a1 1 0 0 1-2 0v-.1a1.7 1.7 0 0 0-1-1.6 1.7 1.7 0 0 0-1.9.3l-.1.1A1 1 0 0 1 6 18.1l.1-.1a1.7 1.7 0 0 0 .3-1.9 1.7 1.7 0 0 0-1.6-1H3a1 1 0 0 1 0-2h.1a1.7 1.7 0 0 0 1.6-1 1.7 1.7 0 0 0-.3-1.9L4.2 8.9A1 1 0 0 1 5.6 7.5l.1.1a1.7 1.7 0 0 0 1.9.3h.1a1.7 1.7 0 0 0 1-1.6V6a1 1 0 0 1 2 0v.1a1.7 1.7 0 0 0 1 1.6 1.7 1.7 0 0 0 1.9-.3l.1-.1A1 1 0 0 1 18.4 6.4l-.1.1a1.7 1.7 0 0 0-.3 1.9 1.7 1.7 0 0 0 1.6 1H21a1 1 0 0 1 0 2h-.1a1.7 1.7 0 0 0-1.6 1z" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <span>Configuración</span>
    </a>

    <a href="#"
       class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 {{ $active === 'profile' ? 'bg-gray-900' : '' }}">
      <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0 2c-4 0-8 2-8 4v1h16v-1c0-2-4-4-8-4z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <span>Perfil</span>
    </a>
  </nav>

  <!-- Footer small text -->
  <div class="absolute bottom-0 w-full px-4 py-4 text-xs text-gray-400 border-t border-gray-700">
    <div>© {{ date('Y') }} Mi App</div>
  </div>
</aside>
