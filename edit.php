<?php 
	
	include('header.php'); 

	include_once('config.php');

	$id = $_GET['id'];
	$sql = "SELECT * from quotesadh where id=$id";
	$getQuote = $conn->prepare($sql);
	$getQuote->execute();
	$quote = $getQuote->fetch();

 ?>

	<div class="quotes-page">
    <main>
        <div class="container">
            <div id="intro">
                <div id="titleside">
                    <h1 id="title">Edit Quote</h1>
                </div>
            </div>
            <div id="quote-bar">
                <a href="quotes.php"><i class="fas fa-quote-left"></i><br>quotes</a>
            </div>  
            <div id="add-quote-form">
                <form role="form" action="editUpdate.php" method="post" enctype="multipart/form-data" id="quote-form-2">
                	<div class="row">
	                	<div class="form-group d-none">
			                <input value="<?= $quote['id']; ?>" type="text" name="id">
			    		</div>
	                    <div>              
	                        <textarea type="text" name="quote" id="quote" class="col-sm-12"><?= $quote['quote']; ?></textarea> 
	                    </div> 
	                    <div>
	                        <button type="submit" name="update" id="add" onclick="myFunction()" class="btn btn-outline-dark btn-lg btn-block col-sm-12">Update</button>
	                    </div> 
                    </div>               
                </form>
            </div>                       
        </div>        
    </main>
</div>

	<script src="assets/js/tweenmax.js"></script>
    <script src="assets/js/twinelinemax.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
<script>
function myFunction() {
  document.getElementById("quote").maxLength = "220";
} 

</script>
</body>
</html>
