Sistema de Busca em PHP <br>

Instalações Necessárias: 
    
    --->  PHP 8 + WAPP + MYSQL WORKBENCH

Conhecimentos Necessário: 

    --->  HTML5 + PHP +  SQL + POO  
    
    
INICIANDO O PROJETO <br> 

       
             CREATE TABLE PESSOA (
             ID INT  NOT NULL PRIMARY KEY AUTO_INCREMENT,
             NOME VARCHAR(50),
             ID_CARGO INT 
             );
             CREATE TABLE CARGO (
             ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
             DESCRICAO VARCHAR (50)
             );

             ALTER TABLE PESSOA ADD CONSTRAINT FOREIGN KEY (ID) REFERENCES CARGO (ID);
                    
                    
     
2) inserindo valores nas tabelas    <br>

             INSERT INTO CARGO (DESCRICAO) VALUES ('PRESIDENTE'),('DIRETOR'),('CHEFE');
             INSERT INTO PESSOA (NOME, ID_CARGO) VALUES ('RAIMUNDO', 1),('EUDETE', 2),('ALFREDO', 3);


3) RELACIONA AS TABELAS E EXIBI POR MEIOS DAS CHAVES PRIMEIRA E ESTRANGEIRAS = INNER JOIN <br>
            
              SELECT pessoa.NOME, cargo.DESCRICAO FROM PESSOA  INNER JOIN CARGO  ON PESSOA.ID_CARGO = CARGO.ID;

4) claussulas de condigoçoes WHERE <br>

              INSERT INTO CARGO (DESCRICAO) VALUES ('PRESIDENTE'),('DIRETOR'),('CHEFE');


5.1) criar o formulario <br>

              
             <h1>Formulario de Pesquisa</h1>
             <form method="POST" action="pesquisar.php">
             Pesquisar:<input type="text" name="pesquisar" placeholder="pesquisar">
             <input type="submit" value="Enviar">
             </form>
    
6) conectar o php com banco de dados   
    
                    
             <?php
             $servidor = "localhost";
             $usuario = "root";
             $senha = "root";
             $dbname = "consulta";

7)  criar a conexao com o bando de dados <br>

                 
            $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);         qualquer um dos dois funciona / estruturado
            $conn = new mysqli($servidor, $usuario, $senha, $dbname);             qualquer um dos dois funciona / pdo
                    
8)  receber os dados no formulario <br>

               
           $pesquisar = $_POST['pesquisar'];   
                
                
9) criar instrução     <br>
  
               
           "SELECT * FROM pessoa WHERE nome LIKE '%$pesquisar%' LIMIT 5"
                
10)  criar a variavel que vai receber os atributos <br>

           $resultado_pessoa = mysqli_query($conn, $result_pessoa);
               
11) ler as informações // mysqli fetch array pra le todas as informaçoes da vaivel ($resultado_pessoa) [nomedocampo] <br>
                
          while ($rows_pessoa = mysqli_fetch_array($resultado_pessoa)) {
          echo $rows_pessoa['NOME'];
          };
          ?>
                    
                    
                   
<br><br><<br> DCUMENTAÇÃO MAIS DETALHADA NOS CÓDIGOS ;)
                    
