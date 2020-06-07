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
$color= "verde ";
echo $color;

//en PHP el ambito global  NO se puede usar en todas partes

 function scopeProbe(){
    global $color;
     echo $color;
 }
 
 scopeProbe();

 // o establecer la propia variable en otro contexto

  function scopeProbe2(){
    $color = "rosa ";
    echo $color;
  }

  scopeProbe2();
// Constantes : Se pueden declarar con const o con define
// NO inician con signo de dolar con letra
// Se escriben en puras mayusculas
//Inician con letra o guion bajo

//
//Constantes con const
const PATH1=" cursoPHP/index.php"; //ni variables ni funciones
echo PATH1;

//Constantes con define
define("PATH2", " cursoPHP/index222.php");
echo PATH2;




?>