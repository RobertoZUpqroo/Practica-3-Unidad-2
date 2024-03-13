<?php

//Problema 3
class Persona {
    protected $nombre;
    protected $edad;
    
    public function cargarDatos($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
    public function imprimirDatos() {
        echo "<div style='margin-bottom: 20px;'>";
        echo "<p>Nombre: $this->nombre</p>";
        echo "<p>Edad: $this->edad</p>";
        echo "</div>";
    }
}

//Problema 1
class Empleado extends Persona {
    private $sueldo;
    
    public function cargarSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }
    
    public function imprimirSueldo() {
        echo "<div style='margin-bottom: 20px;'>";
        echo "<p>Sueldo: $this->sueldo</p>";
        echo "</div>";
    }
    
    public function imprimirMensajeImpuestos() {
        echo "<div style='margin-bottom: 20px;'>";
        if ($this->sueldo > 3000) {
            echo "<p>Debe pagar impuestos</p>";
            echo "<br>";
        } else {
            echo "<p>No debe pagar impuestos</p>";
            echo "<br>";
        }
        echo "</div>";
    }
}

//Problema 2
class CabeceraPagina {
    private $titulo;
    private $alineacion;
    private $colorFondo;
    private $colorFuente;
    
    public function __construct($titulo, $alineacion, $colorFondo, $colorFuente) {
        $this->titulo = $titulo;
        $this->alineacion = $alineacion;
        $this->colorFondo = $colorFondo;
        $this->colorFuente = $colorFuente;
    }
    
    public function mostrarCabecera() {
        echo "<div style='text-align: $this->alineacion; background-color: $this->colorFondo; color: $this->colorFuente; padding: 20px;'>";
        echo "<h1>$this->titulo</h1>";
        echo "</div>";
    }
}

// Crear objetos y llamar a los métodos

$cabecera = new CabeceraPagina("Roberto", "center", "#333", "#FFF");
$cabecera->mostrarCabecera();

$empleado1 = new Empleado();
$empleado1->cargarDatos("Pedro", 30);
$empleado1->cargarSueldo(14000);
$empleado1->imprimirDatos();
$empleado1->imprimirSueldo();
$empleado1->imprimirMensajeImpuestos();

$empleado2 = new Empleado();
$empleado2->cargarDatos("Carlos", 47);
$empleado2->cargarSueldo(7000);
$empleado2->imprimirDatos();
$empleado2->imprimirSueldo();
$empleado2->imprimirMensajeImpuestos();

$empleado3 = new Empleado();
$empleado3->cargarDatos("Francisco", 19);
$empleado3->cargarSueldo(1500);
$empleado3->imprimirDatos();
$empleado3->imprimirSueldo();
$empleado3->imprimirMensajeImpuestos();


$persona1 = new Persona();
$persona1->cargarDatos("María", 25);
$persona1->imprimirDatos();

$persona2 = new Persona();
$persona2->cargarDatos("Beatriz", 22);
$persona2->imprimirDatos();

$persona3 = new Persona();
$persona3->cargarDatos("Paola", 18);
$persona3->imprimirDatos();