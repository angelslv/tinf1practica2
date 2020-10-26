<!DOCTYPE html>
<html lang="es">
<head>
<title>Práctica Utilizando GIT</title>
<meta charset="UTF-8">
<meta name="description" content="GIT, PHP, HTML5">
<meta name="keywords" content="GIT, PHP, HTML5">
<meta name="author" content="Dr. Angel Vasquez">
<link rel="stylesheet" href="css/estilo.css" type="text/css">

</head>
<body>
    <header>
        <nav>PRÁCTICA UTILIZANDO GIT</nav>
    </header>
    <form action="" name="v_f" id="fid" method="POST">
        <input type="text" name="v_nom" maxlength="30" placeholder="Nombre(s)">
        <input type="text" name="v_apell_pat" maxlength="50" placeholder="Apellido Paterno">
        <input type="text" name="v_apell_mat" maxlength="50" placeholder="Apellido Materno">
        <input type="number" name="v_edad" min="18" max="25" placeholder="Edad">
        <input type="text" name="v_curp" maxlength="30" placeholder="Curp">
        <div class="seleccioname">
        <select class="selecciona" name="v_genero">
            <option value="_">Selecciona tu género</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>
        </div>
        <input type="submit" name="v_enviar" value="Enviar Información">
    </form>
    <div class="recepcion_datos">
        <?php 
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

        ?>
    </div>
<footer>
    <?php 
        echo "Derechos Reservados Dr. Ángel Vásquez 2013 -".date("Y");
    ?>
</footer>
</body>
</html>