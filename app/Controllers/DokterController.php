<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DokterModel;

class DokterController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new DokterModel();
        $data = [
          'nama' => request()->getPost('nama'),
          'notlp' => request()->getPost('notlp'),
          'jadwal' => request()->getPost('jadwal'),
          'lokasi' => request()->getPost('lokasi'),
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('dokter'));
        }
     }
 
     public function show(){
         $m = new DokterModel();
 
         return view('dokter/tampildata', [
             'data_dokter' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('dokter/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new DokterModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('dokter'));
     }
 
     public function edit($id){
         $m = new DokterModel();
         $data = $m->where('id', $id)->first();
         return view('dokter/form', [
             'data' => $data
         ]);
        }
}
