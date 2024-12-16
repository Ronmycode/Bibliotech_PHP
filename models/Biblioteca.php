<?php

require_once 'Libro.php';

class Biblioteca {
    private $libros = [];

    public function agregarLibro(Libro $libro) {
        $this->libros[] = $libro;
    }

    public function buscarLibros($criterio, $valor) {
        $resultados = [];
        foreach ($this->libros as $libro) {
            if (property_exists($libro, $criterio) && $libro->{$criterio}() === $valor) {
                $resultados[] = $libro;
            }
        }
        return $resultados;
    }

    public function prestarLibro($titulo) {
        foreach ($this->libros as $libro) {
            if ($libro->getTitulo() === $titulo && $libro->isDisponible()) {
                return $libro->prestar();
            }
        }
        return false;
    }

    public function listarLibros() {
        return $this->libros;
    }
}