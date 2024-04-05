<?php include("templates/header.php"); ?>
<body>
<?php include("templates/nav.php"); ?>
<div class="header">
    <h1>Header</h1>
</div>
<div class="row">
    <div class="content">
        <h3>Sign In</h3>
<form action="processes/sign_in.php" method="post">


    <label for="email_address">Email Address: </label><br>
    <input type="email" id="email_address" name="email_address" placeholder="Email Address" /><br>
    
    <label for="password">Password: </label><br>
    <input type="password" id="password" name="password" placeholder="Password" /><br>
  
    <br>
    <a href="forgot_pass.php">Forgot Password</a>
    <br>
    <input type="submit" name="" value="Sign In" />
    <br>

</form>
    </div>
    <div class="side_bar">
        <h3>Sign In</h3>
        
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
</div>
<?php include("templates/footer.php"); ?>