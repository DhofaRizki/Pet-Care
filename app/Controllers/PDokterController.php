<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PDokterModel;

class PDokterController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new PDokterModel();
        $data = [
          'nama' => request()->getPost('nama'),
          'namahewan' => request()->getPost('namahewan'),
          'jenishewan' => request()->getPost('jenishewan'),
          'tgl_dtg' => request()->getPost('tgl_dtg'),
          'jam' => request()->getPost('jam'),
          'notlp' => request()->getPost('notlp'),
          'keluhan' => request()->getPost('keluhan'),
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('pdokter'));
        }
     }
 
     public function show(){
         $m = new PDokterModel();
 
         return view('pdokter/tampildata', [
             'data_pdokter' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('pdokter/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new PDokterModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('pdokter'));
     }
 
     public function edit($id){
         $m = new PDokterModel();
         $data = $m->where('id', $id)->first();
         return view('pdokter/form', [
             'data' => $data
         ]);
        }
}
