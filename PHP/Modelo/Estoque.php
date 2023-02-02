<?php
    namespace PHP\Modelo;
    class Estoque{
        private string $produto;
        private int $quantidade;
        private float $valorUnitario;

        public function __construct(string $produto, int $quantidade, float $valorUnitario){
            $this->produto = $produto;
            $this->quantidade = $quantidade;
            $this->valorUnitario = $valorUnitario;
        }

        public function getProduto(): string{
            return $this->produto;
        }
        public function getQuantidade(): int{
            return $this->quantidade;
        }
        public function getValorTotal(): float{
            return $this->valorUnitario;
        }
        
        public function setProduto($valor): void{
            $this->produto = $valor;
        }
        public function setQuantidade($valor): void{
            $this->quantidade = $valor;
        }
        public function setValorUnitario($valor): void{
            $this->valorUnitario = $valor;
        }

        public function __toString(): string{
            return "Impressão Classe Estoque!";
        }
    }
?>