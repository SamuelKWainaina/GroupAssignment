<?php
include_once "partials/header.php";


?>
<link type="text/css" rel="stylesheet" href="css/signUp.css" />
<?php
include_once "partials/navBar.php";



if(isset($_POST["addBlog"])){
    if(!empty($_FILES['postImage']['name'])){
        $imageName = time() . '_' . $_FILES['postImage']['name'];
        $destination = "dbImages/" . $imageName;

        $res = move_uploaded_file($_FILES['postImage']['tmp_name'], $destination);
        if($res){
            $_POST['postImage'] = $imageName;
        }else{
            echo "Error uploading image";
        }
    }else{
        echo "Image required";
    }
    $title = $_POST['title'];
    $blogContent = $_POST['blogContent'];
    // $isFinal = $_POST['isFinal'];
    $isFinal = 1;
    $imageUrl = $_POST['postImage'];
    $authorname = $_SESSION['currUserName'];

    $insert_blog = "INSERT INTO article_tbl (author_name, title, full_text, is_final, article_img) VALUES ('$authorname', '$title', '$blogContent', '$isFinal', '$imageUrl')";
    
    if ($conn->query($insert_blog) === TRUE) {
      header("Location: viewBlog.php");
      exit();
    } else {
      echo "Error: " . $insert_blog . "<br>" . $conn->error;
    }
}
?>

<div class="content">
    <div class="signUpDiv">
        <p class="h1 formText">Create a Post<span>.</span></p>

        <form action="<?= ROOT_URL ?>postBlog.php" method="POST" enctype="multipart/form-data">
            <input type="text" id="title" name="title" placeholder="Title" />
            <textarea id="blogContent" name="blogContent" placeholder="Content..." rows="10" cols="70"></textarea>
            <input name="postImage" type="file" accept="image/*"/>
            <div class="isFinalContainer"><input type="checkbox" id="isFinal" name="isFinal" value="">
                <label for="isFinal">Final</label><br>
            </div>
            <button name="addBlog" id="btn">ADD BLOG</button>
        </form>
    </div>
    <div class="signUpImg">
        <img class="signUpSvg" src="./images/blogSvg.svg" alt="sign up svg">
    </div>
</div>


</body>

</html>