<?php

namespace App\Http\Livewire\Nav;

use Livewire\Component;

class SideNav extends Component
{
    public $menu = 1;

    public function dashboard(){
        $this->emit('dashboard');
    }
    
    public function render()
    {
        return view('livewire.nav.side-nav');
    }
    
}
