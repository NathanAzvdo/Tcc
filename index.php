<?php
session_start();
include_once('config.php');
if((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location:telaPrinc.php');

}
else{
  header('Location:paginas/telaInicial.php');
}
?>