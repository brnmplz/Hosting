<?php
include ("cn.php");
$Cliente = "SELECT * FROM `CLIENTE`;";
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

<div class="container-add">
    <h2 class="container__title">Registrar Usuario</h2>
    <form action="insertar_clientes.php" method="post" class="container__form">
        <label for="" class="container__label">Nombre</label>
        <input name="CLIENTE_NOMBRE" type="text" class="container__input">
        <label for="" class="container__label">Apellido</label>
        <input name="CLIENTE_APELLIDO" type="text" class="container__input">
        <label for="" class="container__label">Direccion</label>
        <input name="CLIENTE_DIRECCION" type="text" class="container__input">
        <label for="" class="container__label">Telefono</label>
        <input name="CLIENTE_TELEFONO" type="text" class="container__input">
        <label for="" class="container__label">Email</label>
        <input name="CLIENTE_EMAIL" type="text" class="container__input">
        <label for="" class="container__label">Código Postal</label>
        <input name="CLIENTE_CP" type="text" class="container__input">
        <label for="" class="container__label">Estado</label>
        <input name="CLIENTE_EDO" type="text" class="container__input">
        <label for="" class="container__label">RFC</label>
        <input name="CLIENTE_RFC" type="text" class="container__input">
        <label for="" class="container__label">Razón Social</label>
        <input name="CLIENTE_RASO" type="text" class="container__input">
        <input class="container__submit" type= "submit" value="Registrar">
</form>
</div>


<div class="container-table"> 
    <div class="table__title">Datos de cliente <a href="editar_clientes.php" class="title_edit">Edicion </a> </div> 
    <div class="table__header">ID</div>
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

    <?php $resultado = mysqli_query($conexion, $Cliente); 
    while( $row=mysqli_fetch_assoc($resultado)){
    ?>
    <div class="table__item"><?php echo $row["ID_CLIENTE"];?></div>
    <div class="table__item"><?php echo $row["CLI_NOMBRE"];?></div>
    <div class="table__item"><?php echo $row["CLI_APELLIDO"];?></div>
    <div class="table__item"><?php echo $row["CLI_DIRECCION"];?></div>
    <div class="table__item"><?php echo $row["CLI_TELEFONO"];?></div>
    <div class="table__item"><?php echo $row["CLI_EMAIL"];?></div>
    <div class="table__item"><?php echo $row["CLI_CP"];?></div>
    <div class="table__item"><?php echo $row["CLI_ESTADO"];?></div>
    <div class="table__item"><?php echo $row["CLI_RFC"];?></div>
    <div class="table__item"><?php echo $row["CLI_RAZON_SOCIAL"];?></div>
    <div class="table__item"><?php echo $row["CLI_ALTA"];?></div>
    <div class="table__item"><?php echo $row["CLI_STATUS"];?></div>
    <?php } mysqli_free_result($resultado); ?>
      </div>
    </body> 
</html>