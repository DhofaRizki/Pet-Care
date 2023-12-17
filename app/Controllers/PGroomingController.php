<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PGroomingModel;

class PGroomingController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new PGroomingModel();
        $data = [
          
          'namahewan' => request()->getPost('namahewan'),
          'jenishewan' => request()->getPost('jenishewan'),
          'kelamin' => request()->getPost('kelamin'),
          'jenispaket' => request()->getPost('jenispaket'),
          'harga' => request()->getPost('harga'),
          
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('pgrooming'));
        }
     }
 
     public function show(){
         $m = new PGroomingModel();
 
         return view('pgrooming/tampildata', [
             'data_pgrooming' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('pgrooming/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new PGroomingModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('pgrooming'));
     }
 
     public function edit($id){
         $m = new PGroomingModel();
         $data = $m->where('id', $id)->first();
         return view('pgrooming/form', [
             'data' => $data
         ]);
        }
}
