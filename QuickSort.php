<?php

// Se define una matriz que contiene información de varios vehículos, incluyendo su marca y año de fabricación.
$vehiculos = array(
    array("marca" => "Toyota", "anio" => 2010),
    array("marca" => "Honda", "anio" => 2008),
    array("marca" => "Ford", "anio" => 2015),
    array("marca" => "Chevrolet", "anio" => 2012),
    array("marca" => "Nissan", "anio" => 2019)
);

// Se define una función de ordenamiento rápido (quicksort) que ordena los vehículos en base al año de fabricación.
function quicksort($arr) {
    // Se obtiene la cantidad de elementos en el arreglo.
    $p = count($arr);
    // Si solo hay un elemento o ninguno, no es necesario ordenar.
    if ($p <= 1) {
        return $arr;
    }
    // Se establece el pivote como el primer vehículo en la matriz.
    $pivot = $arr[0]['anio'];
    $left = array(); // Se crea un arreglo para almacenar los elementos menores que el pivote.
    $right = array(); // Se crea un arreglo para almacenar los elementos mayores que el pivote.
    // Se itera a través de cada elemento del arreglo, excluyendo el pivote.
    for ($i = 1; $i < $p; $i++) {
        // Si el año de fabricación del vehículo actual es menor que el pivote, se agrega al arreglo de la izquierda.
        if ($arr[$i]['anio'] < $pivot) {
            $left[] = $arr[$i];
        } else { // De lo contrario, se agrega al arreglo de la derecha.
            $right[] = $arr[$i];
        }
    }
    // Se realiza la recursión del arreglo izquierdo y derecho, y se une con el pivote en el medio.
    return array_merge(quicksort($left), array(array('marca' => $arr[0]['marca'], 'anio' => $pivot)), quicksort($right));
}

// Se llama a la función de ordenamiento rápido, pasando la matriz de vehículos como argumento.
$vehiculos_ordenados = quicksort($vehiculos);

// Se imprime la matriz ordenada.
print_r($vehiculos_ordenados);

?>
