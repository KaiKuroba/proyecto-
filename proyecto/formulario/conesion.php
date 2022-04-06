<?php
  $usuario = "root";
  $pass = "";
  $dbname = "pedidos";
  $dsn = "mysql:host=localhost;dbname=$dbname";

try {
    $conn = new PDO($dsn, $usuario, $pass);
    echo "Conexión funcionando!!";
}catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}

    //recuperar las variables
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    //hacemos la sentencia de sql
 $sql = "INSERT INTO datos (nombre,email,telefono,direccion) VALUES (:nombre,:email,:telefono,:direccion)";
 $statement = $conn->prepare($sql);

$statement->bindParam(":nombre",$nombre);
$statement->bindParam(":email",$email);
$statement->bindParam(":telefono",$telefono);
$statement->bindParam(":direccion",$direccion);

$statement->execute();


    
  
?>