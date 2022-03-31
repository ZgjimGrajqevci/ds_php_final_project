<?php 

include_once('config.php');

 var_dump($_FILES);
if (isset($_POST['add'])) {

	// $quote_img = addslashes(file_get_contents($_FILES["quote_img"]["tmp_name"]));	 
	$quote = $_POST['quote'];

	if ( empty($quote)) {
		echo "please fill all the fields";
	}
	else{
		$sql = "INSERT INTO quotesadh(quote) VALUES (:quote)";

		$insertSql = $conn->prepare($sql);

        // $insertSql->bindParam(':quote_img', $quote_img);
        $insertSql->bindParam(':quote', $quote);

        $insertSql->execute();

        header("Location:quotes.php");
	}
}
 ?>
