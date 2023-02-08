<?php
    require_once("Controle/Control.php");
    require_once("Modelo/Gerente.php");
    require_once("Modelo/Cliente.php");
    require_once("Modelo/Estoque.php");
    require_once("DAO/Inserir.php");
    require_once("DAO/Conexao.php");
    require_once("DAO/Consultar.php");

    use PHP\Controle\Control;
    use PHP\Modelo\Produto;
    use PHP\Modelo\Estoque;
    use PHP\Modelo\NotaFiscal;
    use PHP\Modelo\Gerente;
    use PHP\Modelo\Cliente;
    use PHP\DAO\Inserir;
    use PHP\DAO\Conexao;
    use PHP\DAO\Consultar;

    $contr = new Control();

    $item = new Produto("Shampoo 400ml", 10, 20.00, 200);
    $item1 = new Estoque("Shampoo 400ml", 12, 20.00);
    $nota1 = new NotaFiscal("Ricardo", "12345678912", "20/02/2023");
    $gerente = new Gerente("0001", "Maria", "Av. Senador Vergueiro, 400", "944556699", "F", "Centro", "Gerente", 6000.0, 1000, 0);

    $clientRicardo = new Cliente("Ricardo", "11945455678", "Av. Senador Vergueiro. 400", "45678912645", 10, 24.50);
    
    /*
    $contr->gerarNota($item, $item1, $nota1, $gerente);
    echo "<br><br>";
    $contr->comprarComCadastro($clientRicardo, $item, $item1, $nota1, $gerente);
    */

    $conex = new Conexao();
    $conex->conectar();

    $insert = new Inserir();
    $consult = new Consultar();

    //$insert->cadastrarProduto($conex, $item1);
    $consult->consultarProdutos($conex);
    echo "<br><br>";
    $consult->cadastrarCliente($conex, $clientRicardo);
?>