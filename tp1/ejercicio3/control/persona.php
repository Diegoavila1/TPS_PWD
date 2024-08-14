<?php

class persona{
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;

	public function __construct($nombre, $apellido, $edad, $direccion) {

		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->edad = $edad;
		$this->direccion = $direccion;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getApellido() {
		return $this->apellido;
	}

	public function setApellido($value) {
		$this->apellido = $value;
	}

	public function getEdad() {
		return $this->edad;
	}

	public function setEdad($value) {
		$this->edad = $value;
	}

	public function getDireccion() {
		return $this->direccion;
	}

	public function setDireccion($value) {
		$this->direccion = $value;
	}
    
}