<?php

$productos = [];

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

$productos = agregarProducto($productos, "Lavarropas", 66, 14500, "James");
print_r($productos);
echo "<br>";
$productos = agregarProducto($productos, "TV", 3, 12500, "LG");
print_r($productos);

$resultado = buscarPorModelo($productos, "James");
echo $resultado;

$resultado = buscarPorModelo($productos, "Logitech");
echo $resultado;
echo "<br>";

$resultado = mostrarProductos($productos);
echo $resultado;

$productos = actualizarProducto($productos, "Lavarropa", 43, 16500, 'James');
$resultado = buscarPorModelo($productos, "James");
echo "Actualizado: ".$resultado;

$resultado = calcularValorTotal($productos);
echo $resultado;
echo "<br>";

$resultado = filtrarPorValor($productos, 14000);
echo $resultado;

$resultado = filtrarPorValor($productos, 12000);
echo $resultado;

$resultado = listarModelos($productos);
echo $resultado;

?>