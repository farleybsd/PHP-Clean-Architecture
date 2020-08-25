<?php

namespace Alura\Arquitetura\Dominio\Aluno;

use Alura\Arquitetura\Dominio\CPF;

interface RepositorioDeAluno
{
    public function adicionar(Aluno $aluno):void;
    public function buscarporCPF(CPF $cpf): Aluno;
    public function buscarTodos(): array;

}