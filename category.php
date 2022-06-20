<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container">
    <div class="row row-cols-3">

                <?php
                if(isset($_GET['title'])) {
                    $slug = mysqli_real_escape_string($con, $_GET['title']);
                    $category = "SELECT id,slug FROM categories WHERE slug='$slug' LIMIT 1";
                    $category_run = mysqli_query($con, $category);
                    if(mysqli_num_rows($category_run)>0) {
                        $categoryItem = mysqli_fetch_array($category_run);
                        $category_id = $categoryItem['id'];
                        $posts = "SELECT category_id,name,slug,meta_title,created_at FROM posts WHERE category_id='$category_id' ";
                        $posts_run = mysqli_query($con, $posts);
                        if(mysqli_num_rows($posts_run)>0) {
                            foreach($posts_run as $postItems) {
                                ?>
                                <a href="post.php?title=<?=$postItems['slug'];?>" class="text-decoration-none">
                                <div class="card mt-3 mb-3">
                                    <img class="card-img-top" style="height: 25vh;" src="uploads/posts/<?= $postItems['meta_title'] ?>" alt="<?=$postItems['name'];?>">
                                    <div class="card-body">
                                    <h5 class="card-title"><?=$postItems['name'];?></h5>
                                    </div>
                                </div>
                                </a>
                                    <!-- <a href="post.php?title=<?=$postItems['slug'];?>" class="text-decoration-none">
                                        <div class="card card-body shadow-sm mb-4">
                                            <h5 style="text-align: center;"><?=$postItems['name'];?></h5>
                                            <div class="d-flex justify-content-center">
                                                <img src="uploads/posts/<?= $postItems['meta_title'] ?>" class="w-100" alt="<?=$postItems['name'];?>">
                                            </div>
                                        </div>
                                    </a> -->
                                <?php
                            }
                        } else {
                            ?>
                                <h4>No Post Available</h4>
                            <?php
                        }
                    } else {
                        ?>
                            <h4>No Such Category Found</h4>
                        <?php
                    }
                } else {
                    ?>
                        <h4>No Such URL Found</h4>
                    <?php
                }
                ?>

                

    </div>
</div>

<?php
include('includes/footer.php');
?>