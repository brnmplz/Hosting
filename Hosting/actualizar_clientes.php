<?php
include ("cn.php");
$ID_CLI = $_GET["ID_CLI"];
$Cliente = "SELECT * FROM `CLIENTE` WHERE ID_CLIENTE = '$ID_CLI';";
?>


<!DOCTYPE html>
<html lang="en ">
<head>
    <meta charset="UTF-8">
    <title>Pagina principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>


<form class="container-table container-table--edit" action="procesa_actualiza_clientes.php" method = "post"> 
    <div class="table__title">Panel de Edición </div> 
    <div class="table__header">Nombre</div>
    <div class="table__header">Apellidos</div>
    <div class="table__header">Direccion</div>
    <div class="table__header">Telefono</div>
    <div class="table__header">Email</div>
    <div class="table__header">CP</div>
    <div class="table__header">Estado</div>
    <div class="table__header">RFC</div>
    <div class="table__header">Razón Social</div>
    <div class="table__header">Fecha Alta</div>
    <div class="table__header">Status</div>
    <div class="table__header">Ok</div>

    <?php $resultado = mysqli_query($conexion, $Cliente); 
    while( $row=mysqli_fetch_assoc($resultado)){
    ?>
    <input type="hidden" class="table__item" value="<?php echo $row["ID_CLIENTE"];?>" name = "ID_CLIENTE">
    <input type="text" class="table__input" value="<?php echo $row["CLI_NOMBRE"];?>" name = "CLI_NOMBRE">
    <input type="text" class="table__input" value="<?php echo $row["CLI_APELLIDO"];?>" name = "CLI_APELLIDO">
    <input type="text" class="table__input" value="<?php echo $row["CLI_DIRECCION"];?>" name = "CLI_DIRECCION">
    <input type="text" class="table__input" value="<?php echo $row["CLI_TELEFONO"];?>" name = "CLI_TELEFONO">
    <input type="text" class="table__input" value="<?php echo $row["CLI_EMAIL"];?>" name = "CLI_EMAIL">
    <input type="text" class="table__input" value="<?php echo $row["CLI_CP"];?>" name = "CLI_CP">
    <input type="text" class="table__input" value="<?php echo $row["CLI_ESTADO"];?>" name = "CLI_ESTADO">
    <input type="text" class="table__input" value="<?php echo $row["CLI_RFC"];?>" name = "CLI_RFC">
    <input type="text" class="table__input" value="<?php echo $row["CLI_RAZON_SOCIAL"];?>" name = "CLI_RAZON_SOCIAL">
    <div class="table__item"><?php echo $row["CLI_ALTA"];?></div>
    <input type="text" class="table__input" value="<?php echo $row["CLI_STATUS"];?>" name = "CLI_STATUS">
    <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">
    <?php } mysqli_free_result($resultado); ?>
    </form>
    </body> 
</html>