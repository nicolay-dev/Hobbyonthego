<?php

  session_start();

  require_once('App/Auth/Auth.php');

  Auth::logout();

  //redirect user
  header('Location: index.php');  

 ?>
