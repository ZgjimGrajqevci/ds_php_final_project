<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Who is Sadhguru | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x=icon" href="assets/images/logo.jpg"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/logins.css">
    <link rel="stylesheet" type="text/css" href="fff/css/all.css">
</head>
<body>

<div class="h-100">
        <div class="user_card">
            <div id="title_signup">
                <div id="logo_place">
                    <img src="assets/images/logo.png">
                </div>
                <div id="title">
                    <h1 id="content_title">Login</h1> 
                    <p class="font-weight-bolder">Login to your account</p>
                </div>
            </div>
            <div>
                <form action="loginLogic.php" method="post" id="form1">                  
                    <div class="row">                            
                        <div class="wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
                            <input id="inputs" type="email" name="email" required >
                            <label for="email">
                                <span>Email</span>
                            </label>
                        </div>
                         <div class="wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4 mt-4">
                            <input type="password" name="password" required >
                            <label for="password">
                                <span>Password</span>
                            </label>
                        </div>
                        <div id="form_footer">
                            <div>
                                <button type="submit" name="login" class="mb-3">Login</button>
                            </div>
                            <div>
                                <hr id="hr1">
                                <div id="alr_acc">
                                    <p id="acc_txt">Don't have account?<a id="signa" href="signup.php" class="ml-2 font-weight-bolder">Sign Up</a></p>                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>           
        </div>
    </div>

<script src="assets/js/tweenmax.js"></script>
<script src="assets/js/twinelinemax.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>




