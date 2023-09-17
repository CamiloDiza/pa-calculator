<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Feeding extends Component
{
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

    public $quantity = self::MEDIUM;
    public $variety = self::MEDIUM;
    public $canteenDesign = self::CANTEEN_DESIGN_AESTHETIC;
    public $prisoners = 50;

    public $cookers = 0, $cooks = 0, $fridges = 0, $sinks = 0, $bins = 1, $tables = 0, $benches = 0, $servingTables = 0, $quantityCost = 0, $varietyCost = 0, $dailyCost = 0;

    public function mount()
    {
        $this->calculateFeeding();
    }

    #[On('prisoners-updated')]
    public function updateReceivedprisoners($prisoners)
    {
        $this->prisoners = $prisoners;
        $this->calculateFeeding();
    }

    public function calculateFeeding()
    {
        // Cookers
        if ($this->prisoners < 10) {
            $this->cookers = 1;
        } else {
            switch ($this->quantity) {
                case self::LOW:
                    $this->cookers = round($this->prisoners / self::LOW_COOKER_DIVISOR);
                    break;

                case self::MEDIUM:
                    $this->cookers = round($this->prisoners / self::MEDIUM_COOKER_DIVISOR);
                    break;

                case self::HIGH:
                    $this->cookers = round($this->prisoners / self::HIGH_COOKER_DIVISOR);
                    break;
            }
        }

        // Cooks
        $this->cooks = $this->cookers + 2;

        // Quantity Cost
        switch ($this->quantity) {
            case self::LOW:
                $this->quantityCost = self::LOW_QUANTITY_COST;
                break;

            case self::MEDIUM:
                $this->quantityCost = self::MEDIUM_QUANTITY_COST;
                break;

            case self::HIGH:
                $this->quantityCost = self::HIGH_QUANTITY_COST;
                break;
        }

        // Fridges and Variety Cost
        switch ($this->variety) {
            case self::LOW:
                $this->fridges = round($this->cookers * 1.3);
                $this->varietyCost = $this->quantityCost * 2 - $this->quantityCost;
                break;

            case self::MEDIUM:
                $this->fridges = round($this->cookers * 1.7);
                $this->varietyCost = $this->quantityCost * 6 - $this->quantityCost;
                break;

            case self::HIGH:
                $this->fridges = round($this->cookers * 2);
                $this->varietyCost = $this->quantityCost * 10 - $this->quantityCost;
                break;
        }

        // Daily Cost
        $this->dailyCost = ($this->varietyCost + $this->quantityCost) * $this->prisoners;

        // Tables
        $this->tables = $this->canteenDesign === self::CANTEEN_DESIGN_EFFICIENT ? 1 : round($this->prisoners / 8);

        // Benches
        $this->benches = round($this->prisoners / 4);

        // Serving table
        $this->servingTables = $this->prisoners < 40 ? $this->servingTables = 1 : round($this->prisoners / 40);

        // Sinks
        $this->sinks = $this->servingTables + 1;
    }

    public function updated($property)
    {
        $this->calculateFeeding();
    }

    public function render()
    {
        return view('livewire.feeding');
    }
}
