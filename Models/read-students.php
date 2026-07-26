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

?>

<h2>Lista de Estudiantes</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
    </tr>

    <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['email']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>