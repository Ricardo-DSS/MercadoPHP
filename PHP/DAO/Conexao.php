<?php
    namespace PHP\DAO;

    class Conexao{
        public function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','Mercado');
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                } 
                echo "<br>Não Entrei!";
            } 
            catch(Except $erro){
                echo $erro;
            }
        }//fim conectar
    }//fim conexao
?>