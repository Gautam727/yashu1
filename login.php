<!DOCTYPE html>
<html>

<head>
    
    <link rel="stylesheet" href="login.css">

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Asbab - eCommerce HTML5 Templatee</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>

<?php 

include("header.php");

?>

    <div class="background">
       

        <div class="complete-box">

           
            <div class="left-box">

                <form id="login" class="input-grp" method="post" action="Register.php">

                    <input type="text" class="input-field" placeholder="  Gmail ID" name="gmail_ID" required>
                    <input type="text" class="input-field" placeholder=" password" name="PASS" required> <br><br>
<br><br>
                    <button type="submit" name="submit" class="sub-btn"><b>log In</b></button><br><br>
                    <div class="foot">
                    
                        <p1>Not a member,<a href="signin.php">signin</a></p1>
                    </div>
                </form>

            </div>

            <div class="right-box">
                <br>

                <h1 style="color: white;">Login</h1>
    
                </div>


        </div>
    </div>

</body>

</html>