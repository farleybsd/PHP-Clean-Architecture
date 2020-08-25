<?php
namespace Alura\Arquitetura\Dominio\Aluno;
use Alura\Arquitetura\Dominio\CPF;
class AlunoNaoEncontrado extends \DomainException
{
    public function __construct(cpf $cpf)
    {
        parent::__construct("Aluno com CPF $cpf não encontrado");
    }
}