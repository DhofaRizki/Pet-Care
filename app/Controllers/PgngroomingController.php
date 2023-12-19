<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GroomingModel;

class PgngroomingController extends BaseController
{
    public function index()
    {
        //
    }

    public function show()
    {
        $m = new GroomingModel();
 
         return view('pgngrooming/tampildata');
    }
}
