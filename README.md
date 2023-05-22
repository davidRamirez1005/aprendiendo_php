# aprendiendo_php



**array_push():** Agrega uno o más elementos al final de un array.
**array_pop()**: Extrae y elimina el último elemento de un array.
**array_shift():** Extrae y elimina el primer elemento de un array.
**array_unshift():** Agrega uno o más elementos al inicio de un array.
**count():** Devuelve la cantidad de elementos de un array.
**array_merge():** Combina dos o más arrays en uno solo.
**array_slice():** Devuelve una parte de un array.
**array_splice():** Cambia el contenido de un array, eliminando, reemplazando o agregando elementos.
**array_search():** Busca un valor específico en un array y devuelve la clave correspondiente si se encuentra.
**array_key_exists()**: Comprueba si una clave existe en un array.
**array_keys():** Devuelve todas las claves de un array.
**array_values():** Devuelve todos los valores de un array.
**array_unique():** Elimina los valores duplicados de un array.
**sort():** Ordena un array en orden ascendente.
**rsort()**: Ordena un array en orden descendente.
**asort():** Ordena un array asociativo por valores en orden ascendente.
**ksort():** Ordena un array asociativo por claves en orden ascendente.
**array_reverse():** Revierte el orden de los elementos en un array.

1. `array_flip()`: Intercambia las claves con sus valores correspondientes en un array.
2. `array_fill()`: Rellena un array con un valor especificado.
3. `array_filter()`: Filtra los elementos de un array utilizando una función de devolución de llamada.
4. `array_map()`: Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
5. `array_reduce()`: Reduce un array a un solo valor aplicando una función de devolución de llamada.
6. `array_key_exists()`: Comprueba si una clave existe en un array.
7. `in_array()`: Comprueba si un valor existe en un array.
8. `array_rand()`: Devuelve una o varias claves aleatorias de un array.
9. `array_unique()`: Elimina los valores duplicados de un array.
10. `array_intersect()`: Devuelve un array con los valores comunes a todos los arrays dados.
11. `array_diff()`: Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
12. `array_push()`: Agrega uno o más elementos al final de un array.
13. `array_pop()`: Extrae y elimina el último elemento de un array.
14. `array_reverse()`: Revierte el orden de los elementos en un array.
15. `array_sum()`: Devuelve la suma de todos los valores de un array numérico.
16. `array_product()`: Devuelve el producto de todos los valores de un array numérico.
17. `array_chunk()`: Divide un array en fragmentos más pequeños.
18. `array_keys()`: Devuelve todas las claves de un array.
19. `array_values()`: Devuelve todos los valores de un array.
20. `array_walk()`: Aplica una función de devolución de llamada a cada elemento de un array.





*La función `isset()`* en PHP se utiliza para verificar si una variable está definida y tiene un valor diferente de `null`. Toma uno o varios argumentos y devuelve `true` si todos los argumentos están definidos y no son `null`, y devuelve `false` si al menos uno de los argumentos no está definido o es `null`.



*La función `!empty()`* en PHP se utiliza para verificar si una variable o una matriz no está vacía. Devuelve `true` si la variable o matriz tiene al menos un elemento y no es `null`, `false`, una cadena vacía o un arreglo vacío. En otras palabras, verifica si una variable o matriz tiene contenido.



*La función `stripos`* en PHP se utiliza para buscar la primera aparición de una subcadena dentro de otra cadena, sin distinguir entre mayúsculas y minúsculas. Aquí está la explicación de `stripos`:



La sintaxis básica para establecer una conexión entre PHP y MySQL es la siguiente:

`

```php
<?php
$servername = "localhost"; // Nombre del servidor de MySQL
$username = "usuario"; // Nombre de usuario de MySQL
$password = "contraseña"; // Contraseña de MySQL
$dbname = "nombre_de_la_base_de_datos"; // Nombre de la base de datos

// Crear una nueva conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Resto del código...

// Cerrar la conexión al finalizar
$conn->close();
?>

```

Para ejecutar consultas en MySQL desde PHP, puedes utilizar el objeto de conexión `$conn` y el método `query()` para enviar consultas SQL. Aquí tienes un ejemplo de sintaxis para consultas básicas:

```php
// Consulta SELECT
$sql = "SELECT * FROM tabla";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Recorrer los resultados de la consulta
    while ($row = $result->fetch_assoc()) {
        // Acceder a los valores de cada fila
        echo "Campo1: " . $row["campo1"] . "<br>";
        echo "Campo2: " . $row["campo2"] . "<br>";
        // ...
    }
} else {
    echo "No se encontraron resultados.";
}

// Consulta INSERT
$sql = "INSERT INTO tabla (campo1, campo2) VALUES ('valor1', 'valor2')";
if ($conn->query($sql) === true) {
    echo "Registro insertado correctamente.";
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Consulta UPDATE
$sql = "UPDATE tabla SET campo1 = 'nuevo_valor' WHERE condicion";
if ($conn->query($sql) === true) {
    echo "Registro actualizado correctamente.";
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

// Consulta DELETE
$sql = "DELETE FROM tabla WHERE condicion";
if ($conn->query($sql) === true) {
    echo "Registro eliminado correctamente.";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}

```

