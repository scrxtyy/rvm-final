<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown title="Monitor" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Plastics" href="{{ route('monitor.pet') }}"
            :active="request()->routeIs('monitor.pet')" />
        <x-sidebar.sublink title="Tin Cans" href="{{ route('monitor.tincans') }}"
            :active="request()->routeIs('monitor.tincans')" />
    </x-sidebar.dropdown>

    <x-sidebar.link title="Coins Monitor" href="{{ route('coins') }}"
    :active="request()->routeIs('coins')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    {{-- <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">Dummy Links</div> --}}

       
</x-perfect-scrollbar>