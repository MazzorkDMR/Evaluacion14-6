<?php
session_start();
$resultado = '';

if(isset($_SESSION['resultado'])) {
    $resultado = $_SESSION['resultado'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion</title>
</head>
<body>
    <form action="procesamiento.php" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="cantidad">Cantidad: </label>
        <input type="number" id="cantidad" name="cantidad"><br>

        <label for="precio">Precio: </label>
        <input type="number" id="precio" name="precio"><br>

        <label for="modelo">Modelo: </label>
        <input type="text" id="modelo" name="modelo"><br>
        
        <input type="radio" id="agregar" name="accion" value="agregar">
        <label for="agregar">Agregar</label>
        
        <input type="radio" id="buscar" name="accion" value="buscar">
        <label for="buscar">Buscar</label>

        <input type="radio" id="mostrar" name="accion" value="mostrar">
        <label for="mostrar">Mostrar</label>

        <input type="radio" id="actualizar" name="accion" value="actualizar">
        <label for="actualizar">Actualizar</label>

        <input type="radio" id="total" name="accion" value="total">
        <label for="total">Total</label>

        <input type="radio" id="filtrar" name="accion" value="filtrar">
        <label for="filtrar">Filtrar</label>

        <input type="radio" id="listar" name="accion" value="listar">
        <label for="listar">Listar</label>

        <input type="radio" id="promedio" name="accion" value="promedio">
        <label for="promedio">Promedio</label>

        <input type="submit" value="Enviar">
    </form>
    <form action="procesamiento.php" method="POST">
        <input type="hidden" name="accion" value="limpiar">
        <input type="submit" value="Limpiar Resultados">
    </form>

    <div id="resultados">
    <?php
        echo $resultado;
    ?>
    </div>
</body>
</html>