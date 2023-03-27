<?php

namespace App\Controllers;
class matakuliah extends BaseController{
    public function index(){
        return view('view-form-matakuliah');
    }
    public function cetak()
    {
        echo "<pre>";
        var_dump($this->request->getVar());
        echo "</pre>";
    }
}
