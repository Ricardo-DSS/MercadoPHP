<?php
    namespace PHP\Modelo;
    class Funcionario{
        private string $matricula;
        private string $nome;
        private string $endereco;
        private string $telefone;
        private string $sexo;
        private string $bairro;
        private string $funcao;
        private float $salario;

        public function __construct(
            string $matricula, 
            string $nome, 
            string $endereco, 
            string $telefone, 
            string $sexo, 
            string $bairro, 
            string $funcao,
            float $salario){
                $this->matricula = $matricula;
                $this->nome = $nome;
                $this->endereco = $endereco;
                $this->telefone = $telefone;
                $this->sexo = $sexo;
                $this->bairro = $bairro;
                $this->funcao = $funcao;
                $this->salario = $salario;
        }

        public function __get($variavel){
            return $this->variavel;
        }
        public function __set($variavel, $valorVariavel){
            $this->variavel = $valorVariavel;
        }
        public function __toString(): string{
            return "Impressão Classe Funcionario!";
        }
    }
?>