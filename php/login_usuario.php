<?php
    include 'conexion.php';

    $correo = $_POST['correo'];
    $pass = $_POST['pass'];

    if(isset($_POST['btnlogin'])){
        $queryusuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE Correo = '$correo'");
        $nr = mysqli_num_rows($queryusuario);

        if($nr == 1) {
            $usuario = mysqli_fetch_array($queryusuario);
            
            // Utiliza el nombre correcto del campo de la contraseña en la base de datos
            if(password_verify($pass, $usuario['Contrasena'])){
                echo "
                    <script> 
                    alert('Bienvenido: $correo');
                    window.location='../almacenista/bienvenida.php'
                    </script>
                     ";
            } else {
                echo "
                    <script> 
                    alert('Usuario o contraseña incorrecto');
                    window.location='../index.php'
                    </script>
                    ";
            }
        } else {
                echo "
                    <script> 
                    alert('Usuario o contraseña incorrecto');
                    window.location='../index.php'
                    </script>
                ";
                }
            }
        ?>