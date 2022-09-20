<?php

session_start();

$codigo = $_POST['codigoStudent'];
$password = $_POST['passwordStudent'];


class Student{
    var $nombreStudent;
    var $codigoStudent;
    var $password;
    var $correoStudent;
}

$consulta = "SELECT*FROM students WHERE codigoStudent='$codigo' AND passwordStudent='$password'";
$res = $conexion->query($consulta);

$row = $res->fetch_assoc();

if($row['codigoStudent'] == $codigo && $row['passwordStudent'] == $password){
    $nombre=$row['nombreStudent'];
    $correo=$row['correoStudent'];
    $_SESSION['nombreStudent'] = $nombre;
    $_SESSION['codigoStudent'] = $codigo;
    $_SESSION['correoStudent'] = $correo;

    header("location: ../indexStudent.php"); 
} else{
    header("location: ../iniciar.php");
      
}


?>