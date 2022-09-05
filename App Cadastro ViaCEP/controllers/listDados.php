<?php
include("../database/conexaoDB.php");

$query_usuarios = "SELECT nome,email,cep,endereco,numero,bairro,cidade,estado FROM infousuarios";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->execute();

$dados = "";
while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
    extract($row_usuario);
    $dados .="<tr>
     
            <td>$nome</td>;
            <td>$email</td>;
            <td>$cep</td>;
            <td>$endereco</td>;
            <td>$numero</td>;
            <td>$bairro</td>;
            <td>$cidade</td>;
            <td>$estado</td>;
          </tr>";
echo $dados;
}

?>