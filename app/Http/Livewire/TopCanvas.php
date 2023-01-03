<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TopCanvas extends Component
{
    protected $listeners = ['dashboard', 'kategori', 'transaksi', 'laporan'];

    
    public function dashboard()
    {
        
    }
    public function kategori(){
        
    }
    public function transaksi(){
        
    }
    public function laporan(){
        
    }





    public function render()
    {
        return view('livewire.top-canvas');
    }
}
