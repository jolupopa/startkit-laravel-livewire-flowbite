<?php

namespace App\Livewire;

use Livewire\Component;

class DarkMode extends Component
{
    public $modoOscuro = false;

    public function toggleModoOscuro()
    {
        $this->modoOscuro = !$this->modoOscuro;
        session(['modoOscuro' => $this->modoOscuro]);
    }

    public function mount()
    {
        $this->modoOscuro = session('modoOscuro', false);
    }

    public function render()
    {
        return view('livewire.dark-mode');
    }
}
