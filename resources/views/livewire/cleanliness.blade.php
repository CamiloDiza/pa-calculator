<x-tab-pane active="false" target="cleanliness">
    <div class="row py-3">
        <div class="col-6">
            <div class="row align-items-start">
                <x-card-list title="{{ __('Laundry (Total)') }}">
                    <x-list-item listItem="{{ __('Rooms to build') }}" badge="{{ $laundryRoomsToBuild }}" />
                    <x-list-item listItem="{{ __('Baskets') }}" badge="{{ $baskets }}" />
                    <x-list-item listItem="{{ __('Ironing Boards') }}" badge="{{ $ironingBoards }}" />
                    <x-list-item listItem="{{ __('Machines') }}" badge="{{ $machines }}" />
                    <x-list-item listItem="{{ __('Working Prisoners') }}" badge="{{ $laundryWorkingPrisoners }}" />
                    <x-list-item listItem="{{ __('Janitors') }}" badge="{{ $janitors }}" />
                </x-card-list>
                <x-card-list title="{{ __('Laundry (Per room)') }}">
                    <x-list-item listItem="{{ __('Baskets') }}" badge="{{ $basketsPerRoom }}" />
                    <x-list-item listItem="{{ __('Ironing Boards') }}" badge="{{ $ironingBoardsPerRoom }}" />
                    <x-list-item listItem="{{ __('Machines') }}" badge="{{ $machinesPerRoom }}" />
                    <x-list-item listItem="{{ __('Working Prisoners') }}" badge="{{ $laundryWorkingPrisonersPerRoom }}" />
                </x-card-list>
            </div>
        </div>
        <div class="col-6">
            <div class="row  align-items-start">
                <x-card-list title="{{ __('Cleaning Cupboard (Total)') }}">
                    <x-list-item listItem="{{ __('Rooms to build') }}" badge="{{ $cleaningCupboardRoomsToBuild }}" />
                    <x-list-item listItem="{{ __('Working Prisoners') }}"
                        badge="{{ $cleaningCupboardWorkingPrisoners }}" />
                </x-card-list>

                <x-card-list title="{{ __('Cleaning (Per room)') }}">
                    <x-list-item listItem="{{ __('Working Prisoners') }}" badge="{{ $cleaningCupboardWorkingPrisonersPerRoom }}" />
                </x-card-list>
            </div>
        </div>
    </div>

</x-tab-pane>
