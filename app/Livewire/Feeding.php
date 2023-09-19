<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Feeding extends Component
{
    // Definición de constantes para diferentes opciones
    const LOW = 'low';
    const MEDIUM = 'medium';
    const HIGH = 'high';
    const CANTEEN_DESIGN_EFFICIENT = 'efficient';
    const CANTEEN_DESIGN_AESTHETIC = 'aesthetic';
    const LOW_COOKER_DIVISOR = 30;
    const MEDIUM_COOKER_DIVISOR = 20;
    const HIGH_COOKER_DIVISOR = 10;
    const LOW_QUANTITY_COST = 1;
    const MEDIUM_QUANTITY_COST = 2;
    const HIGH_QUANTITY_COST = 3;

    // Declaración de propiedades públicas del componente
    public $quantity = self::MEDIUM;
    public $variety = self::MEDIUM;
    public $canteenDesign = self::CANTEEN_DESIGN_AESTHETIC;
    public $prisoners = 50;
    public $cookers = 0;
    public $cooks = 0;
    public $fridges = 0;
    public $sinks = 0;
    public $bins = 1;
    public $tables = 0;
    public $benches = 0;
    public $servingTables = 0;
    public $quantityCost = 0;
    public $varietyCost = 0;
    public $dailyCost = 0;

    // Método que se ejecuta al cargar el componente
    public function mount()
    {
        $this->calculateFeeding();
    }

    // Método que se ejecuta cuando cambia el número de prisioneros
    #[On('prisoners-updated')]
    public function updateReceivedprisoners($prisoners)
    {
        $this->prisoners = $prisoners;
        $this->calculateFeeding();
    }

    // Método para calcular los costos y requisitos de alimentación
    public function calculateFeeding()
    {
        // Cálculo de cocineros y costo de cantidad
        switch ($this->quantity) {
            case self::LOW:
                $cookers = $this->prisoners / self::LOW_COOKER_DIVISOR;
                $this->quantityCost = self::LOW_QUANTITY_COST;
                break;
            case self::MEDIUM:
                $cookers = $this->prisoners / self::MEDIUM_COOKER_DIVISOR;
                $this->quantityCost = self::MEDIUM_QUANTITY_COST;
                break;
            case self::HIGH:
                $cookers = $this->prisoners / self::HIGH_COOKER_DIVISOR;
                $this->quantityCost = self::HIGH_QUANTITY_COST;
                break;
        }
        $this->cookers = $cookers < 1 ? 1 : $cookers;

        // Cálculo de cocineros
        $this->cooks = $this->cookers + 2;

        // Cálculo de neveras y costo de variedad
        switch ($this->variety) {
            case self::LOW:
                $this->fridges = $this->cookers * 1.3;
                $this->varietyCost = $this->quantityCost * 2 - $this->quantityCost;
                break;
            case self::MEDIUM:
                $this->fridges = $this->cookers * 1.7;
                $this->varietyCost = $this->quantityCost * 6 - $this->quantityCost;
                break;
            case self::HIGH:
                $this->fridges = $this->cookers * 2;
                $this->varietyCost = $this->quantityCost * 10 - $this->quantityCost;
                break;
        }

        // Cálculo del costo diario
        $this->dailyCost = ($this->varietyCost + $this->quantityCost) * $this->prisoners;

        // Cálculo de mesas, bancos, mesas de servicio y lavabos
        $tables = $this->canteenDesign === self::CANTEEN_DESIGN_EFFICIENT ? 1 : $this->prisoners / 8;
        $this->tables = $tables < 1 ? 1 : $tables;
        $benches = $this->prisoners / 4;
        $this->benches = $benches < 1 ? 1 : $benches;
        $this->servingTables = $this->prisoners < 40 ? $this->servingTables = 1 : $this->prisoners / 40;
        $this->sinks = $this->servingTables + 1;
    }

    // Método que se ejecuta cuando cambia alguna propiedad
    public function updated($property)
    {
        $this->calculateFeeding();
    }

    // Método que devuelve la vista que se debe mostrar
    public function render()
    {
        return view('livewire.feeding');
    }
}
