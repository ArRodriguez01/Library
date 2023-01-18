<?php
    include 'templates/header.view.php';
    include 'templates/nav.view.php';
    ?>
  <body>
    <main>
      <div class="cajalog">
      <form class="formlogin" action='/alquiler/reserve' method='POST'>
        <h1 class="Tregister">Pon el isbn de tu libro</h1>
        <label class="lform">ISBN</label>
        <input type='number' name='ISBN' id='ISBN' placeholder='ISBN' ><br>
        <button>Reserva</button>
    </form>
        </div>
</main>
    </body>