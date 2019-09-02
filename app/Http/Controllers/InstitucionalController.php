<?php

namespace App\Http\Controllers;
use App\Util\LogConsulta;
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
