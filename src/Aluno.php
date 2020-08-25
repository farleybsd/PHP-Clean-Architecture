<?php
namespace Alura\Arquitetura;
class Aluno
{
    private Cpf $cpf;
    private string $nome;
    private Email $email;
    private array $telefones;

        //Named constructors
    public static function comCpfEEmail(string $cpf,string $nome,string $email) : self
    {
        return new Aluno(new CPF($cpf),$nome,new Email($email));
    }

    public function __construct(Cpf $cpf,string $nome,Email $email)
    {
        $this->cpf =$cpf;
        $this->nome =$nome;
        $this->email = $email;
    }

    public function adicionarTelefone(string $ddd,string $numero)
    {
        $this->telefones[] = new Telefone($ddd,$numero);
        return $this;
    }
}