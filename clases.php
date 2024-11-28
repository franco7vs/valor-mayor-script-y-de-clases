<?php
class Persona {
    protected $nombre;
    protected $apellido;
    protected $edad;

    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function presentarse() {
        return "Hola, soy " . $this->nombre . " " . $this->apellido . " y tengo " . $this->edad . " años.<br>";
    }
}

class Alumno extends Persona {
    private $matricula;

    public function __construct($nombre, $apellido, $edad, $matricula) {
        parent::__construct($nombre, $apellido, $edad); 
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function estudiar() {
        return $this->nombre . " está estudiando.<br>";
    }
}

class Profesor extends Persona {
    private $materia;

    public function __construct($nombre, $apellido, $edad, $materia) {
        parent::__construct($nombre, $apellido, $edad);
        $this->materia = $materia;
    }

    public function getMateria() {
        return $this->materia;
    }

    public function enseñar() {
        return $this->nombre . " está enseñando " . $this->materia . ".<br>";
    }
}

class Directivo extends Persona {
    private $cargo;

    public function __construct($nombre, $apellido, $edad, $cargo) {
        parent::__construct($nombre, $apellido, $edad); 
        $this->cargo = $cargo;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function tomarDecisiones() {
        return $this->nombre . " está tomando decisiones como " . $this->cargo . ".<br>";
    }
}

class Administrativo extends Persona {
    private $departamento;

    public function __construct($nombre, $apellido, $edad, $departamento) {
        parent::__construct($nombre, $apellido, $edad); 
        $this->departamento = $departamento;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function gestionarDocumentos() {
        return $this->nombre . " está gestionando documentos en el departamento de " . $this->departamento . ".<br>";
    }
}

$alumno = new Alumno("Juan", "Pérez", 16, "A12345");
$profesor = new Profesor("María", "Gómez", 40, "Matemáticas");
$directivo = new Directivo("Carlos", "López", 50, "Director");
$administrativo = new Administrativo("Ana", "Martínez", 35, "Secretaría");

echo $alumno->presentarse();
echo $alumno->estudiar();

echo $profesor->presentarse();
echo $profesor->enseñar();

echo $directivo->presentarse();
echo $directivo->tomarDecisiones();

echo $administrativo->presentarse();
echo $administrativo->gestionarDocumentos();
?>
