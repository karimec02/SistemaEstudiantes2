<?php

require_once "Student.php";

$studentModel = new Student();

if (!isset($_GET['id'])) {
    echo "ID del estudiante no encontrado";
    exit;
}

$id = $_GET['id'];

$student = $studentModel->getById($id);

if (!$student) {
    echo "Estudiante no encontrado";
    exit;
}


// Actualizar datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];

    $studentModel->update($id, $name, $email);

    echo "Estudiante actualizado correctamente";

    echo "<br><a href='read-students.php'>Volver al listado</a>";

    exit;
}

?>

<h2>Actualizar estudiante</h2>

<form method="POST">

    <label>Nombre:</label>
    <input 
        type="text" 
        name="name" 
        value="<?php echo $student['name']; ?>"
    >

    <br><br>

    <label>Email:</label>
    <input 
        type="email" 
        name="email" 
        value="<?php echo $student['email']; ?>"
    >

    <br><br>

    <button type="submit">
        Actualizar
    </button>

</form>