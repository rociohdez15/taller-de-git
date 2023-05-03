<?php
echo "Rocio Hernandez Silva\n";
// Autora: Rocio Hernandez Silva
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
