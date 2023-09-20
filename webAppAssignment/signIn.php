<?php
include_once "partials/header.php";

?>
 <link type="text/css" rel="stylesheet" href="css/signIn.css" />
<?php
include_once "partials/navBar.php";
?>

    <div class="content">
        <div class="signInImg">
            <img class="signInSvg" src="./images/signIn.svg" alt="sign in svg">
        </div>
        <div class="formDiv">
            <p class="h1 formText">Welcome Back!</p>
            <p class="h5 formText">Welcome back, please enter your details.</p>
            <form action="<?= ROOT_URL ?>processes/signInProcess.php" method="POST">
                <input type="email" id="email" name="email" placeholder="Email" />
                <input type="password" id="password" name="pass" placeholder="Password" />
                <button id="btn" name="signin">SIGN IN</button>
            </form>
            <p class="h5 formText">Don't have an account? <span><a href="<?= ROOT_URL ?>signUp.php">Sign Up</a></span></p>
        </div>
    </div>


</body>

</html>