<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "users";

    $connect = mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);


    return $connect;
}
if(connection()){
    echo "Conexión exitosa";
}else{
    echo "Error al conectar a la base de datos";
}

?>

