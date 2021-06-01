<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 29/05/21
 * Time: 20:44
 */

namespace Alura\Cursos\Controller;


class FormularioInsercao implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
        require __DIR__ . '/../../view/cursos/formulario.php';
    }
}