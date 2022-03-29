<?php
include_once "conexao.php"    ;
try {
    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
  
    $delete = $conectar->prepare('delete from login where id = :id');
    $delete->bindParam(':id',$id);
    $delete->execute();
    header('location: index.php');
//code...
} catch (PDOException $e) {
    //throw $th;
    echo "erro".$e->getMessage();
}    
?>