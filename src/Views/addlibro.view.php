<?php
    include 'templates/header.view.php';
    include 'templates/nav.view.php'
    ?>
  <body>
    <main>
      <div class="cajalog">
      <form class="formlogin" action='/addLibro/add' method='POST'>
        <h1 class="Tregister">Insertar libro</h1>
        <label class="lform">ISBN</label>
        <input type='text' name='ISBN' id='ISBN' placeholder='ISBN' >
        <label class="lform">Título</label>
        <input type='text' name='titulo' id='titulo' placeholder='Título'>
        <label class="lform">Editorial</label>
        <input type='text' name='editorial' id='editorial' placeholder='Editorial'>
        <label class="lform">Edición</label>
        <input type='number' name='edicion' id='edicion' placeholder='Edicion'>
        <label class="lform">Autor</label>
        <input type='text' name='autor' id='autor' placeholder='Titulo'><br>
        <label class="lform">Imagen</label>
        <input type='text' name='img' id='img' placeholder='Insertar Imagen URL'><br>
        <button>Insertar</button>
    </form>
        </div>
</main>
    </body>