<?php

if(isset($_POST["submit1"]))
{
header('Location:login.php');

}

?>

<!DOCTYPE html>
<html>    
<head>

    <!-- Place all CSS for header in this file -->
    <link href='css/header.css' rel='stylesheet' type='text/css'>

    <!-- Place all CSS for the rest of the elements in this file -->
    <link href='css/index.css' rel='stylesheet' type='text/css'>

    <!-- Place all CSS for fonts in this file -->
    <link href='css/font.css' rel='stylesheet' type='text/css'>

</head>
    
<body>
    <div id="main-container-div">
        <!-- Header content -->
        <div class="header">
            <div id="logo">
                <p id="myLogo">Infinity&Beyond</p>
                <p id="tag">Have to think BIG to be BIG</p>
            </div>
            <form name="form1" action="" method="post">
            <div id="in_up">
                <input type="submit" name="submit1" value="Sign In" id="in_modal">
                <input type="submit" name="submit1" value="Sign Up"  id="up_modal">


            </div>
            </form>
        </div>
        
        <!-- post button are defined bellow    -->
        <div class="postButtons">
            <button id="all_post" class="post"><p>All Posts</p></button>            
        </div>
    </div>



    <!-- Place all Javascript for header in this file -->
    <script src="js\header.js"></script>
    <!-- Place all Javascript for rest of the elements in this file -->
    <script src="js\indexU.js"></script>

</body>

</html>