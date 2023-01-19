<?php
namespace App\Controllers;
use App\Session;
use App\Request;
use App\Controller;

  final class UserAlquilerController extends Controller{
    public function __contruct(Request $request,Session $session){
     parent::__construct($request,$session);
    }
    public function index(){
      $titol="daw";
      $this->alquiler();
      return view('useralquiler',compact('dades'));
    }
    public function error(){
      echo "error";
    }
    public function alquiler() {
      $user=Session::get("user");
      $iduser=$user->idUser;
      $query=$this->qb->select(['*'])->table('alquiler')
        ->where(['userId'=>$iduser])->execute()->fetcharray();
      Session::set("useralquiler",$query);
    }
   
  }
    
  