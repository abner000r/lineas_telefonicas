<?php
namespace App\Controllers;
use App\Models\Lineas_telefonicasModel;

class Lineas_telefonicas extends BaseController
{
    public function index(): string
    {
     
        $telef= new Lineas_telefonicasModel();
        $datos['datos']=$telef->findAll();
        return view('lineas_telefonicas',$datos);
    }
}