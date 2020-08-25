<?php
namespace Alura\Arquitetura;
class FabricaAlunos
{
   private Aluno $aluno;
   public  function comCPFEmailENome(string $numerocpf,string $email,string $nome) : self // retorna a proria instacia da classe
   {
       $this->aluno = new Aluno(new CPF($numerocpf),$nome,new Email($email));
       return $this;
   }

   public  function adicionaTelefone(string $ddd,string $numero) : self 
   {
       $this->aluno->adicionarTelefone($ddd,$numero);
       return $this;
   }

   public function  aluno():Aluno
   {
       return $this->aluno;
   }

}
// desativado apenas exemplo

/* Criando Aluno

$fabrica = new FabricaAlunos();
$fabrica->comCPFEmailENome('param1','param2','param3')
->adicionaTelefone('param1','param2')
->adicionaTelefone('param3','param4')
->aluno();
*/