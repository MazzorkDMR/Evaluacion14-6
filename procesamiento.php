<?php

session_start();

function agregarProducto ($productos, $nombre, $cantidad, $precio, $modelo) {
    $productos[] = [
        'nombre' => $nombre, 
        'cantidad' => $cantidad,
        'precio' => $precio,
        'modelo' => $modelo
    ];

    return $productos;
}

function buscarPorModelo($productos, $modelo) {
    foreach($productos as $producto){
        if($producto['modelo'] == $modelo){
            return "Nombre: " . $producto['nombre'] . " Cantidad: " . $producto['cantidad'] . " Precio: " . $producto['precio'] . "<br>";
        }
    }
    return "Modelo no encontrado";
}

function mostrarProductos($productos) {
    $resultado = '';
    foreach($productos as $producto) {
        $resultado .= "Nombre: " . $producto['nombre'] . " Cantidad: " . $producto['cantidad'] . " Precio: " . $producto['precio'] . "<br>";
    }
    return $resultado;
}

function actualizarProducto($productos, $nombre, $cantidad, $precio, $modelo) {
    foreach($productos as &$producto){
        if($producto['modelo'] == $modelo){
            $producto['nombre'] = $nombre;
            $producto['cantidad'] = $cantidad;
            $producto['precio'] = $precio;
            break;
        }
    }
    return $productos;
}

function calcularValorTotal($productos) {
    $total = 0;
    foreach($productos as $producto){
        $total = $total + $producto['precio'];
    }
    return $total;
}

function filtrarPorValor($productos, $precio) {
    $resultado = '';
    foreach($productos as $producto) {
        if($producto['precio'] > $precio)
        $resultado .= "Nombre: " . $producto['nombre'] . " Cantidad: " . $producto['cantidad'] . " Precio: " . $producto['precio'] . "<br>";
    }
    return $resultado;
}

function listarModelos($productos){
    $resultado = '';
    foreach($productos as $producto){
        $resultado .= $producto['modelo'] . "<br>";
    }
    return $resultado;
}

function calcularPromedio($productos) {
    $total = 0;
    foreach($productos as $producto){
        $total = $total + $producto['precio'];
    }
    $promedio = (float)$total / count($productos);
    return $promedio;
}

if(!isset($_SESSION['productos'])){
    $_SESSION['productos'] = [];
}
$productos = $_SESSION['productos'];
$resultado = '';

?>