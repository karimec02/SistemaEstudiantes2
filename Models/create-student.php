<?php

require_once "Student.php";

$studentModel = new Student();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];

    $student = $studentModel->create($name, $email);

    echo "Estudiante creado correctamente";

    echo "<br>ID: " . $student['id'];
    echo "<br>Nombre: " . $student['name'];
    echo "<br>Email: " . $student['email'];

    echo "<br><br>";
    echo "<a href='read-students.php'>Ver estudiantes</a>";

    exit;
}

?>

<h2>Crear estudiante</h2>

<form method="POST">

    <label>Nombre:</label>
    <input type="text" name="name" required>

    <br><br>

    <label>Email:</label>
    <input type="email" name="email" required>

    <br><br>

    <button type="submit">
        Guardar estudiante
    </button>

</form>