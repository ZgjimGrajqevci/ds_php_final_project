<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                    <h1 id="content_title">Sign Up</h1>
                    <p class="font-weight-bolder">Sing Up to create your account</p>
                </div>
            </div>
            <div>
                <form action="register.php" method="post" id="form2" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row" id="first_inputs">
<!--                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
<!--                                    <div id="upload_img">-->
<!--                                        <input type="file" name="image" id="file"onchange="readURL(this);" accept="image/*" class="d-none">-->
<!--                                        <img id="files" src="assets/images/linkimg.gif" onclick="document.getElementById('file').click(); return false;" >-->
<!--                                        <br>-->
<!--                                        <span id="text">Upload an profile <br>image(optional)</span>-->
<!--                                    </div>-->
<!--                                </div> -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
                                    <div class="wrapper mb-1">
                                        <input type="text" name="name" required >
                                        <label for="name">
                                            <span>Name</span>
                                        </label>
                                    </div>
                                    <div class="wrapper" >
                                        <input type="text" name="surname" required >
                                        <label for="surname">
                                            <span>Surname</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
                            <div class="wrapper">
                                <input id="inputs" type="email" name="email" required >
                                <label for="email">
                                    <span>Email</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row" id="password_area">
                                <div class="wrapper col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input id="userPassword" type="password" name="password" onChange="onChange()" required >
                                    <label for="password">
                                        <span>Password</span>
                                    </label>
                                </div>
                                <div class="wrapper col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                    <input id="userConfirm_password" type="password" name="confirm_password" onChange="onChange()" required >
                                    <label for="confirm_password">
                                        <span>Confirm Password</span>
                                    </label>
                                </div>
                            </div>
                            <div id="password_verification_area">

                            </div>
                        </div>
                        <div id="form_footer">
                            <div>
                                <button type="submit" name="submit" class="mb-3">Sing in</button>
                            </div>
                            <div>
                                <hr id="hr2">
                                <div id="alr_acc">
                                    <p>Already have account?<a id="signa" href="login.php" class="ml-2 font-weight-bolder">Login</a></p>
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
    <script>
       function readURL(input)
        {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e){
                    $('#files')
                    .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
       function onChange() {
           const password = document.querySelector('input[name=password]');
           const confirm = document.querySelector('input[name=confirm_password]');
           if (confirm.value === password.value) {
               confirm.setCustomValidity('');
           } else {
               confirm.setCustomValidity('Passwords do not match');
           }
       }
    </script>
</body>
</html>

