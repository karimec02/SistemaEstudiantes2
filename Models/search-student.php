<?php

require_once __DIR__ . "/Student.php";

$studentModel = new Student();
// Puedes quitar esto si ya verificaste que lee el JSON bien:
/*
echo "<pre>";
print_r($studentModel->getAll());
echo "</pre>";
*/

?>

<h2>Buscar estudiante</h2>

<form method="POST">

    <label>ID del estudiante:</label>

    <input type="number" name="id" required>

    <br><br>

    <button type="submit">
        Buscar
    </button>

</form>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];

    $student = $studentModel->getById($id);


    if ($student) {

        echo "<h3>Estudiante encontrado</h3>";

        echo "ID: " . $student['id'] . "<br>";
        echo "Nombre: " . $student['name'] . "<br>";
        echo "Email: " . $student['email'] . "<br>";

    } else {

        echo "<h3>No se encontró ningún estudiante</h3>";

    }

}

?>