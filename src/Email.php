<?php
namespace Alura\Arquitetura;
//ValueObjects porque nao tem nehum campo unico como Id
class Email
{
    private string $endereco;

    function __construct(string $endereco)
    {
        if(filter_var($endereco,FILTER_VALIDATE_EMAIL) === false)
        {
          throw new \InvalidArgumentException('Endereco de e-mail inválido');  
        }
        $this->endereco = $endereco;
    }

    public function __toString() : string
    {
        return $this->endereco;
    }

}