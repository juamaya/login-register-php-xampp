<?php

session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
//Encriptar contrasena
$contrasena = hash('sha512', $contrasena);

/* 
//ver contrasena Encriptada
 echo $contrasena;
 die(); */

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE   correo = '$correo' and contrasena = '$contrasena'");


if (mysqli_num_rows($validar_login) > 0) {
  $_SESSION['usuario'] = $correo;

  header("location: ../bienvenido.php");
  //  header("location: https://juamaya.github.io/tareas");
  //   header("location: https://juamaya.github.io/mydoc");
  exit();
} else {
  echo '
    <script>
        alert("Usuario no existe, por favor verifique los datos introducidos.");
        window.location ="../index.php";
    </script>
   ';
  exit();
}







?>