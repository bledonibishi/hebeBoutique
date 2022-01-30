<?php include 'header.php' ?>

<div id="wrapper">

<!-- Navigation -->

<?php include "navigation.php";   ?>

<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="page-header">
                    Welcome to BABA's page
                    <small>Author</small>
                </h1>

                <?php 
                    if(isset($_GET['source'])){
                        $source =$_GET['source'];
                    }else{
                        $source ="";
                    }

                    switch($source){
                        case 'edit_post';
                        include 'include/edit_post.php';
                        break;
                        case 'add_post';
                        include 'add_post.php';
                        break;
                        default:
                        include 'include/view_all_posts.php';
                        break;
                    }
                ?>

                               
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
    <?php include "footer.php";