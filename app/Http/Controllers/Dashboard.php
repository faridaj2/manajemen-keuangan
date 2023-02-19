<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Dashboard extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dashboard(){
        return view('dashboard.dashboard');
    }
    public function kategori(){
        return view('dashboard.kategori');
    }
    public function transaksi(){
        return view('dashboard.transaksi');
    }
    public function laporan()
    {
        return view('dashboard.laporan');
    }
}
