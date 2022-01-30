<form action="" method="post"">
    <div class="form-group">
        <label for="update">Update Brands</label>
                <?php 
                    if(isset($_GET['update'])){
                        $brand_update_id = $_GET['update'];
                        $query = "SELECT * FROM brands WHERE brand_id = $brand_update_id";
                        $query_select_brand = mysqli_query($conn,$query);

                        while($row = mysqli_fetch_assoc($query_select_brand)){
                            $brand_id = $row['brand_id'];
                            $brand_name = $row['brand_name'];
                        }
                        ?>
    <input value="<?php if(isset($brand_name)){echo $brand_name;} ?>" type="text" class="form-control" name="new_brand_title">

                     <?php    }

                ?>
    <?php
        if(isset($_POST['update'])){
        $the_brand_title = $_POST['new_brand_title'];
          $query = "UPDATE category SET cat_title = '{$the_brand_title}' WHERE cat_id = $brand_update_id";
          $query_update_category = mysqli_query($conn,$query);
        }
    ?>
    </div>
    <div>
        <button class="btn btn-primary" name='update'>Update</button>
    </div>
   