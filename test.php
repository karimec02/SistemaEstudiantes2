<?php

require_once 'models/Student.php';

$student = new Student();

// Crear estudiante
$student->create("Juan Perez", "juan@email.com");

// Mostrar todos
print_r($student->getAll());