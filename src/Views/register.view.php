<?php
    include 'templates/header.view.php';
    ?>
    <body>
      <form action='/register/register' method='POST'>
      <div class="form">
        <div class="formulario">     
          <h1 class="Tregister">Register</h1>
              <p>
                <label for="mail" class="email">Email*</label>
                <input type="email" name ="mail" placeholder="Escribe tu Email">
              </p>
              <p>
                <label for="username" class="username">Username*</label>
                <input type="text" name ="username" placeholder="Escribe tu Nombre">
              </p>
              <p>
                <label>Contraseña*</label>
                <input type="password" name ="password" placeholder="Escribe tu contraseña">
              </p>
            <button>Register</button><br>
        </div>
      </div>
    </form>
</body>