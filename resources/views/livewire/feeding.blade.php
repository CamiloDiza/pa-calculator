<x-tab-pane active="true" target="feeding">
    <div class="row py-3">
        <div class="col-4">
            <div class="mb-3">
                <p>{{ __('Select the quantity and variety of food to be served:') }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">{{ __('Quantity') }}</label>
                <select wire:model.live="quantity" class="form-select form-select-lg">
                    <option value="low">{{ __('Low') }}</option>
                    <option value="medium" selected>{{ __('Medium') }}</option>
                    <option value="high">{{ __('High') }}</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">{{ __('Variety') }}</label>
                <select wire:model.live="variety" class="form-select form-select-lg">
                    <option value="low">{{ __('Low') }}</option>
                    <option value="medium">{{ __('Medium') }}</option>
                    <option value="high">{{ __('High') }}</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">{{ __('Canteen room design') }}</label>
                <select wire:model.live="canteenDesign" class="form-select form-select-lg">
                    <option value="aesthetic">{{ __('Aesthetic') }}</option>
                    <option value="efficient">{{ __('Efficient') }}</option>
                </select>
            </div>
        </div>
        <div class="col-8">
            <div class="row container gy-3 align-items-start" style="margin-left: 0%; padding-right: 0%">
                <x-card-list title="Kitchen">
                    <x-list-item listItem="Cookers" badge="{{ $cookers }}" />
                    <x-list-item listItem="Cooks" badge="{{ $cooks }}" />
                    <x-list-item listItem="Fridges" badge="{{ $fridges }}" />
                    <x-list-item listItem="Sinks" badge="{{ $sinks }}" />
                    <x-list-item listItem="Bins" badge="{{ $bins }}" />
                </x-card-list>

                <x-card-list title="Canteen">
                    <x-list-item listItem="Tables" badge="{{ $tables }}" />
                    <x-list-item listItem="Benches" badge="{{ $benches }}" />
                    <x-list-item listItem="Serving table" badge="{{ $servingTables }}" />
                    <x-list-item listItem="Bins" badge="{{ $bins }}" />
                </x-card-list>

                <x-card-list title="Food Costs">
                    <x-list-item listItem="Quantity Cost" badge="${{ $quantityCost }}" />
                    <x-list-item listItem="Variety Cost" badge="${{ $varietyCost }}" />
                    <x-list-item listItem="Daily Cost" badge="${{ $dailyCost }}" />
                </x-card-list>
            </div>
        </div>
    </div>
</x-tab-pane>
