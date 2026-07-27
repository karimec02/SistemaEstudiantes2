<?php

$students = [
    [
        "id" => 1,
        "name" => "Juan Perez",
        "email" => "juan@email.com"
    ],
    [
        "id" => 2,
        "name" => "Maria Lopez",
        "email" => "maria@email.com"
    ],
    [
        "id" => 3,
        "name" => "Carlos Ruiz",
        "email" => "carlos@email.com"
    ]
];


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