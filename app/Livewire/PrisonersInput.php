<?php

namespace App\Livewire;

use Livewire\Component;

class PrisonersInput extends Component
{
    // Declaración de propiedad pública del componente
    public $prisoners = 50;

    // Método que devuelve la vista que se debe mostrar
    public function render()
    {
        return view('livewire.prisoners-input');
    }

    // Método que se ejecuta cuando cambia la propiedad $prisoners
    public function updatedprisoners()
    {
        // Validar que $prisoners sea un número entero mayor a 0
        if (!is_numeric($this->prisoners) || $this->prisoners < 1) {
            $this->prisoners = 1; // Establecer a 1 si no cumple con la validación
        }

        // Emitir un evento llamado 'prisoners-updated' con el valor actual de $prisoners
        $this->dispatch('prisoners-updated', prisoners: $this->prisoners);
    }
}
