<?php 
 $title = 'Register';
 $content = '<form action="register" method="post" class="registerform">
 <div class=whitetop>
    <h3> Register information</h3>
 </div>
 <div class="login">Login</div>
 <div class="register">Register</div>
 <input class="mail" type="email" name="email" placeholder="e-mail adress" required >
    <br>
 <input class="pass" type="password" name="password" placeholder="password" required>
 <input class="pass" type="password" name="password" placeholder="repeat password" required>
   <br>
<input class="submit" type="submit" value="Register">
</form>';
require_once APP_ROOT . '/app/views/structure/skeleton.php';

?>