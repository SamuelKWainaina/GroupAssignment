<?php
include_once "partials/header.php";

?>
 <link type="text/css" rel="stylesheet" href="css/signUp.css" />
<?php
include_once "partials/navBar.php";
?>

    <div class="content">
        <div class="signUpDiv">
            <p class="h5 formText">JOIN US</p>
            <p class="h1 formText">Create an Account <span>.</span></p>
            <p class="h5 formText">Already have an account? <span><a href="<?= ROOT_URL ?>signIn.php">Log In</a></span></p>
            <form action="<?= ROOT_URL ?>processes/signUpProcess.php" method="POST">
                <input type="text" id="Fname" name="fname" placeholder="First name" />
                <input type="text" id="Lname" name="lname" placeholder="Last name" />
                <input type="text" id="username" name="username" placeholder="Username" />
                <input type="email" id="email" name="email" placeholder="Email" />
                <input type="password" id="password" name="pass" placeholder="Password" />
                <input type="password" id="confPassword" name="confpass" placeholder="Confirm Password" />
                <button name="signup" id="btn">SIGN UP</button>
            </form>
        </div>
        <div class="signUpImg">
            <img class="signUpSvg" src="./images/signUp.svg" alt="sign up svg">
        </div>
    </div>


</body>

</html>