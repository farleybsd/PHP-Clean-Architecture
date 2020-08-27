<?php
namespace Alura\Arquitetura\Aluno;
interface CifradorDeSenha
{
    public function cifrar(string $senha);
    public function verificar(string $senhaemtexto,string $senhacifrada):bool;
    
}