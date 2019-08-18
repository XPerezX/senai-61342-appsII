<?php
print_r($_POST);
echo "<h1>Hello World</h1>";
$nome = "joão";
$idade =13
?>








<form method="post" action="calculadora.php">
    <input name ="n1" type ="number" placeholder="Digite um numero"></input>
    <input name ="operator" type ="text" placeholder="operador"></input>
    <input   name="n2" type="number" placeholder="Digite um numero"></input> 
    <input type="submit" value="enviar"></input>  <?php
  if(isset($_POST['n1']) && isset($_POST['operator'] ) && isset($_POST['n2']) ){
    $op = $_POST['operator'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $cal = $n1 + $n2;
    if( $op == "+") {
        $cal = $n1 + $n2;
       echo "<div class=\"isso\">" . $cal ."</div>";} 
    else if ($op == "*"){
        $cal = $n1 * $n2;
        echo "<div class=\"isso\">" . $cal ."</div>";} 
    else if ($op == "-"){
        $cal = $n1 - $n2;
        echo "<div class=\"isso\">" . $cal ."</div>";} 
    else if ($op == "/"){
        $cal = $n1 / $n2;
        echo "<div class=\"isso\">" . $cal ."</div>";} 
        
    }else{echo "Não foi preenchido os campos ";
    }
    
?>
    </form>

    
   
<style type="text/css">   
body{
  display:flex;

}
.isso{
border:2px solid red;
margin: 0 ;
max-width: 30px;
padding: 25px; 

}


</style>