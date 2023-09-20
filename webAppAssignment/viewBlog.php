<?php
include_once "partials/header.php";

?>
<link type="text/css" rel="stylesheet" href="css/blog.css" />
<?php
include_once "partials/navBar.php";
?>


<div class="main">


    <?php
    $spot_blog = "SELECT * ,DATE_FORMAT(publication_date, '%M %e, %Y') AS formatted_date FROM `article_tbl` ORDER BY article_id DESC LIMIT 1";
    $blog_res = $conn->query($spot_blog);
    $sn = 1;
    if ($blog_res->num_rows > 0) {
        // output data of each row
        while ($blog_row = $blog_res->fetch_assoc()) {
            $date = $blog_row['formatted_date'];

    ?>
            <div class="featured">
                <p class="titleText"><?= $blog_row['title']; ?></p>
                <div class="category">
                    <img src="./images/line.svg" alt="line" />
                    <p class="catText"><?= $blog_row['author_name']; ?></p>
                </div>
                <p class="article"><?= $blog_row['full_text']; ?></p>
                <div class="featuredInfos">
                    <div class="featuredInfo">
                        <img src="./images/eye.svg" alt="eye" />
                        <p class="infoText">12</p>
                    </div>
                    <div class="featuredInfo">
                        <img src="./images/calender.svg" alt="calendar" />
                        <p class="infoText"><?= $date ?></p>
                    </div>
                </div>
            </div>
</div>
<img class="featuredImage" src="./dbImages/<?= $blog_row['article_img']; ?>" alt="best js frameworks" />

<?php
        }
    } else {
        echo "0 results";
    }

?>

<img class="blogSvg" src="./images/blogSvg.svg" alt="blog" />
<img class="blogLogo" src="./images/BlogLogo.svg" alt="logo">

<div class="otherBlogs">


    <div class="blogs">
        <div class="recentBlog">
            <p class="recentTitle"><span class="bolded">Recent </span><span>Blogs</span></p>
        </div>
        <?php

        $spot_blog = "SELECT *,DATE_FORMAT(publication_date, '%M %e, %Y') AS formatted_date FROM article_tbl WHERE article_id < ( SELECT article_id FROM article_tbl ORDER BY article_id DESC LIMIT 1) ORDER BY article_id DESC LIMIT 3";
        $blog_res = $conn->query($spot_blog);
        

        $sn = 1;
        if ($blog_res->num_rows > 0) {
            // output data of each row
            while ($blog_row = $blog_res->fetch_assoc()) {
                $fdate = $blog_row['formatted_date'];


        ?>
                <div class="blog">
                    <img class="blogImg" src="./dbImages/<?= $blog_row['article_img']; ?>" alt="blog photo" />
                    <div class="blogInfo">
                        <p class="blogBody"><?= $blog_row['full_text']; ?></p>
                        <div class="blogInfos">
                            <div class="blogOtherInfo">
                                <img src="./images/darkprofile-fill.svg" alt="author" />
                                <p class="otherInfoText"><?= $blog_row['author_name'] ?></p>
                            </div>
                            <div class="blogOtherInfo">
                                <img src="./images/calender.svg" alt="calendar" />
                                <p class="otherInfoText"><?= $fdate ?></p>
                            </div>
                        </div>
                    </div>
                </div>

        <?php
            }
        } else {
            echo "0 results";
        }

        ?>

    </div>

</div>



</body>

</html>