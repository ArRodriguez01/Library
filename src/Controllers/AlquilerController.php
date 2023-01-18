<?php  
namespace App\Controllers;
use App\Session;
use App\Request;
use App\Controller;
  final class AlquilerController extends Controller{
    public function __contruct(Request $request,Session $session){
     parent::__construct($request,$session);
    }
    public function index(){
      $titol="daw";
      return view('alquiler',compact('dades'));
    }
    public function error(){
      echo "error";
    }
    public function reserve(){
      $libro=intval($this->request->post("ISBN"));
      $query=$this->qb->select(['*'])->table('catálogo')
        ->where(['ISBN'=>$libro])->execute()->fetch()[0];
      $isbn=intval($query->ISBN);
      if($query!=null){
        $userid=Session::get("user")->idUser;
        $today=getdate();
        $fecha=$today["year"]."-".$today["mon"]."-".$today["mday"];
        $data=["ISBN"=>$isbn,"userId"=>$userid,"fechaAlquiler"=>$fecha];
        $result=$this->qb->insert("alquiler",$data);
        $this->redirect('/catalogo');
      }else{
        die("noesta");
      }
      
      
      
    }
    
  }