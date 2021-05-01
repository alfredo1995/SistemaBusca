<!-- $  criar as constantes do bando de dados --> 
<!-- $conn criar a conexao com o bando de dados --> 
<!-- $criar variavel  q receber os dados do formulario rerente ao name="pesquisar" e ao metodo="POST" de envio [name] --> 
<?php

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$dbname = "consulta";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


$pesquisar = $_POST['pesquisar'];
echo $pesquisar;

$result_pessoa = "SELECT * FROM pessoa WHERE nome LIKE '%$pesquisar%' LIMIT 5";

$resultado_pessoa = mysqli_query($conn, $result_pessoa);

while ($rows_pessoa = mysqli_fetch_array($resultado_pessoa)) {
    echo $rows_pessoa['NOME'];
};

?>




