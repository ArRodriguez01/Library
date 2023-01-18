<?php
namespace App\Controllers;
use App\Session;
use App\Request;
use App\Controller;

  final class GestionAlquilerController extends Controller{
    public function __contruct(Request $request,Session $session){
     parent::__construct($request,$session);
    }
    public function index(){
      $titol="daw";
      parent::inventory('alquiler');
      return view('gestionalquiler',compact('dades'));
    }
    public function error(){
      echo "error";
    }
    public function delete(){
      parent::remove('alquiler','idAlquiler');
      $this->redirect('/gestionAlquiler');
    }
    
  }
    