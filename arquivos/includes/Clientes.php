<?php


class Clientes {
    public $id;
    public $nome;
    public $cpf;
    public $rg;
    public $idade;
    public $sexo;
    public $endereco;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $uf;
    public $pais;

    // tentativa de array
    public $clientes = [];

    // Adicionar
    public function adicionar_cliente($id,$nome,$cpf,$rg,$idade,$sexo,$endereco,$numero,$complemento,$bairro,$cidade,$uf,$pais) {
        $this->id       = $id;
        $this->nome     = $nome;
        $this->cpf      = $cpf;
        $this->rg       = $rg;
        $this->idade    = $idade;
        $this->sexo     = $sexo;
        $this->endereco = $endereco;
        $this->numero   = $numero;
        $this->complemento = $complemento;
        $this->bairro   = $bairro;
        $this->cidade   = $cidade;
        $this->uf       = $uf;
        $this->pais     = $pais;

        return $this->clientes[] = array($this->id,$this->nome,$this->cpf,$this->rg,$this->idade,$this->sexo,$this->endereco,$this->numero,$this->complemento,$this->bairro,$this->cidade,$this->uf,$this->pais);
       }

    public function get_clientes() {
        return $this->clientes;
    }

    public function get_dados(){
        return $this->id;
    }
}
$clientes = new Clientes();