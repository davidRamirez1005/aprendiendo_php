<?php
// Matriz de libros
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

// Función para buscar libros por autor
function buscarPorAutor($libros, $autor) {
    $librosEncontrados = array_filter($libros, function ($libro) use ($autor) {
        return $libro['autor'] == $autor;
    });

    return $librosEncontrados;
}

// Función para buscar libros por título
function buscarPorTitulo($libros, $titulo) {
    $librosEncontrados = array_filter($libros, function ($libro) use ($titulo) {
        return stripos($libro['titulo'], $titulo) !== false;
    });

    return $librosEncontrados;
}

// Función para buscar libros por año
function buscarPorAnio($libros, $anio) {
    $librosEncontrados = array_filter($libros, function ($libro) use ($anio) {
        return $libro['anio'] == $anio;
    });

    return $librosEncontrados;
}

// Verificar si se envió un formulario de búsqueda
if (isset($_POST['buscar'])) {
    $tipoBusqueda = $_POST['tipo_busqueda'];
    $valorBusqueda = $_POST['valor_busqueda'];

    $librosEncontrados = array();
    switch ($tipoBusqueda) {
        case 'autor':
            $librosEncontrados = buscarPorAutor($libros, $valorBusqueda);
            break;
        case 'titulo':
            $librosEncontrados = buscarPorTitulo($libros, $valorBusqueda);
            break;
        case 'anio':
            $librosEncontrados = buscarPorAnio($libros, $valorBusqueda);
            break;
    }

    // Mostrar los libros encontrados
    if (!empty($librosEncontrados)) {
        echo "Libros encontrados para la búsqueda \"$valorBusqueda\":<br><br>";
        foreach ($librosEncontrados as $libro) {
            echo "Título: " . $libro['titulo'] . "<br>";
            echo "Autor: " . $libro['autor'] . "<br>";
            echo "Año: " . $libro['anio'] . "<br>";
            echo "<br>";
        }
    } else {
        echo "No se encontraron libros para la búsqueda \"$valorBusqueda\".";
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

    echo "El libro se ha agregado exitosamente.";
}

// Mostrar todos los libros disponibles
echo "<h2>Libros disponibles:</h2>";
if (!empty($libros)) {
    foreach ($libros as $libro) {
        echo "Título: " . $libro['titulo'] . "<br>";
        echo "Autor: " . $libro['autor'] . "<br>";
        echo "Año: " . $libro['anio'] . "<br>";
        echo "<br>";
    }
} else {
    echo "No hay libros disponibles.";
}
?>

<!-- Formulario de búsqueda -->
<h2>Buscar libros:</h2>
<form method="post">
    <select name="tipo_busqueda">
        <option value="autor">Por Autor</option>
        <option value="titulo">Por Título</option>
        <option value="anio">Por Año</option>
    </select>
    <input type="text" name="valor_busqueda">
    <input type="submit" name="buscar" value="Buscar">
</form>

<!-- Formulario de agregar libro -->
<h2>Agregar libro:</h2>
<form method="post">
    <input type="text" name="titulo" placeholder="Título">
    <input type="text" name="autor" placeholder="Autor">
    <input type="text" name="anio" placeholder="Año">
    <input type="submit" name="agregar" value="Agregar">
</form>
