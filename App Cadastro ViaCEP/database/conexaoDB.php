<?php
 $host = "localhost";
 $user = "root";
 $pass = "";
 $dbname = "cadusuarios";
 $port = 3306;
  
    try{

           $conn = new PDO("mysql:host=$host;port=$port;dbname=" .$dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      
   }catch(PDOException $err){
       echo "Erro:Conexão com ao tentar se conectar ao banco" . $err->getMessage();
   }
   

?>