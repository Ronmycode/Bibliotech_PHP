<?php

require_once 'models/Biblioteca.php';

class BibliotecaController {
    private $biblioteca;

    public function __construct() {
        $this->biblioteca = new Biblioteca();
    }

    public function agregarLibro($titulo, $autor, $categoria) {
        $libro = new Libro($titulo, $autor, $categoria);
        $this->biblioteca->agregarLibro($libro);
    }

    public function listarLibros() {
        return $this->biblioteca->listarLibros();
    }

    public function buscarLibrosPorAutor($autor) {
        return $this->biblioteca->buscarLibros("getAutor", $autor);
    }

    public function prestarLibro($titulo) {
        return $this->biblioteca->prestarLibro($titulo);
    }
}