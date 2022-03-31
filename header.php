<?php 

include_once('config.php');

	$sql = 'SELECT * FROM loginsadh';
	$getSadh = $conn->prepare($sql);
	$getSadh->execute();
	$sadh = $getSadh->fetchAll();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		<?php 
		if (empty($title)){
			echo "Who is Sadhguru";
		}
		else{			
			echo "Who is Sadhguru | $title";
		}
			?>	
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x=icon" href="assets/images/logo.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fff/css/all.css">
    <link rel="stylesheet" href="assets/css/headerstyle.css">
    <link rel="stylesheet" href="assets/css/mainstyle.css">
    <link rel="stylesheet" href="assets/css/yogastyle.css">
    <link rel="stylesheet" href="assets/css/quotestyle.css">
    <link rel="stylesheet" href="assets/css/morestyle.css">
</head>

<body>
	<?php 
		if(!empty($_SESSION['email'])){?>	
		<header>
			<div id="topnavbar">
		        <nav id="topnav" class="container">            
		            <ul class="nav justify-content-end">		            		
		            	<li class="nav-item">
		                    <a class="nav-link"><?= $_SESSION['fullname']; ?></a>
		                </li>	                
		               <!--  <li class="nav-item">
		                    <a id="i" class="nav-link" href=""><img src="loginLogic.php?id=<?= $_SESSION['image']; ?>" /></a>
		                </li> -->
		                <li class="nav-item">
		                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt" id="logout_btn"></i></a>
		                </li>	                
		            </ul>
		        </nav>
		    </div>
		    <div class="container">
		         <nav id="navi" class="navbar navbar-expand-md">     
		            <a href="index.php" class="navbar-brand"><img id="logo" src="assets/images/logo.png" height="150px" width="80px"></a>
		            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target" id="navbtn">
		                 <span class="navbar-toggler-icon fas fa-bars"></span>
		            </button>
		            <div class="collapse navbar-collapse" id="collapse_target">                 
		                <ul class="navbar-nav ml-auto">
		                    <li class="nav-item">
		                         <a class="nav-link" href="index.php">Home</a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link" href="yoga.php">Yoga&Meditation</a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link" href="quotes.php">Quotes</a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link" href="more.php">More..</a>
		                    </li>
		                    <div id="sings">                   
			                    <li class="nav-item">
				                    <a class="nav-link"><?= $_SESSION['fullname']; ?></a>
				                </li>
								<li class="nav-item">
				                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt" id="logout_btn"></i></a>
				                </li>
		                    </div>	 
		                </ul>
		            </div>
		        </nav>
		   	</div>
	    </header>
	<?php } 
	else{ ?>
		<header>
			<div id="topnavbar">
		        <nav id="topnav" class="container">            
		            <ul class="nav justify-content-end">
		            	<li class="nav-item">
		                    <a class="nav-link" href="login.php">Login</a>
		                </li>
						<li class = "disabled">
							<a id="l" class="nav-link" href="#">|</a>
						</li>
		                <li class="nav-item">
		                    <a class="nav-link" href="signup.php">Sign Up</a>
		                </li>
		                <li class="nav-item">
		                    <a id="i"class="nav-link" href=""><i class="fas fa-user-circle"></i></a>
		                </li>	                
		            </ul>
		        </nav>
		    </div>
		    <div class="container">
		         <nav id="navi" class="navbar navbar-expand-md">     
		            <a href="index.php" class="navbar-brand"><img id="logo" src="assets/images/logo.png" height="150px" width="80px"></a>
		            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target" id="navbtn">
		                 <span class="navbar-toggler-icon fas fa-bars"></span>
		            </button>
		            <div class="collapse navbar-collapse" id="collapse_target">                 
		                <ul class="navbar-nav ml-auto">
		                    <li class="nav-item">
		                         <a class="nav-link" href="index.php">Home</a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link" href="yoga.php">Yoga&Meditation</a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link" href="quotes.php">Quotes</a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link" href="more.php">More..</a>
		                    </li>
		                    <div id="sings">                   
			                    <li class="nav-item">
			                    	<a class="nav-link" href="login.php">Login</a>
			                    </li>
			                    <li class="nav-item">
			                    	<a class="nav-link" href="singup.php">Sing Up</a>
			                    </li>
		                    </div>	 
		                </ul>
		            </div>
		        </nav>
		   	</div>
	    </header>
	<?php }	?>
	