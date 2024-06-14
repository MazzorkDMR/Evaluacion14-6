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

function buscarPorModelo($productos, $modelo){
    foreach($productos as $producto){
        if($producto['modelo'] == $modelo){
            return "Nombre: " . $producto['nombre'] . " Cantidad: " . $producto['cantidad'] . " Precio: " . $producto['precio'] . "<br>";
        }
    }
    return "Modelo no encontrado";
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


?>