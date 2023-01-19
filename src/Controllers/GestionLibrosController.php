<?php
namespace App\Controllers;
use App\Session;
use App\Request;
use App\Controller;
  final class GestionLibrosController extends Controller{
    public function __contruct(Request $request,Session $session){
     parent::__construct($request,$session);
    }
    public function index(){
      $titol="daw";
      parent::inventory('catálogo');
      return view('gestioncatalogo',compact('dades'));
    }
    public function error(){
      echo "error";
    }
    public function añadir(){
       return view('gestioncatalogo',compact('dades')); 
    }
    public function delete(){
      parent::remove('catálogo','ISBN');
      $this->redirect('/gestionLibros');
    }
  
  }