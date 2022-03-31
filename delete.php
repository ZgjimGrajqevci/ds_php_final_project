<?php 

include 'config.php';


$id = $_GET['id'];

$sql = "DELETE FROM quotesadh where id=:id";

$getQuote = $conn->prepare($sql);

$getQuote->bindParam(':id',$id);

$getQuote->execute();

header('Location:quotes.php');

 ?>