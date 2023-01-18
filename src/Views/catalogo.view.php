<?php
    include 'templates/header.view.php';
    include 'templates/nav.view.php';
    $catalogo= $_SESSION["catálogo"];
 ?>
<body>
  <h1 class="titgest"> Pagina Catalogo</h1><br>
  <div class="libros" >
    <?php
      for($i=0;$i<count($catalogo);$i++){
        echo "<div class=libro>
                <p><img src=".$catalogo[$i]["url"]."></p>".
                "<p><b>ISBN: "."</b>".$catalogo[$i]["ISBN"]."</p>".
                "<p>"."<b>"."Título: "."</b>".$catalogo[$i]["título"]."</p>".
                "<p>"."<b>"."Editorial: "."</b>".$catalogo[$i]["editorial"]."</p>".
                "<p>"."<b>"."Edición: "."</b>".$catalogo[$i]["edición"]."</p>".
                "<p>"."<b>"."Autor: "."</b>".$catalogo[$i]["autor"]."</p>".
          "<a class=textb href=/catalogo/reserve/".$catalogo[$i]["ISBN"]."><button class=dell>RESERVAR</button></a></div><br>";
      }
    ?>
  </div>
  <div class="bAdd" > 
  </div>
</body>
    