<?php

    namespace PHP\Modelo;
    require_once("Funcionario.php");

    class Gerente extends Funcionario{
        private float $totalVendasLoja;
        private float $comissao;

        public function __construct(
            string $matricula, 
            string $nome, 
            string $endereco, 
            string $telefone, 
            string $sexo, 
            string $bairro, 
            string $funcao,
            float $salario,
            float $totalVendasLoja,
            float $comissao   
            ){
            parent::__construct($matricula, $nome, $endereco, $telefone, $sexo, $bairro, $funcao, $salario);
            $this->totalVendasLoja = $totalVendasLoja;
            $this->comissao = $comissao;
        }

        public function getTotalVendasLoja(){
            return $this->totalVendasLoja;
        }
        public function setTotalVendasLoja($valor){
            $this->totalVendasLoja = $valor;
        }

        public function Cadastrar(Funcionario $funcio): string{
            return "O funcionario ".$funcio->nome." foi cadastrado";
        }

        public function comissao(): string{
            if($this->totalVendasLoja > 10000){
                $this->comissao = $this->totalVendasLoja * 0.2;
                return $this->comissao;
            }
            $this->comissao = $this->totalVendasLoja * 0.05;
            return $this->comissao;
        }
    }
?>