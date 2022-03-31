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
                        <h1 id="title">Quotes</h1>
                    </div>
                </div> 
                <div id="add-bar">                              
                    <a href="addquotes.php" id="qba"><i class="fas fa-plus"></i></a>             
                </div>                                 
                <div class="row" id="content">
                    <?php foreach ($quote as $quo) { ?>
                        <div class=" col-lg-4 col-md-6" id="card-quote">                      
                            <div class="mx-2 my-1" id="card">  
                            <?php 
                                    // echo '  
                                    //      <tr>  
                                    //           <td>  
                                    //                <img src="data:image/jpeg;base64,'.base64_encode($quo['quote_img'] ).'" height="200" width="200" class="img-thumnail" />  
                                    //           </td>  
                                    //      </tr>  
                                    // ';                                    
                            ?>   
                                <div class="card-body">                  
                                    <p id="quote-txt"><?= $quo['quote']?></p>
                                    <div id="crud-btn">
                                        <a href="edit.php?id=<?= $quo[0]; ?>"><i class="far fa-edit"></i></a>                       
                                        <a href="delete.php?id=<?= $quo[0]; ?>"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    <?php  } ?>
                </div>                                       
            </div>              
        </main>
        <footer>
            <div class="container">
                <div id="foot" class="row">
                    <div id="other" class=" col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <h4>Other stuff</h4>
                        <ul>
                            <li><a href="https://isha.sadhguru.org/global/en/blog">Blog</a></li>
                            <li><a href="https://www.youtube.com/user/soundsofisha">Music</a></li>
                            <li><a href="https://www.ishashoppe.com/downloads/?_ga=2.223091346.865314755.1584730550-1952031095.1576016940">Isha Downloads</a></li>
                            <li><a href="https://isha.sadhguru.org/global/en/news">Media & Press Release</a></li>
                            <li><a href="https://isha.sadhguru.org/yoga/">Yoga</a></li>
                        </ul>
                    </div>
                    <div id="contact" class=" col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <h4>Contact Us</h4>         
                        <p>grajqevcizgjim03@gmail.com</p>
                        <h4>More info</h4>
                        <a href="https://isha.sadhguru.org/global/en">IshaFoundation.org</a>
                        <img src="">            
                    </div>
                    <div id="apps" class=" col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <h4>Download Isha's App</h4>
                        <div>
                            <img src="assets/images/ishaapp.png">
                        </div>
                        <div id="store">
                            <a href="https://play.google.com/store/apps/details?id=com.ishafoundation.app&hl=en">
                                <img src="assets/images/apple.png">
                            </a>
                        </div>
                        <div id="store">
                            <a href="https://play.google.com/store/apps/details?id=com.ishafoundation.app&hl=en">
                                <img src="assets/images/google.png">
                            </a>
                        </div>
                    </div>
                    <div id="socialm" class=" col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <h4>Find Sadhguru in Social <br>Media</h4>
                        <div class="overlay">
                            <a href="https://www.facebook.com/sadhguru/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/sadhguruJV"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/sadhguruJV/?ppe=1"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="overlay">
                            <a href="https://www.youtube.com/user/sadhguru"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/sadhguru/?hl=en"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container" id="feet">
                    <p>Motivation and idea came form <a href="https://isha.sadhguru.org/global/en">ishafoundation.org</a></p>
                </div>
            </div>            
        </footer>    
    </div>



    <script src="assets/js/tweenmax.js"></script>
    <script src="assets/js/twinelinemax.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/quotesscript.js"></script>

</body>
</html>
