<nav>
 <?php if(array_key_exists("user",$_SESSION)):?>
    <a class="itemnav" href="/dashboard">Inicio</a>
    <a class="itemnav" href="/login/logout">Logout</a>
    <?php endif;?>
<?php if($_SESSION["user"]->rol_id==1):?>
   <a class="itemnav" href="/gestionLibros">Gestion Catálogo</a>
  <a class="itemnav" href="/gestionAlquiler">Gestion Alquiler</a>
  <a class="itemnav" href="/gestionUsers">Gestion Users</a>
  <?php else:?>
    <a class="itemnav" href="/catalogo">Catalogo</a>
  <a class="itemnav" href="/userAlquiler">Mis Alquileres</a>
  <?php endif;?>
</nav>