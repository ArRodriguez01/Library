<?php
namespace App\Controllers;
use App\Session;
use App\Request;
use App\Controller;

  final class GestionUsersController extends Controller{
    public function __contruct(Request $request,Session $session){
     parent::__construct($request,$session);
    }
    public function index(){
      $titol="daw";
      parent::inventory('users');
      return view('gestionusers',compact('dades'));
    }
    public function error(){
      echo "error";
    }
    public function delete(){
      parent::remove('users','idUser');
      $this->redirect('/gestionUsers');
    }
  }