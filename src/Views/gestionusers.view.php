<?php
    include 'templates/header.view.php';
    include 'templates/nav.view.php';
    $users= $_SESSION["users"];
 ?>
<body>
  <h1 class="titgest"> Pagina Usuarios</h1><br>
  <div class="libros" >
    <?php
      for($i=0;$i<count($users);$i++){
        echo "<div class=libro>
                <p><b>Id: "."</b>".$users[$i]["idUser"]."</p>".
                "<p>"."<b>"."Nombre: "."</b>".$users[$i]["nombre"]."</p>".
                "<p>"."<b>"."Email: "."</b>".$users[$i]["email"]."</p>".       
        "<p>"."<a class=textb href=/gestionUsers/delete/".$users[$i]["idUser"]."><button class=dell >BORRAR</button></a>"."</p></div><br>";
      }
    ?>
  </div>
  <div class="bAdd" > 
  </div>
</body>