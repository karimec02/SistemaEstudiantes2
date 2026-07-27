<?php

require_once 'Student.php';

$studentModel = new Student();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];

    if ($studentModel->delete($id)) {

        $message = "Estudiante eliminado correctamente";

    } else {

        $message = "No se encontró ningún estudiante";
    }
}

?>

<h2>Eliminar estudiante</h2>

<form method="POST">

    ID del estudiante:
    <input type="number" name="id" required>

    <button type="submit">
        Eliminar
    </button>

</form>

<p>
<?php echo $message; ?>
</p>