<?php 

$title = "Quotes" ;

include('header.php'); 

include_once('config.php');

    $sql = 'SELECT * FROM quotesadh';
    $getQuote = $conn->prepare($sql);
    $getQuote->execute();
    $quote = $getQuote->fetchAll();

 ?>
<div class="quotes-page">
    <main>
        <div class="container">
            <div id="intro">
                <div id="titleside">
                    <h1 id="title">Add Quotes</h1>
                </div>
            </div>
            <div id="quote-bar">
                <a href="quotes.php"><i class="fas fa-quote-left"></i><br>quotes</a>
            </div>  
            <div id="add-quote-form">
                <form action="addQuotesLogic.php" method="post" enctype="multipart/form-data" id="quote-form-2">
                    <div class="row">
                        <!-- <input type="file" name="quote_img" id="image"> -->
                        <div>              
                            <textarea  type="text" name="quote" id="quote" placeholder="Add your quote here" class="col-sm-12"></textarea> 
                        </div> 
                        <br>
                        <div>
                            <button type="submit" name="add" id="add" onclick="myFunction()" class="btn btn-outline-dark btn-lg btn-block col-sm-12">Add</button>
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
