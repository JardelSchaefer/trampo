<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
     public function index(){
         
       $caminho = '../storage/app';
       $log = new LogConsulta($caminho);
       $ip = $_SERVER['REMOTE_ADDR'];
       $pagina = "Produtos";
       $data = $log->registrar($ip, $pagina);
        
        return view('site.produtos');
       
    }
}
