<?php
// Definir la matriz de libros
$libros = array(
    array(
        "titulo" => "El Gran Gatsby",
        "autor" => "F. Scott Fitzgerald",
        "anio" => 1925
    ),
    array(
        "titulo" => "1984",
        "autor" => "George Orwell",
        "anio" => 1949
    ),
    array(
        "titulo" => "Cien años de soledad",
        "autor" => "Gabriel García Márquez",
        "anio" => 1967
    )
);

// Verificar si se envió un formulario de búsqueda
if (isset($_POST['buscar'])) {
    $autorBuscado = $_POST['autor'];

    // Buscar libros por autor
    $librosEncontrados = array();
    foreach ($libros as $libro) {
        if ($libro['autor'] == $autorBuscado) {
            $librosEncontrados[] = $libro;
        }
    }

    // Mostrar los libros encontrados
    if (!empty($librosEncontrados)) {
        echo "Libros encontrados para el autor $autorBuscado:<br><br>";
        foreach ($librosEncontrados as $libro) {
            echo "Título: " . $libro['titulo'] . "<br>";
            echo "Autor: " . $libro['autor'] . "<br>";
            echo "Año: " . $libro['anio'] . "<br>";
            echo "<br>";
        }
    } else {
        echo "No se encontraron libros para el autor $autorBuscado.";
    }
}

// Verificar si se envió un formulario de agregar libro
if (isset($_POST['agregar'])) {
    $nuevoLibro = array(
        "titulo" => $_POST['titulo'],
        "autor" => $_POST['autor'],
        "anio" => $_POST['anio']
    );

    // Agregar el nuevo libro a la matriz
    $libros[] = $nuevoLibro;

    echo "El libro ha sido agregado exitosamente.";
}
?>

<!-- Formulario de búsqueda -->
<h2>Búsqueda de libros por autor</h2>
<form method="POST" action="">
    <label>Autor:</label>
    <input type="text" name="autor">
    <input type="submit" name="buscar" value="Buscar">
</form>

<!-- Formulario de agregar libro -->
<h2>Agregar nuevo libro</h2>
<form method="POST" action="">
    <label>Título:</label>
    <input type="text" name="titulo"><br>
    <label>Autor:</label>
    <input type="text" name="autor"><br>
    <label>Año:</label>
    <input type="text" name="anio"><br>
    <input type="submit" name="agregar" value="Agregar">
</form>
