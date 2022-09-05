<?php
include("../database/conexaoDB.php");

if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["cep"])  && isset($_POST["endereco"])  && isset($_POST["numero"])  && isset($_POST["bairro"]) && isset($_POST["cidade"])  && isset($_POST["estado"])){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $dados = [$nome, $email, $cep, $endereco, $numero, $bairro, $cidade, $estado];

}

$sql = "INSERT INTO infousuarios (nome,email,cep,endereco,numero,bairro,cidade,estado) VALUES ";
$sql .= "('$nome', '$email', '$cep', '$endereco', '$numero', '$bairro', '$cidade', '$estado')";

$resultado_usuarios = $conn->prepare($sql);
$resultado_usuarios->execute(); 

if($conn->prepare($sql) == TRUE){

}else{

    echo "Erro ao inserir dados";
} 



?>