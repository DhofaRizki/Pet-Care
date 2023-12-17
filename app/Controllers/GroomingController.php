<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GroomingModel;

class GroomingController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new GroomingModel();
        $data = [
          'jenishewan' => request()->getPost('jenishewan'),
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
          return redirect()->to(base_url('grooming'));
        }
     }
 
     public function show(){
         $m = new GroomingModel();
 
         return view('grooming/tampildata', [
             'data_grooming' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('grooming/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new GroomingModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('grooming'));
     }
 
     public function edit($id){
         $m = new GroomingModel();
         $data = $m->where('id', $id)->first();
         return view('grooming/form', [
             'data' => $data
         ]);
        }
}
