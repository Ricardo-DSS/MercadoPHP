<?php
    namespace PHP\Modelo;
    class Produto{
        protected string $nomeProduto;
        protected int $quantidadeComprada;
        protected float $valorUnitario;
        protected float $valorTotal;

        public function __construct($nomeProduto, $quantidadeComprada, $valorUnitario, $valorTotal){
            $this->nomeProduto = $nomeProduto;
            $this->quantidadeComprada = $quantidadeComprada;
            $this->valorUnitario = $valorUnitario;
            $this->valorTotal = $valorTotal;
        }

        public function getNomeProduto(): string{
            return $this->nomeProduto;
        }
        public function getQuantidadeComprada(): int{
            return $this->quantidadeComprada;
        }
        public function getValorUnitario(): float{
            return $this->valorUnitario;
        }
        public function getValorTotal(): float{
            return $this->valorTotal;
        }

        public function setNomeProduto($valor): void{
            $this->nomeProduto = $valor;
        }
        public function setQuantidadeComprada($valor): void{
            $this->quantidadeComprada = $valor;
        }
        public function setValorUnitario($valor): void{
            $this->valorUnitario = $valor;
        }
        public function setValorTotal($valor): void{
            $this->valorTotal = $valor;
        }

        public function __toString(): string{
            return "Impressão Classe Produto!";
        } 
    }
?>