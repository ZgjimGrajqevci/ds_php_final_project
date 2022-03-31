<?php 

include('config.php');

if (isset($_POST['update'])) {

	$id = $_POST['id'];
	$quote = $_POST['quote'];

}
if (!empty($id)) {

	$sql = "UPDATE quotesadh SET quote=:quote where id=$id";

	$updateSql = $conn->prepare($sql);

	$updateSql->bindParam(':quote',$quote);


	$updateSql->execute();

	header("Location:quotes.php");

}
else{
	echo "Id is unfilled";
}


 ?>