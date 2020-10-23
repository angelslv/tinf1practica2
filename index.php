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
        <input type="text" name="v_apellidos" maxlength="50" placeholder="Apellidos">
        <input type="number" name="v_edad" min="18" max="25" placeholder="Edad">
        <input type="submit" name="v_enviar" value="Enviar Información">
    </form>
<footer>
    <?php 
        echo "Derechos Reservados Dr. Ángel Vásquez 2013 -".date("Y");
    ?>
</footer>
</body>
</html>