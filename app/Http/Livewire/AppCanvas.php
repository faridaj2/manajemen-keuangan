<?php

namespace App\Http\Livewire;

use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AppCanvas extends Component
{
    use WithPagination;

    public $open;
    public $nama;
    public $paginate = 10;
    public $data = [];
 
    protected $listeners = ['dashboard', 'kategori', 'transaksi', 'laporan'];

    public function mount()
    {
        $this->open = 'livewire.app.app-canvas';
        $this->data = 'c' => category::paginate($this->paginate);
        
    }
    
    public function dashboard()
    {
        $this->open = 'livewire.app.app-canvas';
    }
    public function kategori(){
        $this->open = 'livewire.app.app-canvas-kategori';
    }
    public function transaksi(){
        $this->open = 'livewire.app.app-canvas-transaksi';
    }
    public function laporan(){
        $this->open = 'livewire.app.app-canvas-laporan';
    }
    public function save(){
        category::create([
            'user_id' => Auth::user()->id,
            'nama_kategori' => $this->nama
        ]);
        $this->nama = '';
    }







    public function render()
    {
        return view($this->open, [$this->data]);
        
    }
}
