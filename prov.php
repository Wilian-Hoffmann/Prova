<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Calculadora</title>
   <meta charset = "UTF-8">
</head>
<body>
<form action="" method="post" >
      Primeiro Numero: <input name="num1" type="text"><br>
      Segundo numero: <input name="num2" type="text"><br>
   
        <input type="submit" name="numero" value="9">
        <input type="submit" name="numero" value="8">
        <input type="submit" name="numero" value="7"> <br>
        <input type="submit" name="numero" value="6">
        <input type="submit" name="numero" value="5">
        <input type="submit" name="numero" value="4"> <br>
        <input type="submit" name="numero" value="3"> 
        <input type="submit" name="numero" value="2">
        <input type="submit" name="numero" value="1"> <br>
        <input type="submit" name="numero" value="0">
        <input type="submit" name="numero" value="=">
        <input type="submit" name="numero" value="C"><br>
      
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">     
   </form> 
<?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

   if( !empty($op) ) {
      if($op == '+')
         $c = $a + $b;
      else if($op == '-')
         $c = $a - $b;
      else if($op == '*')
         $c = $a*$b;
      else
         $c = $a/$b;

      echo $c;
   }
   
?>       
</body>
</html>