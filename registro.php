<?php
include_once('db.php');
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $contraseña=$_POST['contraseña'];


    echo "Los datos son los siguientes: <br>";
    echo "$nombre,$email,$contraseña";

    $conectar =conn();
    $sql="INSERT INTO suscriptores (nombre, email, contraseña)
    VALUES ('$nombre','$email','$contraseña')";
    $resul = mysqli_query($conectar , $sql)or trigger_error("Query failed! SQL- Error: ".mysql_error($conectar), E_USER_ERROR); 

    echo "$sql";
?>