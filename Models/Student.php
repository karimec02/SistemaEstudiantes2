<?php

class Student {

    private $file = __DIR__ . '/../data/students.json';


    // Obtener todos los estudiantes
    public function getAll() {

        if (!file_exists($this->file)) {
            return [];
        }

        $data = file_get_contents($this->file);

        if (empty($data)) {
            return [];
        }

        $students = json_decode($data, true);

        return is_array($students) ? $students : [];
    }


    // Crear estudiante
    public function create($name, $email) {

        $students = $this->getAll();

        $newStudent = [
            "id" => count($students) + 1,
            "name" => $name,
            "email" => $email
        ];

        $students[] = $newStudent;

        file_put_contents(
            $this->file,
            json_encode($students, JSON_PRETTY_PRINT)
        );

        return $newStudent;
    }


    // Buscar estudiante por ID
    public function getById($id) {

        $students = $this->getAll();

        foreach ($students as $student) {

            if ($student['id'] == $id) {
                return $student;
            }

        }

        return null;
    }


    // Actualizar estudiante
    public function update($id, $name, $email) {

        $students = $this->getAll();

        foreach ($students as &$student) {

            if ($student['id'] == $id) {

                $student['name'] = $name;
                $student['email'] = $email;

            }

        }

        file_put_contents(
            $this->file,
            json_encode($students, JSON_PRETTY_PRINT)
        );

        return true;
    }


    // Eliminar estudiante
    public function delete($id) {

        $students = $this->getAll();

        $students = array_filter($students, function($student) use ($id) {

            return $student['id'] != $id;

        });


        file_put_contents(
            $this->file,
            json_encode(array_values($students), JSON_PRETTY_PRINT)
        );

        return true;
    }

}