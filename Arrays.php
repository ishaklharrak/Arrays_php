<?php

echo "<h2>Ejercicio 1</h2>";

$persona = [
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
];

foreach ($persona as $valor) {
    echo $valor . "<br>";
}



echo "<h2>Ejercicio 2</h2>";

// Foreach que recorre clave => valor
foreach ($persona as $clave => $valor) {
    echo "$clave : $valor<br>";
}


echo "<h2>Ejercicio 3</h2>";

// Modifico directamente el valor de la clave 'edad'
$persona["edad"] = 24;
         
foreach ($persona as $clave => $valor) {
    echo "$clave : $valor<br>";
}

echo "<h2>Ejercicio 4</h2>";

unset($persona["ciudad"]);

var_dump($persona);

echo "<h2>Ejercicio 5</h2>";

$leters = "a,b,c,d,e,f";
$arrayLeters = explode(",", $leters);
rsort($arrayLeters);
foreach ($arrayLeters as $leter) {
    echo $leter . "<br>";
}

echo "<h2>Ejercicio 6</h2>";
//array asociattivo
$notas = [
    "Miguel" => 5,
    "Luís" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
];

arsort($notas);
echo "Notas ordenadas de mayor a menor: ";
foreach ($notas as $nombre => $nota) {
    echo "$nombre : $nota , ";
}

echo "<h2>Ejercicio 7</h2>";
//media de las notas con soplo dos decimales, y lista de los alumnos quienes estan por encima de la media    
$sumaNotas = array_sum($notas);
$numeroAlumnos = count($notas); 
$mediaNotas = number_format($sumaNotas / $numeroAlumnos, 2);
echo "La media de las notas es: " . $mediaNotas . "<br>";
echo "Alumnos con notas por encima de la media: <br>";
foreach ($notas as $nombre => $nota) {
    if ($nota > $mediaNotas) {
        echo "$nombre<br>";
    }
}
echo "<h2>Ejercicio 8</h2>";
//busca la nota ams alta, y imprime el aluno con la nota
$notaMasAlta = max($notas);
echo "La nota mas alta es $notaMasAlta y el mejor alumno/a es ";
foreach ($notas as $nombre => $nota) {
    if ($nota === $notaMasAlta) {
        echo "$nombre<br>";
    }
}

