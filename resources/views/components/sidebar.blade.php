{{-- resources/views/components/sidebar.blade.php --}}
<div class="drawer lg:drawer-open">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <!-- Navbar -->

        <!-- Page content here -->
        <div class="p-4">
            {{ $slot }}
        </div>
    </div>

    <div class="drawer-side is-drawer-close:overflow-visible">
        <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
        <div class="flex min-h-full flex-col items-start bg-base-200 is-drawer-close:w-14 is-drawer-open:w-64">
            <ul class="menu w-full grow">
                <x-sidebar-link href="#" tooltip="Inicio" label="Inicio" active-pattern="/*">
                    <x-slot:icon>
                        <x-icons.home />
                    </x-slot:icon>
                </x-sidebar-link>
                <x-sidebar-link href="#" tooltip="Configuraciones" label="Configuraciones" active-pattern="configuraciones*">
                    <x-slot:icon>
                        <x-icons.settings />
                    </x-slot:icon>
                </x-sidebar-link>
            </ul>
        </div>
    </div>
</div>
