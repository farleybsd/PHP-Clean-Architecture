<?php
namespace Alura\Arquitetura\Aplicacao\Aluno\MatricularAluno;

use Alura\Arquitetura\Dominio\Aluno\RepositorioDeAluno;
use Alura\Arquitetura\Dominio\Aluno\Aluno;

class MatricularAluno
{

    private RepositorioDeAluno $repositorio;

    public function __construct(RepositorioDeAluno $repositorio)
    {
        $this->repositorioDeAluno = $repositorio;
    }

    public function execulta(MatricularAlunoDto $dados):void
    {
        $aluno =Aluno::comCpfNomeEEmail($dados->cpfAluno,$dados->nomeAluno,$dados->emailAluno);

        $this->repositorioDeAluno->adicionar($aluno);
    }
}


// essa classe que vai ser chamada na interface grafica