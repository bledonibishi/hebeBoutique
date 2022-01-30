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
                        createBrand();
                        ?>
                        <form action="" method="post">

                            <div class="form-group">
                                <label for="create_cat">Add Brand</label>
                                <input type="text" class="form-control" name="new_brand_title">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" name="create-brand" type="submit">Add Brand</button>
                            </div>
                        </form>

                        <?php
                        if (isset($_GET['update'])) {
                            $cat_update_id = $_GET['update'];
                            include "include/update-brands.php";
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
                                <?php allBrands(); ?>

                                <?php deleteBrands(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
        <?php include "footer.php";
