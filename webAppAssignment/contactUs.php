<?php
include_once "partials/header.php";

?>
 <link type="text/css" rel="stylesheet" href="css/contact.css" />
<?php
include_once "partials/navBar.php";
?>

    <div class="container">
        <p class="h1">Contact Us</p>
        <form>
            <input type="text" id="name" name="name" placeholder="Name" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <textarea id="message" name="message" placeholder="Message" required></textarea>
            <input type="submit" value="Send">
        </form>
    </div>


</body>

</html>