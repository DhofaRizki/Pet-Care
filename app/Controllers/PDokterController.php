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
        }      $id=$r;
        if($r != false){
            $this->terimaFile($id);
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

    private function terimaFile($id){
        $f = request()->getFile('foto');
        if($f->isFile()){
            $target = WRITEPATH . '/uploads/';
            $f->move($target, $id . '.png');
        }
    }

    public function foto($id){
        $f = file_get_contents(WRITEPATH . '/uploads/' . $id . '.png');
        return response()
                ->setHeader('Content-type', 'image/png')
                ->setBody( $f );
    }
}
