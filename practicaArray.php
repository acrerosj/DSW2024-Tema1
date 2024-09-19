<?php
$fruits = ['manzana', 'plátano', 'kiwi'];
print_r($fruits);
echo "Número de elementos " .count($fruits);
$fruits[] = "naranja";
//array_push($fruits, "naranja", "uva");
print_r($fruits);
$fruitsCopy = $fruits;
array_unshift($fruitsCopy, "sandía");
print_r($fruitsCopy);
print_r($fruits);
// No se modifica porque es una copia.

echo in_array("papaya", $fruits) ? "Está la fruta" : "No está la fruta";

$fruits[] = "papaya";

echo in_array("papaya", $fruits) ? "Está la fruta" : "No está la fruta";

$pos = array_search("manzana", $fruits);

echo "La posición de la manzana es $pos";

//unset($fruits[$pos]);
//$fruits=array_values($fruits);

$apple = array_splice($fruits, $pos, 1)[0] ;
print_r($fruits);
echo $apple;

//12 .Inserta manzana en la posición 2.
array_splice($fruits, 1, 0, $apple);
print_r($fruits);

//13 . Ordena en orden alfabético frutas y muestra en pantalla.
sort($fruits);
print_r($fruits);

//14. Invierte el orden del array.
$fruits = array_reverse($fruits);
print_r($fruits);

// 15. Obtén una fruta de forma aleatoria.
//$randomId = rand(0, count($fruits)-1);
//echo $fruits[$randomId];

echo $fruits[array_rand($fruits)];

// 16. Ordena de forma aleatoria todas las frutas
shuffle($fruits);
print_r($fruits);

// 17. Crea un array de verduras
$vegetables = ["berenjena", "zanahoría", "tomate", "pimiento"];
print_r($vegetables);

// 18. Une el array de frutas y verduras en un único array llamado vegetales.
$total = array_merge($fruits, $vegetables);
sort($total);
print_r($total);