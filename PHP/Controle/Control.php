<?php

    namespace PHP\Controle;

    require_once("Modelo/NotaFiscal.php");
    require_once("Modelo/Estoque.php");
    require_once("Modelo/Produto.php");

    use PHP\Modelo\Produto;
    use PHP\Modelo\Estoque;
    use PHP\Modelo\NotaFiscal;
    use PHP\Modelo\Gerente;
    use PHP\Modelo\Cliente;

    class Control{

        public function comprarComCadastro(Cliente $cliente, Produto $produto, Estoque $estoque, NotaFiscal $notaFiscal, Gerente $gerente): void{
            if($cliente->getQuantidadeCompras() == 10)
            {
                $media = $cliente->getTotalComprado() / 10;
                $produto->setValorTotal($produto->getValorTotal() - $media);
                $gerente->setTotalVendasLoja($gerente->getTotalVendasLoja() + $produto->getValorTotal());
                $cliente->setQuantidadeCompras($cliente->getQuantidadeCompras() + 1);
                $this->gerarNota($produto, $estoque, $notaFiscal, $gerente);
            }
            $gerente->setTotalVendasLoja($gerente->getTotalVendasLoja() + $produto->getValorTotal());
        }

        public function comprar(Produto $produto, Estoque $estoque): int{
            if($produto->getQuantidadeComprada() <= $estoque->getQuantidade()){
                return 0;
            }
            return 1;
        }

        public function gerarNota(Produto $produto, Estoque $estoque, NotaFiscal $notaFiscal, Gerente $gerente): string{
            $statusItem = $this->comprar($produto, $estoque);
            if($statusItem == 0){
                $gerente->setTotalVendasLoja($gerente->getTotalVendasLoja() + $produto->getValorTotal());
                echo "Nota Fiscal <br> ";
                echo "<br> Cliente: ".$notaFiscal->getNome()."<br>CPF: ".$notaFiscal->getCPF()."<br>Data da compra: ".$notaFiscal->getDataCompra();
                echo "<br>Produto: ".$produto->getNomeProduto();
                echo "<br>Quantidade: ".$produto->getQuantidadeComprada();
                echo "<br>Valor unitário: ".$produto->getValorUnitario();
                echo "<br>Total: ".$produto->getValorTotal();
                return "";
            }
            return "O item desejado não está disponível em nossos estoques!";
        }
    }
?>