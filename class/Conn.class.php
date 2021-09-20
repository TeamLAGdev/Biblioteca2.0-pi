<?php

 date_default_timezone_set('America/Sao_Paulo');
 abstract class Conn
 {
     const host = 'localhost';
     const dbname = 'lojas';
     const user = 'root';
     const password = '';

      static function conectar()
      {
            try
            {
                $pdo = new PDO("mysql:host=".self::host.";dbname=".self::dbname.";charset=utf8", self::user, self::password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
            }
      }

      

 abstract class Listar
 {
                static function ListaRecentes(){
                    try {
                            $pdo = Conn::conectar();
                            $recentes= $pdo->prepare("SELECT * FROM produtos ORDER BY id DESC LIMIT 0,10 ");
                            $recentes->execute();
                            $recentes = $recentes->fetchAll(PDO::FETCH_OBJ);

                            return $recentes;
                    } catch (PDOException $e){
                        echo "ERROR: ".$e->getMessage();
                    }
                }

            static function ListaAcao(){
                try {
                    $pdo = Conn::conectar();
                    $acao= $pdo->prepare("SELECT * ,genero.nome AS nome_genero FROM produtos INNER JOIN genero ON produtos.idgenero = genero.id = '1' ");
                    $acao->execute();
                    $acao = $acao->fetchAll(PDO::FETCH_OBJ);

                    return $acao;
                } catch (PDOException $e){
                    echo "ERROR: ".$e->getMessage();
                }
        }
        static function ListaRomance(){
            try {
                $pdo = Conn::conectar();
                $romance= $pdo->prepare("SELECT * FROM produtos  ORDER BY id ASC LIMIT 0,15");
                $romance->execute();
                $romance = $romance->fetchAll(PDO::FETCH_OBJ);

                return $romance;
            } catch (PDOException $e){
                echo "ERROR: ".$e->getMessage();
            }
        }
        static function ListaAventura(){
            try {
                $pdo = Conn::conectar();
                $aventura= $pdo->prepare("SELECT * FROM produtos  ORDER BY id DESC LIMIT 20,30");
                $aventura->execute();
                $aventura = $aventura->fetchAll(PDO::FETCH_OBJ);

                return $aventura;
            } catch (PDOException $e){
                echo "ERROR: ".$e->getMessage();
            }
        }
   
        static function getProdutoById($Id){
            

        try
        {
            $pdo = Conn::conectar();
            $produtoId = $pdo->prepare("SELECT *, genero.nome AS nome_genero FROM produtos INNER JOIN genero ON produtos.idgenero = genero.id WHERE produtos.id = :id" );
            $produtoId->bindValue(':id', $Id);
            
            $produtoId->execute();
            $return = $produtoId->fetch(PDO::FETCH_OBJ);
            
            return $return;

        } catch (PDOException $e){
            echo "ERROR: ".$e->getMessage();
        }
        }
     static function buscar($produtoNome){
         try{
             $pdo = Conn::conectar();
             $query = $pdo->prepare("SELECT * FROM produtos WHERE nome_livro LIKE :nome_livro");
             $query->bindValue(':nome_livro', '%'.$produtoNome.'%');
             $query->execute();

             $query = $query->fetchAll(PDO::FETCH_OBJ);
             return $query;
                
         }  catch (PDOException $e){
            echo "ERROR: ".$e->getMessage();
        }
     }

  }
   

        abstract class Comentario{
            static function InserirComentario()
            {
                try
                {
                    $pdo = Conn::conectar();
                    
                if (isset($_POST["nome"]) && isset($_POST["mensagem"])) {
                $insert = $pdo->prepare("INSERT INTO comentario(nome,mensagem,data_comentario,id_produto,status) VALUES (:nome, :mensagem, NOW(),:id_produto,0)");
                $insert->bindValue(":nome", $_POST["nome"]);
                $insert->bindValue(":mensagem", $_POST["mensagem"]);
                $insert->bindValue(":id_produto", $$id);
                $insert->execute();
                
                $insert = $insert->fetchAll(PDO::FETCH_OBJ);
                
                return $insert;
                }  
            } catch (PDOException $e){
                echo "ERROR: ".$e->getMessage();
            }
            }
           
            static function MostrarComentario($id)
              {
                  try{
                     $pdo = Conn::conectar();                   
                    $q = $pdo->prepare("SELECT * FROM comentario  WHERE id_produto = :id_produto and status = 1 ORDER BY id DESC LIMIT 0,5 ");
                    $q->bindValue(":id_produto", $id);
                    $q->execute();

                    $q = $q->fetchAll(PDO::FETCH_OBJ);
                    return $q;
                 }catch (PDOException $e){
                    echo "ERROR: ".$e->getMessage();
               
            
                  }  
               
        }
    }




















?>