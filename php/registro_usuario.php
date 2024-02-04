<?php
    include 'conexion.php';
    $nombre = $_POST['nombre'];
    $ape1 = $_POST['apellidop'];
    $ape2 = $_POST['apellidom'];
    $perfil = $_POST['perfil'];
    $correo = $_POST['correo1'];
    $pass = $_POST['pass'];

    if(isset($_POST['btnregistrar'])){

        $pass_fuerte = password_hash($pass, PASSWORD_DEFAULT);
        $queryregistrar = "INSERT INTO usuarios(NombreU, ApellidoP, ApellidoM, Perfil, Correo, Contrasena) VALUES ('$nombre','$ape1','$ape2','$perfil','$correo','$pass_fuerte')";
    if(mysqli_query($conexion, $queryregistrar)){
        echo "
            <script>
            alert('Usuario registrado: $nombre ');
            window.location = '../index.php'
            </script>
        ";
       
    }else{
        echo "
            Error: ".$queryregistrar."<br>".mysqli_error($conexion);
    }
    }
?>