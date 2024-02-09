<?php
include_once('misclases.php');

# Arrays con valores y con claves numéricas
$numeros = array(1213, 1412, 1560, 7809, 5670);
$nombres = array('Pepe', 'Juan', 'María', 'Lola');

$primerNumero = $numeros[0];

# Array con claves
$menu = array(
    'Primer plato' => 'Sopa',
    'Segundo plato' => 'Filete con patatas',
    'Postre' => 'Helado de chocolate'
);

$primerPlato = $menu['Primer plato'];

# Imprimir los números uno detrás de otro
foreach($menu as $plato => $nombre){
    echo $plato . ' = ' . $nombre . '<br>';
}