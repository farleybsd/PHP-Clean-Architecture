<?php

namespace Alura\Arquitetura\Infra\Aluno;

use Alura\Arquitetura\Aluno\CifradorDeSenha;

class CifradorDeSenhaMd5 implements CifradorDeSenha
{
    public function cifrar(string $senha)
    {
        return md5($senha);
    }
    public function verificar(string $senhaemtexto,string $senhacifrada):bool
    {
        return md5($senhaemtexto)=== $senhacifrada;
    }

}