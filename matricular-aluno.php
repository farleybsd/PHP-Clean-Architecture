<?php
require 'vendor/autoload.php';

use Alura\Arquitetura\Dominio\Aluno\Aluno;
use Alura\Arquitetura\Infra\Aluno\RepositorioDeAlunosEmMemoria;

$cpf= $argv[1];
$nome=$argv[2];
$email=$argv[3];
$ddd=$argv[4];
$numero=$argv[5];

$aluno =Aluno::comCpfNomeEEmail($cpf,$nome,$email)->adicionarTelefone($ddd,$numero);
$repositorio = new RepositorioDeAlunosEmMemoria();
$repositorio->adicionar($aluno);


//php matricular-aluno.php "114.052.636.79" "FarleyRufino" "teste@teste.com.br" "33" "32123626" 