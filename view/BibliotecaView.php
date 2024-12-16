<?php

class BibliotecaView {
    public function mostrarLibros($libros) {
        foreach ($libros as $libro) {
            echo "Título: " . $libro->getTitulo() . ", Autor: " . $libro->getAutor() . ", Disponible: " . ($libro->isDisponible() ? "Sí" : "No") . "\n";
        }
    }

    public function mostrarMensaje($mensaje) {
        echo $mensaje . "\n";
    }
}