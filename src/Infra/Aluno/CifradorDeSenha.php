<?php
namespace Alura\Arquitetura\Infra\Aluno;

use Alura\Arquitetura\Aluno\CifradorDeSenha as AlunoCifradorDeSenha;

class CifradorDeSenha implements AlunoCifradorDeSenha
{
    public function cifrar(string $senha)
    {
        return password_hash($senha,PASSWORD_ARGON2ID);
    }
    public function verificar(string $senhaemtexto,string $senhacifrada):bool
    {
        return password_verify($senhaemtexto,$senhacifrada);
    }
}


