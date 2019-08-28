<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitucionalController extends Controller
{
    public function index(){
        
       $caminho = '../storage/app';
       $log = new LogConsulta($caminho);
       $ip = $_SERVER['REMOTE_ADDR'];
       $pagina = "Institucional";
       $data = $log->registrar($ip, $pagina);
        
        return view('site.institucional');
       
    }
}
