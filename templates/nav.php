<div class="toplink">
        <a href="./">Home</a>
        <a href="">About</a>
        <a href="project.php">Our ProjectS</a>
        <a href="">Our Blog</a>
        <a href="products.php">Our Products</a>
        <a href="ViewUsers.php">View Users</a>
        <div class="toplink_right">

   <?php
   require_once "includes/dbConnect.php";
   if(isset($_SESSION["consort"])){
    ?>
    <a href="processes/sign_out.php">Sign Out</a>
    <?php
   }else{
?>
            <a href="signup.php">Sign Up</a>
            <a href="signin.php">Sign In</a>

<?php

   }  
?>
        </div>
    </div>