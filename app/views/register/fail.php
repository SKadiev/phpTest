<?php 
 session_start();
 $title = 'Register';
 $content = 'Error';
require_once APP_ROOT . '/app/views/structure/skeleton.php';

echo "<pre>";
print_r($_SESSION['error']);
echo "</pre>";
?>