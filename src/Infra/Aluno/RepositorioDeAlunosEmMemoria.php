<?php
namespace Alura\Arquitetura\Infra\Aluno;

use Alura\Arquitetura\Dominio\Aluno\RepositorioDeAluno;
use Alura\Arquitetura\Dominio\Aluno\Aluno;
use Alura\Arquitetura\Dominio\Aluno\AlunoNaoEncontrado;
use Alura\Arquitetura\Dominio\CPF;

class RepositorioDeAlunosEmMemoria implements RepositorioDeAluno
{
    private array $alunos =[];
    public function adicionar(Aluno $aluno):void
    {
        $this->alunos[] =$aluno;
    }
    public function buscarporCPF(CPF $cpf): Aluno
    {
        $alunosFiltrados= array_filter($this->alunos, fn (Aluno $aluno) =>$aluno->cpf()==$cpf);
        if (count($alunosFiltrados)===0) {
            throw new AlunoNaoEncontrado($cpf);
        }

        if(count($alunosFiltrados)> 1)
        {
            throw new \Exception();
        }

        return $alunosFiltrados[0];

    }
    public function buscarTodos(): array
    {
        return $this->alunos;
    }
}