<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function index(){
        
       $titulo = "FIESC SC - Senai" ;
       $rodape = date('Y').' Todos os direitos reservados';
       return view('site.index', compact('titulo','rodape'));
    }
    
    
}
