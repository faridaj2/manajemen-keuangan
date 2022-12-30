<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AppCanvas extends Component
{
    public $open;
 
    protected $listeners = ['dashboard', 'transaksi'];

    public function mount()
    {
        $this->open = 'livewire.app-canvas';
    }
    public function transaksi(){
        
    }
    public function dashboard()
    {
        $this->open = 'livewire.app-canvas';
    }

    public function render()
    {
        return view($this->open);
    }
}
