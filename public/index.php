<?php

switch ($_SERVER['PATH_INFO']) {
    case '/listar-curso':
        require 'listar-cursos.php';
        break;
    case '/novo-curso':
        require 'formulario-novo-curso.php';
        break;
    default:
        echo "Erro 404";
}