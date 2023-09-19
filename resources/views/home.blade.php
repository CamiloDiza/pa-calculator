<x-app>
    <livewire:prisoners-input />

    <div class="pt-3">
        <nav>
            <div class="nav nav-tabs justify-content-center border-0" role="tablist">
                <x-tab-button active="true" target="feeding">{{ __('Kitchen / Canteen') }}</x-tab-button>
                <x-tab-button active="false" target="cleanliness">{{ __('Laundry / Cleaning') }}</x-tab-button>
                <x-tab-button active="false" target="workshop">{{ __('Workshop') }}</x-tab-button>
            </div>
        </nav>

        <div class="tab-content px-3 rounded bg-dark bg-gradient bg-opacity-10">
            <livewire:feeding />
            <livewire:cleanliness />
            <livewire:workshop />
        </div>
    </div>
</x-app>
