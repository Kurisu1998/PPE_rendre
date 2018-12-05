<?php
session_start();

$login  = (isset($_POST["login"]))? $_POST["login"] : "";
$passwd = (isset($_POST["passwd"]))? $_POST["passwd"] : "";



if(($login == "util") && ($passwd == "pass")){
    $_SESSION["is_loged"] = "true";
    header("location: visiteur.php");
    exit;

}elseif (($login == "com")&&($passwd == "pass")) {
  $_SESSION["is_loged"] = "true";
  header("location: comptable.php");
  exit;
}
header("location: index.php");

 ?>
