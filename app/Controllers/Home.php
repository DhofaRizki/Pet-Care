<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboard ()
    {
        return view('dashboard/adminhome', [
            'admin' => session()->get('admin')]
        );
    }

    public function dashboard_pengguna () 
    {
        return view('dashboard/penggunahome',[
            'pengguna' => session()->get('pengguna')
    ]);
            
    }
}
