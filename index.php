<?php

print "muestra un solo string y regresa un valor entero  \n"; // este salto de linea se ve en ver "codigo fuente "en Chrome:, view-source:http://127.0.0.1/cursoPHP/ o la extension JSON Formater support PHP 
echo 'muestra ','mutiple ', 1,  "\n"; //echo es una construccion del lenguaje muestra una o más cadenas y no regresa nada
echo print "una sola cadena "; // print regresa un valor entero

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
$color="amarillo";
$color= "verde ";
echo "\n";

echo  $color;

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
//Constantes con const (construccion del lenguaje) (tiempo de compilacion)
// Definido en ambito global y en clases

const PATH1=" cursoPHP/index.php"; //ni variables ni funciones
echo PATH1;

//Constantes con define (tiempo de ejecucion)
// Definido solo en ambito global
define("PATH2", " cursoPHP/index22.php");
echo PATH2;

define("NUMERORAND", mt_rand());
echo NUMERORAND;

$path=" cursoPHP/index333.php \n";
define('PATH3',$path);
echo PATH3;

//Ver lista de constantes con sus valores


//print_r(get_defined_constants(true));
//Ver constantes definidas por el usuario, se encuentran hasta el final


//Strings: 4 sintaxis, comillas simples, dobles, heredoc y nowdoc

//Comillas Dobles

echo "El numerito es $numerito \nenter"; //en la linea 17 está declarado $numerito
echo " \"numerito $numerito entre comillas\""; // para que salgan las comillas las tenemos que escapar con \

echo "\nUna carita \$_$"; //para poder hacer $ y no la reconozca como variable, la escapamos

echo "\n";


// Comillas Simples

echo "\n"; //Solo hace el salto
echo '\n'; // lo trata como texto
echo "\n"; //Salto de linea
echo 'Me trata como texto $numerito,';
echo ' Incluso se pueden utilizar "comillas dobles" 
';// aqui si reconoce el salto de linea

echo 'para utilizar \'comillas simples\' tengo que 
escaparlas'; // mira como hace el salto de linea

// heredoc

// Permite crear Strings con grandes cantidades de caracteres

//no puede haber nada en la misma linea del identificador, ni espacio, ni comentarios, ni iniciar el texto
echo <<<IDENTIFICADOR
\n"La fuerza está donde menos lo imaginas" // no se puede comentar
'Se pueden poner comillas simples \n
IDENTIFICADOR;

$animal="perro";

// Se puede tambien iniciar una variable o mostrar variables
$frase=<<<FRASE
No se trata de cambiar de dueño si no de dejar de ser $animal \n
FRASE;

echo $frase;

// nowdoc 
//Hace lo mismo que comillas simples, lo que ves es lo que obtienes WYSIWYG
// es igual pero el identificador se escribe entre comillas simples
// veamos las diferencias:

echo <<<'IDENTIFICADOR2'

                Deje este espacio y el salto 
\n"La fuerza está donde menos lo imaginas" // no se puede comentar
'Se pueden poner comillas simples \n
IDENTIFICADOR2;

$frase=<<<'FRASE'


No se trata de cambiar de dueño si no de dejar de ser $animal \n
FRASE;

echo $frase;
?>