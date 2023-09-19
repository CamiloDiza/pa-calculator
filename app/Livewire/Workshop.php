<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Workshop extends Component
{
    // Declaración de propiedades públicas del componente
    public $workers = 7;
    public $totalWorkHours = 8;
    public $prisoners = 50;
    public $workSaw = 0;
    public $workPress = 0;
    public $tables = 0;
    public $profits = 0;

    // Método que se ejecuta al cargar el componente
    public function mount()
    {
        $this->calculateWorkshop();
    }

    // Método que se ejecuta cuando cambia el número de prisioneros (usando un evento)
    #[On('prisoners-updated')]
    public function updateReceivedprisoners($prisoners)
    {
        $this->prisoners = $prisoners;
        $this->calculateWorkshop();
    }

    public function calculateWorkshop()
    {
        // Validar que $workers sea un número entero mayor a 0
        if (!is_numeric($this->workers) || $this->workers < 1) {
            $this->workers = 1;
        }

        // Asegurarse de que no haya más trabajadores que prisioneros
        if ($this->workers > $this->prisoners) {
            $this->workers = $this->prisoners;
        }

        // Cálculo de máquinas necesarias
        $workSaw = $this->workers / 3.3;
        $this->workSaw = $workSaw < 1 ? 1 : $workSaw;

        $workPress = $this->workSaw * 2;
        $this->workPress = $workPress < 1 ? 1 : $workPress;

        // Cálculo de mesas necesarias
        $this->tables = $this->workSaw;

        // Cálculo de ganancias
        $this->profits = $this->totalWorkHours * 25 * $this->workPress;
    }

    // Método que se ejecuta cuando cambia alguna propiedad
    public function updated($property)
    {
        $this->calculateWorkshop();
    }

    // Método que devuelve la vista que se debe mostrar
    public function render()
    {
        return view('livewire.workshop');
    }
}
