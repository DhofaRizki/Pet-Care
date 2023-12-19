<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DokterModel;

class PgndokterController extends BaseController
{
    public function index()
    {
        //
    }

    public function show()
    {
        $m = new DokterModel();
 
         return view('pgndokter/tampildata');
    }
}
