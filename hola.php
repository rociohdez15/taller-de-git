<?php
echo "Rocio Hernandez Silva\n";
// Autora: Rocio Hernandez Silva
// El nombre por defecto es Mundo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";
