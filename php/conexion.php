<?php
   $conexion = new mysqli("localhost", "root", "admin1", "almacen");
   
   if($conexion->connect_errno){
    echo "Conexión Fallida: (".$conexion->connect_error.")".$conexion->connect_error;

   }
    
    // $conexion = mysqli_connect("localhost", "root", "admin1", "almacen");

    // // if($conexion){
    // //     echo 'Conectado exitosamente a la base de datos';
    // // }else{
    // //     echo 'No se ha podido conectar a la base de datos';
    // // }
?>