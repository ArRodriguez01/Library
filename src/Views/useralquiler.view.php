<?php
    include 'templates/header.view.php';
    include 'templates/nav.view.php';
    $useralquiler= $_SESSION["useralquiler"];

 ?>
<body>
  <h1 class="titgest"> Mis Alquileres</h1><br>
  <div class="libros" > 
    <?php
      for($i=0;$i<count($useralquiler);$i++){
        echo "<div class=libro>
                <p><b>ISBN: "."</b>".$useralquiler[$i]["ISBN"]."</p>".
                "<p>"."<b>"."Fecha: "."</b>".$useralquiler[$i]["fechaAlquiler"]."</p></div><br>";
      }
    ?>
  </div>
  <div class="bAdd" >  
  </div>

 
</body>