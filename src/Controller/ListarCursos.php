<?php

namespace Alura\Cursos\Controller;


class ListarCursos
{
    public function processarRequisicao()
    {
        $entityManager = (new \Alura\Cursos\Infra\EntityManagerCreator())->getEntityManager();
        $repositorioDeCursos = $entityManager->getRepository(\Alura\Cursos\Entity\Curso::class);
        $cursos = $repositorioDeCursos->findAll();
    }
}