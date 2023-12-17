<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class BarangController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new BarangModel();
        $data = [
          'nambarang' => request()->getPost('nambarang'),
          'jenis' => request()->getPost('jenis'),
          'harga' => request()->getPost('harga'),
          'lokasi' => request()->getPost('lokasi'),
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('barang'));
        }
     }
 
     public function show(){
         $m = new BarangModel();
 
         return view('barang/tampildata', [
             'data_barang' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('barang/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new BarangModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('barang'));
     }
 
     public function edit($id){
         $m = new BarangModel();
         $data = $m->where('id', $id)->first();
         return view('barang/form', [
             'data' => $data
         ]);
        }
}
