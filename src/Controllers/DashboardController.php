<?php
namespace App\Controllers;
use App\Session;
use App\Request;
use App\Controller;
  final class DashboardController extends Controller{
    public function __contruct(Request $request,Session $session){
     parent::__construct($request,$session);
    }
    public function index(){
      $titol="daw";
      return view('dashboard',compact('dades'));
    }
    public function error(){
      echo "error";
    }
  }