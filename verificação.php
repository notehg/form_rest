<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="projeto de login inicial de um site">
    <meta name="keywords" content="user,senha and log">
    <meta name="author" content="Felipe S. silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>



<?php

include 'conecxao.php';


$nome =$_POST["n"];
$sobrenome =$_POST["s"];
$idade =$_POST["T"];
$Numero =$_POST["i"];



$sql = "INSERT INTO Registros (Nome,sobrenome,Idade,Numero)
VALUES ('$nome', '$sobrenome', '$idade','$Numero')";

if ($conn->query($sql) === TRUE) {
  echo "Registro criado com exito" ;
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

<div id="nex">

$sql = "SELECT Nome,sobrenome,Idade,Numero FROM Registros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "  nome:    " . $row["Nome"]. 
    "  sobrenome:    " . $row["sobrenome"].
     "  Idade:    " . $row["Idade"]. 
     "  Numero:    " . $row["Numero"]. "<br>";
  }
} else {
  echo "0 resultados tabela vazia";
}

$conn->close();

?>
   <a color="red" href="https://bran-new-sevenths.000webhostapp.com/Registros/index.php">Registrar novamente</a>
    </div>



</body>
</html>