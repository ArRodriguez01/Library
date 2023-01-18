
<?php
    include 'templates/header.view.php';
    ?>
  <body>
    <main>
      <div class="cajalog">
      <form class="formlogin" action='/login/login' method='POST'>
        <h1 class="Tregister">Login</h1>
        <label class="lform">Username</label>
        <input type='text' name='username' id='username' placeholder='username' ><br>
        <label class="lform">Password</label>
        <input type='password' name='password' id='password' placeholder='password'><br>
        <button>Log in</button>
    </form>
        </div>
</main>
    </body>
