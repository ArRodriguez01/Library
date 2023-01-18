<?php
    include 'templates/header.view.php';
    include 'templates/nav.view.php';
    $alquiler= $_SESSION["alquiler"];
 ?>
<body>
  <h1 class="titgest"> Gestión Alquiler</h1><br>
  <div class="libros" > 
    <?php
      for($i=0;$i<count($alquiler);$i++){
        echo "<div class=libro>
                <p><b>ISBN: "."</b>".$alquiler[$i]["ISBN"]."</p>".
                "<p>"."<b>"."User: "."</b>".$alquiler[$i]["userId"]."</p>".
                "<p>"."<b>"."Fecha: "."</b>".$alquiler[$i]["fechaAlquiler"]."</p>".
                "<p>"."<a class=textb href=/gestionAlquiler/delete/".$alquiler[$i]["idAlquiler"]."><button class=dell >BORRAR</button></a>"."</p></div><br>";
      }
    ?>
  </div>
  <div class="bAdd" >  
  </div>

 
</body>