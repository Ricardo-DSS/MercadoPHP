<?php
    namespace PHP\DAO;

    require_once("Conexao.php");

    use PHP\Modelo\Cliente;

    class Consultar{
        public function consultarProdutos(Conexao $conexao){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from Estoque";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>Código: ".$dados["codigo"]."\t\tProduto: ".$dados["produto"]."\t\tQuantidade: "
                        .$dados["quantidade"]."\t\tpreco: ".$dados["preco"];
                }
            } catch (Exception $erro){
                echo $erro;
            }
        }

        public function cadastrarCliente(Conexao $conexao, Cliente $cliente){
            try{
                $nome = $cliente->getNome();
                $telefone = $cliente->getTelefone();
                $endereco = $cliente->getEndereco();
                $CPF = $cliente->getCPF();
                $quantidadeCompras = $cliente->getQuantidadeCompras();
                $totalComprado = $cliente->getTotalComprado();

                $conn = $conexao->conectar();
                $sql = "insert into Cliente (codigo, nome, telefone, endereco, cpf, quantidadeCompras, totalComprado) values 
                    ('', '$nome', '$telefone', '$endereco', '$CPF', '$quantidadeCompras', '$totalComprado')";
                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "Cliente cadastrado!";
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