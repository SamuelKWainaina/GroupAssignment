<?php
    require_once "../config/dbConn.php";

if(isset($_POST["signup"])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $fullname = ucwords(strtolower($fname . " " . $lname));
    $email = strtolower($_POST["email"]);
    $pass = $_POST["pass"];
    $ConfPass = $_POST["confpass"];

    if(!strcmp($pass, $ConfPass) == 0){
        die("Error: passwords do not match");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Error: Invalid email");
    } 

    $hash_pass = password_hash($ConfPass, PASSWORD_DEFAULT);

    $insert_user = "INSERT INTO author_tbl (full_name, email, username, password) VALUES ('$fullname', '$email', '$username', '$hash_pass')";
    
    if ($conn->query($insert_user) === TRUE) {
      header("Location: ../signIn.php");
      exit();
    } else {
      echo "Error: " . $insert_user . "<br>" . $conn->error;
    }
}
?>