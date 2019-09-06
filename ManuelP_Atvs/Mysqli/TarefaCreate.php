<?php

$mysqli = new mysqli("localhost", "root","","ToDo");
if($mysqli->connect_errno){
    echo "Falha ao conectar";
}
print_r($_POST);
$insert_title = $_POST['titulo'];
$insert_data = $_POST['data'];
$insert_descri = $_POST['descricao'];
$insert_status = $_POST['status'];

$insert =$mysqli->prepare("INSERT INTO tarefa (titulo, data , descricao, status) VALUES (?, ?, ?, ?)");
$insert-> bind_param("sssi", $insert_title, $insert_data, $insert_descri, $insert_status);
$insert->execute();

mysqli_close($mysqli);
?>