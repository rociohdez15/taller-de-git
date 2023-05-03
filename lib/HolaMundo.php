<?php

class HolaMundo
{
   private $nombre;

   function __construct($nombre)
   {
      $this->nombre = $nombre;
   }

   function __toString()
   {	     sprintf("Rocio Hernandez Silva\n");
      return sprintf ("Hola, %s.\n", $this->nombre);
   }
}
