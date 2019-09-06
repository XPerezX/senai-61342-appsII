<?php

$mysqli = new mysqli("localhost", "root","","ToDo");
if($mysqli->connect_errno){
    echo "Falha ao conectar";
}


$res = $mysqli->query("SELECT * FROM tarefa");

if($res && $res->num_rows>0){
    
    
    foreach ($res as $linha => $value) {
        echo "linha ".$linha; 

        echo "<br>";
        foreach($value as $coluna => $value2){
          echo $coluna ." ". $value2;
            echo "<br>";
        }
    }

}

mysqli_close($mysqli);

?>