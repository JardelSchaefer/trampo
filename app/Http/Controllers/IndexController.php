<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\LogConsulta;


class IndexController extends Controller
{
    
    public function index(){
        
       $titulo = "Home" ;
       $rodape = date('Y').' Todos os direitos reservados';
       $caminho = '../storage/app';
       $log = new LogConsulta($caminho);
       $ip = $_SERVER['REMOTE_ADDR'];
       $pagina = "home";
       $data = $log->registrar($ip, $pagina);
       
       
       
       return view('site.index', compact('titulo','rodape'));
       
       
    }
    
 
    
    
}
