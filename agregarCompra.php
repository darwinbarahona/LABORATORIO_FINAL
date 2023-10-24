<?php

try{
$conn= new PDO('mysql:host=localhost;dbname=aplicacioncompras','root','');

}catch(PDOException $e){
    echo "Error de conexion:";
}

if(isset($_POST['id'])){

    $id=$_POST['id'];
    $realizado=(isset($_POST['realizado']))?1:0;

    $sql="UPDATE compras SET realizado=? WHERE id=?";
    $sentencia=$conn->prepare($sql);
    $sentencia->execute([$realizado,$id]);
}

//Hacer insert de las compras a la base de datos
if(isset($_POST['agregar_compra'])){

    $compra=($_POST['compra']);
    $sql='INSERT INTO compras (compra) VALUE(?)';
    $sentencia=$conn->prepare($sql);
    $sentencia->execute([$compra]);
}

if(isset($_GET['id'])){

    $id=$_GET['id'];
    $sql="DELETE FROM compras WHERE id=?";
    $sentencia=$conn->prepare($sql);
    $sentencia->execute([$id]);
}

//Read o leer las compras ingresadas a la base de datos
$sql="SELECT * FROM compras";
$registros=$conn->query($sql);


?>