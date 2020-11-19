<?php
session_start();
$users = 'admin';
 if($_POST['do_singup']){
 if($users == $_POST['login'])
{
 $_SESSION['admin'] = $users;
 header("Location: report.php");
 exit;
 }
else echo '<p>Логин или пароль неверны!</p>';
} 
?>  