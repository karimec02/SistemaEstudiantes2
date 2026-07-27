<?php

class Student {

    private $file = __DIR__ . '/../data/students.json';

    // Obtener todos los estudiantes (limpio de var_dumps innecesarios)
   public function getAll() {
    if (!file_exists($this->file)) {
        return [];
    }

    $data = file_get_contents($this->file);
    
    if (trim($data) === '') {
        return [];
    }

    $students = json_decode($data, true);

    return is_array($students) ? $students : [];
   }

    // Buscar estudiante por ID convertido a entero
    public function getById($id) {
        $students = $this->getAll();

        foreach ($students as $student) {
           
            if ((int)$student['id'] === (int)$id) {
                return $student;
            }
        }

        return null;
    }
}