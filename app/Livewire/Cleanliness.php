<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Cleanliness extends Component
{
    public $prisoners = 50;

    public $laundryRoomsToBuild = 0;
    public $baskets = 0;
    public $ironingBoards = 0;
    public $machines = 0;
    public $laundryWorkingPrisoners = 0;
    public $janitors = 0;
    public $basketsPerRoom = 0;
    public $ironingBoardsPerRoom = 0;
    public $machinesPerRoom = 0;
    public $laundryWorkingPrisonersPerRoom = 0;
    public $cleaningCupboardRoomsToBuild = 0;
    public $cleaningCupboardWorkingPrisoners = 0;
    public $cleaningCupboardWorkingPrisonersPerRoom = 0;

    public function mount()
    {
        $this->calculateCleanliness();
    }

    #[On('prisoners-updated')]
    public function updateReceivedprisoners($prisoners)
    {
        $this->prisoners = $prisoners;
        $this->calculateCleanliness();
    }

    public function calculateCleanliness()
    {
        $this->laundryRoomsToBuild = round($this->prisoners / 100);
        $this->baskets = round($this->prisoners / 16);
        $this->basketsPerRoom = round($this->baskets / $this->laundryRoomsToBuild);
        $this->ironingBoards = round($this->baskets / 2);
        $this->ironingBoardsPerRoom = round($this->ironingBoards / $this->laundryRoomsToBuild);
        $this->machines = $this->prisoners < 25 ? 1 : round($this->baskets / 3);
        $this->machinesPerRoom = round($this->machines / $this->laundryRoomsToBuild);
        $this->laundryWorkingPrisoners = $this->baskets;
        $this->laundryWorkingPrisonersPerRoom = round($this->laundryWorkingPrisoners / $this->laundryRoomsToBuild);
        $this->janitors = $this->laundryRoomsToBuild;
        $this->cleaningCupboardWorkingPrisoners = round($this->prisoners / 10);
        $this->cleaningCupboardRoomsToBuild = round(($this->cleaningCupboardWorkingPrisoners * 4) / 28);
        $this->cleaningCupboardWorkingPrisonersPerRoom = round($this->cleaningCupboardWorkingPrisoners / $this->cleaningCupboardRoomsToBuild);
    }

    public function updated($property)
    {
        $this->calculateFeeding();
    }


    public function render()
    {
        return view('livewire.cleanliness');
    }
}
