<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Cleanliness extends Component
{
    // Declaración de propiedades públicas del componente
    public $prisoners = 50;
    public $laundryRoomsToBuild = 1;
    public $baskets = 0;
    public $ironingBoards = 0;
    public $machines = 0;
    public $laundryWorkingPrisoners = 0;
    public $janitors = 0;
    public $basketsPerRoom = 0;
    public $ironingBoardsPerRoom = 0;
    public $machinesPerRoom = 0;
    public $laundryWorkingPrisonersPerRoom = 0;
    public $cleaningCupboardRoomsToBuild = 1;
    public $cleaningCupboardWorkingPrisoners = 0;
    public $cleaningCupboardWorkingPrisonersPerRoom = 0;

    // Método que se ejecuta al cargar el componente
    public function mount()
    {
        $this->calculateCleanliness();
    }

    // Método que se ejecuta cuando cambia el número de prisioneros (usando un evento)
    #[On('prisoners-updated')]
    public function updateReceivedprisoners($prisoners)
    {
        $this->prisoners = $prisoners;
        $this->calculateCleanliness();
    }

    // Método para calcular aspectos relacionados con la limpieza
    public function calculateCleanliness()
    {
        // Cálculos relacionados con la lavandería
        $laundryRoomsToBuild = $this->prisoners / 100;
        $this->laundryRoomsToBuild = $laundryRoomsToBuild < 1 ? 1 : $laundryRoomsToBuild;

        $baskets = $this->prisoners / 16;
        $this->baskets = $baskets < 1 ? 1 : $baskets;
        $this->basketsPerRoom = $this->baskets / $this->laundryRoomsToBuild;

        $ironingBoards = $this->baskets / 2;
        $this->ironingBoards = $ironingBoards < 1 ? 1 : $ironingBoards;
        $this->ironingBoardsPerRoom = $this->ironingBoards / $this->laundryRoomsToBuild;

        $this->machines = $this->prisoners < 25 ? 1 : $this->baskets / 3;
        $this->machinesPerRoom = $this->machines / $this->laundryRoomsToBuild;

        $this->laundryWorkingPrisoners = $this->baskets;
        $this->laundryWorkingPrisonersPerRoom = $this->laundryWorkingPrisoners / $this->laundryRoomsToBuild;

        $this->janitors = $this->laundryRoomsToBuild;

        // Cálculos relacionados con la sala de limpieza
        $this->cleaningCupboardWorkingPrisoners = $this->prisoners / 10;

        $cleaningCupboardRoomsToBuild = ($this->cleaningCupboardWorkingPrisoners * 4) / 28;
        $this->cleaningCupboardRoomsToBuild = $cleaningCupboardRoomsToBuild < 1 ? 1 : $cleaningCupboardRoomsToBuild;

        $this->cleaningCupboardWorkingPrisonersPerRoom = $this->cleaningCupboardWorkingPrisoners / $this->cleaningCupboardRoomsToBuild;
    }

    // Método que se ejecuta cuando cambia alguna propiedad
    public function updated($property)
    {
        $this->calculateFeeding();
    }

    // Método que devuelve la vista que se debe mostrar
    public function render()
    {
        return view('livewire.cleanliness');
    }
}
