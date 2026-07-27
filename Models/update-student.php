<?php

require_once "Student.php";

$studentModel = new Student();


// Pedir ID si no existe
if (!isset($_GET['id'])) {

?>

<h2>Actualizar estudiante</h2>

<form method="GET">

    <label>ID del estudiante:</label>
    <input type="number" name="id">

    <button type="submit">
        Buscar
    </button>

</form>

<?php

exit;

}


$id = $_GET['id'];

$student = $studentModel->getById($id);


if (!$student) {
    echo "Estudiante no encontrado";
    exit;
}


// Actualizar
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

Nombre:
<input 
type="text" 
name="name" 
value="<?php echo $student['name']; ?>"
>

<br><br>

Email:
<input 
type="email" 
name="email" 
value="<?php echo $student['email']; ?>"
>

<br><br>

<button>
Actualizar
</button>

</form>