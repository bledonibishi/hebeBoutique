<?php include 'header.php' ?>

<div id="wrapper">

<!-- Navigation -->

<?php include "navigation.php";   ?>

<div id="page-wrapper">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12">
                <!-- Page Heading -->
                <h1 class="page-header">
                    Welcome to BABA's page
                    <small>Author</small>
                </h1>

            <div class="col-xs-6">

<?php 
createCategory();
?>
                <form action="" method="post">

                    <div class="form-group">
                        <label for="create_cat">Add Category  </label>
                        <input type="text" class="form-control" name="new_cat_title">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" name="create-cat" type="submit">ADD Category</button>
                    </div>
                </form>

<?php
    if(isset($_GET['update'])){
        $cat_update_id = $_GET['update'];
        include "include/update-categories.php";
    }

?>
                
                </form>
            </div>
        

                <div class="col-xs-6">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            
                            <td>ID</td>
                            <td>Name of category</td>
                        </tr>
                    </thead>
                    <tbody>

                    <?php allCategories(); ?>

                    
                    <?php deleteCategories(); ?>

                    </tbody>
                </table>
                </div>
                </div>
                </div>
                               
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
    <?php include "footer.php";