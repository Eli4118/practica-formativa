<?php 
$user = $_POST['usuario']; 
$pass = $_POST['pass']; 
 
if (!empty($user) && !empty($pass)) { 
  echo "ok"; 
} else { 
  echo "error"; 
} 
?> 

