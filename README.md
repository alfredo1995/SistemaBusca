Sistema de Busca em PHP <br>

Instalações Necessárias: 
    
    --->  PHP 8 + WAPP + MYSQL WORKBENCH

Conhecimentos Necessário: 

    --->  HTML5 + PHP +  SQL + POO  
    
    
INICIANDO O PROJETO <br>

       
       - composer create-project --prefer-dist Laravel/Laravel receita_gastronomica
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
                    
                    
     
2) inserindo valores nas tabelas    

               
                    
I)INSERT INTO CARGO (NOME) => referente a coluna da segunda tabela cargo VALUES ('PRESIDENTE') => o que vai ser atribuido ao campo da coluna cargo

             INSERT INTO CARGO (DESCRICAO) VALUES ('PRESIDENTE'),('DIRETOR'),('CHEFE');

II) INSERT INTO PESSOA (NOME, ID_CARGO) => referente a primeira coluna da tabela pessoa, VALUES ('PRESIDENTE, 3') => o que vai ser atribuido aos campos da coluna pessoa

            -   INSERT INTO PESSOA (NOME, ID_CARGO) VALUES ('RAIMUNDO', 1),('EUDETE', 2),('ALFREDO', 3);


3) realizar o relacionamentos das tabelas  INNER JOIN
            
INNER JOINT = RELACIONA AS TABELAS E EXIBI POR MEIOS DAS CHAVES PRIMEIRA E ESTRANGEIRAS 


              SELECT pessoa.NOME, cargo.DESCRICAO FROM PESSOA  INNER JOIN CARGO  ON PESSOA.ID_CARGO = CARGO.ID;

4) claussulas de condigoçoes WHERE 

              INSERT INTO CARGO (DESCRICAO) VALUES ('PRESIDENTE'),('DIRETOR'),('CHEFE');


5.1) criar o formulario

              
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
                    $dbname = "conlusta";

7)  criar a conexao com o bando de dados

                 
                    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname); qualquer um dos dois funciona
                    $conn = new mysqli($servidor, $usuario, $senha, $dbname);     qualquer um dos dois funciona
                    
8)  receber os dados no formulario 

               
                $pesquisar = $_POST['pesquisar'];   
                
                
9) criar instrução     
  
SELECT selecione todos os dados da tabela pessoa WHERE onde a coluna nome LIKE entre dentro da variavel %$pesquisar% 
                
                "SELECT * FROM pessoa WHERE nome LIKE '%$pesquisar%' LIMIT 5"
                
10)  criar a variavel que vai receber os atributos

               $resultado_pessoa = mysqli_query($conn, $result_pessoa);
               
11) ler as informações // mysqli fetch array pra le todas as informaçoes da vaivel ($resultado_pessoa) [NOME DO CAMPO DA TABELA SELECIONADA]
                
                 while ($rows_pessoa = mysqli_fetch_array($resultado_pessoa)) {
                 echo $rows_pessoa['NOME'];
                 };
                 ?>
                    
                    
