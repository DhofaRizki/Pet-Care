<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PBarangModel;

class PBarangController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new PBarangModel();
        $data = [
          'jenis' => request()->getPost('jenis'),
          'namabarang' => request()->getPost('namabarang'),
          'qty' => request()->getPost('qty'),
          
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('pbarang'));
        }
     }
 
     public function show(){
         $m = new PBarangModel();
 
         return view('pbarang/tampildata', [
             'data_pbarang' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('pbarang/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new PBarangModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('pbarang'));
     }
 
     public function edit($id){
         $m = new PBarangModel();
         $data = $m->where('id', $id)->first();
         return view('pbarang/form', [
             'data' => $data
         ]);
        }
}
