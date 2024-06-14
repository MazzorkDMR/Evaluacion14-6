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

$productos = agregarProducto($productos, "Lavarropas", 66, 14500, "James");
print_r($productos);
echo "<br>";
$productos = agregarProducto($productos, "TV", 3, 12500, "LG");
print_r($productos);


?>