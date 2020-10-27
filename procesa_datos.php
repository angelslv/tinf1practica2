<?php
//Archivo que permite procesar los datos para almacenar en la base de datos
include("conexion.php");

if(isset($_POST['v_enviar'])){
    $nombre=$_POST['v_nom'];
    $apellidoPaterno=$_POST['v_apell_pat'];
    $apellidoMaterno=$_POST['v_apell_mat'];
    $edad=$_POST['v_edad'];
    $curp=$_POST['v_curp'];
    $genero=$_POST['v_genero'];

    echo "**************************";
    echo "Tus datos fueron procesados: ";
    echo $nombre." ". $apellidoPaterno." ".$apellidoMaterno." "."Con la edad de: ".$edad." y su CURP: ".$curp." con el registro de género: ".$genero.". Gracias por el envío de sus datos, los cuales serán procesados de manera segura...";   
    echo "**************************";

    $query_sql="insert into tbl_datos_personales (c_nombre, c_app_pat, c_app_mat, c_edad, c_curp, c_genero) values ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$edad', '$edad', '$curp', '$genero')";
    $resultado = mysqli_query($query_sql);
    echo "<br> La información también fue almacenada en la base de datos...";

}
else
exit();
?>