<?php
//Arrays
//Crear variable de nombre arrayVacio cuyo valor sea un array vacío.
//Crear variable de nombre arrayNumeros declarada con un array de números del 0 al 9 (0, 1, 2...).
//Crear variable de nombre arrayNumerosPares declarada con un array con los números pares del 0 al 9 (considerando al 0 par).
//Crear variable de nombre arrayBidimensional declarada con valor array [[0, 1, 2], ['a', 'b', 'c']].
//Crear variable de nombre arrayNumerosNeg declarada con un array de números del 0 al -9 (0, -1, -2...).
//Crear variable cuyo valor sea un array asociativo con las clases-valores: nombre-tu nombre, apellido- tu apellido y edad- tu edad.
//Crear variable de nombre loGuardoTodo declarada con valor array con valores 'hola', 'que', 23, 42.33 y 'tal'.
//Crear variable de nombre arrayDeArrays declarada con valor array: [[756, 'nombre'], [225, 'apellido'], [298, 'direccion']].
$arrayvacia = [""];
$arrayNumeros = [0,1,2,3,4,5,6,7,8,9];
$arrayNumerosPares = [0,2,4,6,8];
$arrayBidimensional = [[0,1,2,] ["a","b","c"]];
$arrayNumerosNeg = [-1,-2,-3,-4,-5,-6,-7,-8,-9];
$arrayasociativo = [
    "nombre" => "Michael",
    "apellido" => "Ferreduela",
    "edad" => 19,
]; 
$loGuardoTodo = ['hola', 'que', 23, 42.33 y 'tal'];
$arrayDeArrays = [[756, 'nombre'], [225, 'apellido'], [298, 'direccion']];

//Funciones
//Crea la función suma que acepte como argumento dos números y devuelva el resultado de su suma.
//Crea la función potenciacion que acepte como argumento dos números y devuelva el resultado de elevar el primero(a) al segundo(b) (a^b).
//Crea la función separarPalabras que acepte como argumento un string y devuelva un array de palabras 'hola mundo' => [hola, mundo].
//Crea la función repetirString que acepte como argumento un string y un número y devuelva un string que sea el resultado de concatenar el primer string el número dado de veces.
//Crea la función esPrimo que acepte como argumento un número y devuelva true si es primo y false si no lo es.
//Crea la función multiplicacion que acepte como argumento dos números y devuelva el resultado de su multiplicación.
//Crea la función división que acepte como argumento dos números y devuelva el resultado de su división.
//Crea la función esPar que acepte como argumento un número y devuelva true si es par y false si es impar.
//Crea el array arrayFunciones que tenga como valor las funciones: suma, resta y multiplicación 
//(todas aceptan 2 números como argumento y devuelve el resultado de su operación).

function suma($num1 + $num2);
$num1 = 1;
$num2 = 2;

function potencia($numnum1^$numnum2);
$numnum1 = 2;
$numnum2 = 2;


SPLIT(hola mundo, / , );


$cad = "de locos"; 

$n = strlen($cad);

echo "La longitud de la cadena es: $n";



$numero = 13;

if(esPrimo($numero)){
    echo 'Es primo';
}else{
    echo 'No es primo';
}

function esPrimo($numero)
{
    if(!is_numeric($numero)) 
        return false;
    
    for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            return false;

        }

    }
    return true;
}


function multi($resultado){
    $numero1 = 2;
    $numero2 = 2;
    $resultado = $numero1 * $numero2;
}


function divi($resultadoDeDivision){
    $resultadodivisoion = $numero1/$numero2;
}


$num = 22;
if (($num % 2) == 0) {
    echo 'Es un número par';
} else {
    echo 'Es un número impar';
}

function resta($resultadoresta){
    $resultadoresta = $numero1-$numero2 
}

$arrayConFunciones = ["suma","resta","multi"]


//Mezclando arrays y funciones
//Crear la función ordenarArray que acepta como argumento un array de números y devuelva un array ordenado de menor a mayor.
//Crear la función obtenerPares que acepta como argumento un array de números y devuelva un array con los elementos pares.
//Crear la función pintarArray que acepte como argumento un array y devuelva una cadena de texto Array entrada: [0, 1, 2] String salida: '[0, 1, 2]'.
//Crear la función arrayMapi que acepte como argumento un Array y una función y devuelva un array en el que se haya aplicado la función a cada elemento del array.
//Crear la función eliminarDuplicados que acepte como argumento un array y devuelva un array en el que se hayan eliminado los duplicados.
//Crear la función ordenarArray2 que acepta como argumento un array de números y devuelva un array ordenado de mayor a menor.
//Crear la función obtenerImpares que acepta como argumento un array de números y devuelva un array con los elementos impares.
//Crear la función sumarArray que acepte como argumento un array numérico y devuelva la suma de los números en el array Array: [1, 2, 3] resultado: 6.
//Crear la función multiplicarArray que acepte como argumento un array numérico y devuelva la multiplicación de los números en el array Array: [2, 3, 4] resultado: 24.