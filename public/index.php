<?php

require __DIR__ . '/../vendor/autoload.php';

use \Alura\Cursos\Controller\ListarCursos;

switch ($_SERVER['PATH_INFO']) {
    case '/listar-curso':
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
        break;
    case '/novo-curso':
        require 'formulario-novo-curso.php';
        break;
    default:
        echo "Erro 404";
}