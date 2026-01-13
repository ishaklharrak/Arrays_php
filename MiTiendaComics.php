<?php
// Definición del inventario de cómics
$inventario = [
    'suspense_terror' => [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
];

// MAIN
mostrarComicsEnTabla();
mostrarValorAlmacen();

aplicarDescuentoManga();

mostrarComicsEnTabla();
mostrarValorAlmacen();

function mostrarComicsEnTabla()
{
    global $inventario;

    echo '<br>';
    echo '<table border="1">';
    echo '<tr>
            <th>Categoría</th>
            <th>Título</th>
            <th>Editorial</th>
            <th>Autor</th>
            <th>Idioma</th>
            <th>Precio (€)</th>
            <th>Stock</th>
          </tr>';

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }

    echo '</table>';
}

/**
 * 1) Calcular valor total del almacén (precio × stock)
 */
function mostrarValorAlmacen()
{
    global $inventario;

    $totalAlmacen = 0;

    foreach ($inventario as $comics) {
        foreach ($comics as $comic) {
            $totalAlmacen += $comic['precio'] * $comic['stock'];
        }
    }

    // línea fuera de la tabla
    echo '<p><strong>Valor total del almacén: '
        . number_format($totalAlmacen, 2)
        . ' €</strong></p>';
}

/**
 * 2) Semana del manga: descuento del 30% a todos los productos en japonés
 */
function aplicarDescuentoManga()
{
    global $inventario;

    foreach ($inventario as &$categoria) {
        foreach ($categoria as &$comic) {
            if ($comic['idioma'] === 'Japonés') {
                $comic['precio'] *= 0.7; // rebaja del 30%
            }
        }
    }
}
?>
