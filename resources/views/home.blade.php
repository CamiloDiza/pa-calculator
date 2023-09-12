<x-app>
    <div class="text-center">
        <span class="fs-2">{{ __('Total number of prisoners:') }}</span>
        <div class="d-flex justify-content-center">
            <input type="number" class="form-control form-control-lg w-50">
        </div>
    </div>

    <div class="pt-3">
        <nav>
            <div class="nav nav-tabs justify-content-center" role="tablist">
                <x-tab-button active="true" target="feeding">{{ __('Kitchen / Canteen') }}</x-tab-button>
                <x-tab-button active="false" target="laundry">{{ __('Laundry') }}</x-tab-button>
                <x-tab-button active="false" target="workshop">{{ __('Workshop') }}</x-tab-button>
            </div>
        </nav>

        <div class="tab-content">
            <x-tab-pane active="true" target="feeding">1</x-tab-pane>
            <x-tab-pane active="false" target="laundry">2</x-tab-pane>
            <x-tab-pane active="false" target="workshop">3</x-tab-pane>
        </div>
    </div>
</x-app>
