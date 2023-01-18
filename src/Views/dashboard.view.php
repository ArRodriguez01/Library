<?php
    include 'templates/header.view.php';
    include 'templates/nav.view.php';
    ?>
<h1 class="titgest">Hola  <?php print $_SESSION["user"]->nombre ?></h1>
<!DOCTYPE html>
<html>
<head>

  <!--Meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>3D Carsoual</title>
 
  <!--Css files--> 
<link href="style.css" rel="stylesheet" type="text/css">

 
  
</head>
<body>

   <section class="slideshow">
       <div class="content">
           <div class="carasoul">
               <figure class="slide"><img src="src/public/img/lib1.jpg"></figure>
               <figure class="slide"><img src="src/public/img/lib2.jpg"></figure>
               <figure class="slide"><img src="src/public/img/lib3.jpg"></figure>
               <figure class="slide"><img src="src/public/img/lib4.jpg"></figure>
               <figure class="slide"><img src="src/public/img/lib5.jpg"></figure>
               <figure class="slide"><img src="src/public/img/lib6.jpg"></figure>
             <figure class="slide"><img src="src/public/img/lib7.jpg"></figure>
             <figure class="slide"><img src="src/public/img/lib8.jpg"></figure>
             <figure class="slide"><img src="src/public/img/lib9.jpg"></figure>
           </div>
       </div>
   </section>


</body>
</html>

