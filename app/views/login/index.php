<?php 
 $title = 'Login';
 $content = '<form action="login" method="post" class="loginform">
 <div class=whitetop>
   <h3> Login information</h3>
 </div>
 <div class="login">Login</div>
 <div class="register">Register</div>
 <input class="mail" type="email" name="email" placeholder="e-mail adress" required >
    <br>
 <input class="pass" type="password" name="password" placeholder="password" required>
    <br>
 <input class="submit" type="submit" value="Login">
 
</form>';
require_once APP_ROOT . '/app/views/structure/skeleton.php';

?>