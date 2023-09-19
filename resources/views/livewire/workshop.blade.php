<x-tab-pane active="true" target="workshop">
    <div class="row py-3">
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">{{ __('Enter Workers') }}</label>
                <input wire:model.live="workers" class="form-control form-control-lg" type="number">
            </div>
            <div class="mb-3">
                <label class="form-label">{{ __('Total work hours') }}</label>
                <input wire:model.live="totalWorkHours" class="form-control form-control-lg" type="number">
            </div>
        </div>

        <div class="col-md-8">
            <div class="row align-items-start justify-content-center">
                <x-card-list title="{{ __('Workshop') }}">
                    <x-list-item listItem="{{ __('Work Saw') }}" badge="{{ round($workSaw) }}" />
                    <x-list-item listItem="{{ __('Work Press') }}" badge="{{ round($workPress) }}" />
                    <x-list-item listItem="{{ __('Tables') }}" badge="{{ round($tables) }}" />
                    <x-list-item listItem="{{ __('Approx. Profits') }}" badge="${{ round($profits, 1) }}" />
                </x-card-list>
            </div>
        </div>
    </div>
</x-tab-pane>
