<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-13">
                <?php
                    if(isset($_GET['title'])) {
                        $slug = mysqli_real_escape_string($con, $_GET['title']);
                        $posts = "SELECT * FROM posts WHERE slug='$slug' ";
                        $posts_run = mysqli_query($con, $posts);
                        if(mysqli_num_rows($posts_run)>0) {
                            foreach($posts_run as $postItems) {
                                ?>
                                        <div class="card shadow-sm mb-4">
                                            <div class="card-header">
                                                <h5 style="text-align: center;"><?=$postItems['name'];?></h5>
                                            </div>
                                            
                                            <div class="card-body">
                                                <!-- <label class="text-dark me-2">Posted On: <?= date('d-M-Y', strtotime($postItems['created_at'])); ?></label> -->
                                                <!-- <hr/> -->
                                                <div class="d-flex justify-content-center" style="height: 50vh; width: auto;">
                                                    <img src="uploads/posts/<?= $postItems['meta_title'] ?>" alt="<?=$postItems['name'];?>">
                                                    
                                                </div>
                                                <div style="margin-left: 45vh;">
                                                    <?=$postItems['description'];?>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                            }
                        } else {
                            ?>
                                <h4>No Such Post Found</h4>
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
    </div>
</div>

<?php
include('includes/footer.php');
?>