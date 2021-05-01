Sistema de Busca em PHP <br>

Instalações Necessárias: 
    
    --->  PHP 8 + XAMPP + MYSQL WORKBENCH

Conhecimentos Necessário: 

    --->  HTML5 + PHP +  SQL + POO  


1) criar duas tabelas 

criar primeira tabela pessoa => CREATE TABELE PESSOA <br>
criar chave com auto inclemente com chave primaria=> NOT NULL PRIMARY KEY AUTO_INCREMENT <br>
criar relacionamento. guardar o valor da chave estrangeira com a tabela q vai receber a chave => ID_CARGO INT<br><br>

II)Segunda tabela com o nome da chave primaria ID_CARGO INT <br>
criar a segunda tabela cargo com o nome do relacionamento => CREATE TABLE CARGO <br>
criar chave com auto inclemento com a chave primaria => ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT <br>
criar a descriscão => DESCRIÇÃO VARCHAR(50) <br><br>

III) criação da chave estrangeira => criar uma chave na primeira tabela relacionando com a segunda tabela <br>
ALTER TABLE PESSOA  -> alterar primeira tabela <br>
ADD CONSTRAINT -> regra  <br>
FOREIGN KEY (ID_CARGO) -> chave estrangeira com o id_cargo  REFERENCES CARGO(ID) -> referenciado pelo id da primeira <br><br>

       
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
     
2) Configurar o NODEJS para usar o pacote UI do Laravel
