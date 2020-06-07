<?php

print "muestra un solo string y regresa un valor entero "; 
echo 'muestra ','mutiple', 1; //echo es una construccion del lenguaje muestra una o más cadenas y no regresa nada
echo print "una sola cadena"; // print regresa un valor entero
// echo no regresa nada 



//Variables
// todas las variables en PHP comienzan con la pseudovariable $, 
// Debe comensar con una letra o guion bajo, 
// No puede comenzar con un número
//A-Z 0-9 y _, sin espacios, caseSensity

$numerito=13; //tipado dinamico
//10 tipos primitivos; 
//4 escalares: boolean, integer, float (antes existia double), string
// 4 compuestos: array, object, callable, iterable
// 2 especiales: resource y null

// Ambito de la variable
$color="rosa";
$color= "verde";
echo $color;

//en PHP el ambito global  NO se puede usar en todas partes

 function scopeProve(){
     echo $rosa;
 }

// constatnte inicia con letra

const PATH1=1; //ni variables ni funciones
//define (" ") // aqui si




?>