<?php

require_once 'controllers/BibliotecaController.php';
require_once 'view/BibliotecaView.php';


$controller = new BibliotecaController();
$view = new BibliotecaView();

// Agregar libros
$controller->agregarLibro("El principito", "Antoine de Saint-Exupéry", "Ficción");
$controller->agregarLibro("1984", "George Orwell", "Distopía");

// Listar libros
$libros = $controller->listarLibros();
$view->mostrarLibros($libros);

// Buscar libros por autor
$resultados = $controller->buscarLibrosPorAutor("George Orwell");
$view->mostrarLibros($resultados);

// Prestar un libro
if ($controller->prestarLibro("1984")) {
    $view->mostrarMensaje("El libro '1984' ha sido prestado.");
} else {
    $view->mostrarMensaje("El libro '1984' no está disponible.");
}
