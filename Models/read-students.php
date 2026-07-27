<?php

require_once "Student.php";

$studentModel = new Student();

$students = $studentModel->getAll();


// Validar si existen estudiantes
if (empty($students)) {
    echo "No hay estudiantes registrados.";
    exit;
}


// Mostrar estudiantes
foreach ($students as $student) {

    echo "ID: " . $student["id"] . "<br>";
    echo "Nombre: " . $student["name"] . "<br>";
    echo "Email: " . $student["email"] . "<br>";
    echo "-------------------<br>";

}

?>