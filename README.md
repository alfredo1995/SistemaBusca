Sistema de Busca em PHP <br>

Instalações Necessárias: 
    
    --->  PHP 8 + XAMPP + MYSQL WORKBENCH

Conhecimentos Necessário: 

    --->  HTML5 + PHP +  SQL + POO  


1) criar duas tabelas 

criar primeira tabela pessoa => CREATE TABELE PESSOA
criar chave com auto inclemente com chave primaria=> NOT NULL PRIMARY KEY AUTO_INCREMENT 
criar relacionamento. guardar o valor da chave estrangeira com a tabela q vai receber a chave => ID_CARGO INT

II)Segunda tabela com o nome da chave primaria ID_CARGO INT
criar a segunda tabela cargo com o nome do relacionamento => CREATE TABLE CARGO
criar chave com auto inclemento com a chave primaria => ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT
criar a descriscão => DESCRIÇÃO VARCHAR(50)

III) criação da chave estrangeira => criar uma chave na primeira tabela relacionando com a segunda tabela
ALTER TABLE PESSOA  -> alterar primeira tabela
ADD CONSTRAINT -> regra 
FOREIGN KEY (ID_CARGO) -> chave estrangeira com o id_cargo  REFERENCES CARGO(ID) -> referenciado pelo id da primei

       
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
