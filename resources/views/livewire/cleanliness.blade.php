<x-tab-pane active="false" target="cleanliness">
    <div class="row py-3">
        <div class="col-md-6">
            <div class="row gy-3 align-items-start">
                <x-card-list title="{{ __('Laundry (Total)') }}">
                    <x-list-item listItem="{{ __('Rooms to build') }}" badge="{{ round($laundryRoomsToBuild) }}" />
                    <x-list-item listItem="{{ __('Baskets') }}" badge="{{ round($baskets) }}" />
                    <x-list-item listItem="{{ __('Ironing Boards') }}" badge="{{ round($ironingBoards) }}" />
                    <x-list-item listItem="{{ __('Machines') }}" badge="{{ round($machines) }}" />
                    <x-list-item listItem="{{ __('Working Prisoners') }}" badge="{{ round($laundryWorkingPrisoners) }}" />
                    <x-list-item listItem="{{ __('Janitors') }}" badge="{{ round($janitors) }}" />
                </x-card-list>
                <x-card-list title="{{ __('Laundry (Per room)') }}">
                    <x-list-item listItem="{{ __('Baskets') }}" badge="{{ round($basketsPerRoom) }}" />
                    <x-list-item listItem="{{ __('Ironing Boards') }}" badge="{{ round($ironingBoardsPerRoom) }}" />
                    <x-list-item listItem="{{ __('Machines') }}" badge="{{ round($machinesPerRoom) }}" />
                    <x-list-item listItem="{{ __('Working Prisoners') }}" badge="{{ round($laundryWorkingPrisonersPerRoom) }}" />
                </x-card-list>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="row gy-3 align-items-start">
                <x-card-list title="{{ __('Cleaning Cupboard (Total)') }}">
                    <x-list-item listItem="{{ __('Rooms to build') }}" badge="{{ round($cleaningCupboardRoomsToBuild) }}" />
                    <x-list-item listItem="{{ __('Working Prisoners') }}"
                        badge="{{ round($cleaningCupboardWorkingPrisoners) }}" />
                </x-card-list>

                <x-card-list title="{{ __('Cleaning Cupboard (Per room)') }}">
                    <x-list-item listItem="{{ __('Working Prisoners') }}" badge="{{ round($cleaningCupboardWorkingPrisonersPerRoom) }}" />
                </x-card-list>
            </div>
        </div>
    </div>
</x-tab-pane>
