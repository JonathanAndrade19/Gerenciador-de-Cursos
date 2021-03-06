<?php

require __DIR__ . '/../vendor/autoload.php';

use \Alura\Cursos\Controller\ListarCursos;
use \Alura\Cursos\Controller\FormularioInsercao;

switch ($_SERVER['PATH_INFO']) {
    case '/listar-curso':
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
        break;
    case '/novo-curso':
        $controlador = new FormularioInsercao();
        $controlador->processaRequisicao();
        break;
    default:
        echo "Erro 404";
}