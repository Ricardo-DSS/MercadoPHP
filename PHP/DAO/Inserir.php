<?php
    namespace PHP\DAO;

    require_once("Conexao.php");

    use PHP\Modelo\Estoque;

    class Inserir{
        public function cadastrarProduto(Conexao $conexao, Estoque $estoque){
            try{
                $produto = $estoque->getProduto();
                $quantidade = $estoque->getQuantidade();
                $preco = $estoque->getValorTotal();

                $conn = $conexao->conectar();
                $sql = "insert into Estoque (codigo, produto, quantidade, preco) values ('', '$produto', '$quantidade', '$preco')";
                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "Produto cadastrado!";
                } else {
                    echo "Algo deu errado!";
                }
                mysqli_close($conn);//Encerra a conexao
            } catch (Exception $erro){
                echo $erro;
            }
        }
    }
?>