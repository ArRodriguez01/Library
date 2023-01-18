<?php
namespace App\Controllers;
use App\Session;
use App\Request;
use App\Controller;

  final class AddLibroController extends Controller{
    public function __contruct(Request $request,Session $session){
     parent::__construct($request,$session);
    }
    public function index(){
      $titol="daw";
      return view('addlibro',compact('dades'));
    }
    public function error(){
      echo "error";
    }
    public function add(){
      $ISBN=$this->request->post('ISBN');

      $título=$this->request->post('titulo');
      $editorial=$this->request->post('editorial');
      $edición=$this->request->post('edicion');
      $autor=$this->request->post('autor');
      $img=$this->request->post('img');
      $data= ["ISBN"=>$ISBN,"título"=>$título,"editorial"=>$editorial,"edición"=>$edición,"autor"=>$autor,"url"=>$img];
      
      $result=$this->qb->insert("catálogo",$data);
      $this->redirect('/gestionLibros');
      
    }
  }