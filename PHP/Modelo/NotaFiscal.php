<?php
    namespace PHP\Modelo;
    class NotaFiscal{
        private string $nome;
        private string $CPF;
        private string $dataCompra;

        public function __construct(
            string $nome, 
            string $CPF, 
            string $dataCompra, 
            ){
                $this->nome = $nome;
                $this->CPF = $CPF;
                $this->dataCompra = $dataCompra;
        }

        public function getNome(): string{
            return $this->nome;
        }
        public function getCPF(): string{
            return $this->CPF;
        }
        public function getDataCompra(): string{
            return $this->dataCompra;
        }

        public function setNome($valor): void{
            $this->nome = $valor;
        }
        public function setCPF($valor): void{
            $this->CPF = $valor;
        }
        public function setDataCompra($valor): void{
            $this->dataCompra = $valor;
        }

        public function __toString(): string{
            return "Impressão Classe Nota Fiscal!";
        }
    }
?>