<?php
/*
* Classe ValueObjects essa classe sempre vai tratar em qualquer entidade
* que precise do registro cpf como uma classe em vez de um tipo de dado primitivo
* ou seja CPF nao é uma string e uma classe CPF com suas validacoes
*/

namespace Alura\Arquitetura\Dominio;
class CPF
{
    private string $numero;
    public function __construct(string $numero)
    {
        $this->setNumero($numero);
    }
    private function setNumero(string $numero): void
    {
        $opcoes = [
            'options' => [
                'regexp' => '/\d{3}\.\d{3}\.\d{3}\-\d{2}/'
            ]
        ];
        if (filter_var($numero, FILTER_VALIDATE_REGEXP, $opcoes) === false) {
            throw new \InvalidArgumentException('CPF no formato inválido');
        }

        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return $this->numero;
    }

}