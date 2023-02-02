<?php
    namespace PHP\Modelo;
    class Cliente{
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $CPF;
        private int $quantidadeCompras;
        private float $totalComprado;

        public function __construct(string $nome, string $telefone, string $endereco, string $CPF, int $quantidadeCompras, float $totalComprado){
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->CPF = $CPF;
            $this->quantidadeCompras = $quantidadeCompras;
            $this->totalComprado = $totalComprado;
        }

        public function getQuantidadeCompras(): string{
            return $this->quantidadeCompras;
        }
        public function getTotalComprado(): float{
            return $this->totalComprado;
        }
        public function setQuantidadeCompras($valor): void{
            $this->quantidadeCompras = $valor;
        }
        public function setTotalComprado(): void{
            $this->quantidadeCompras = $valor;
        }
    }
?>