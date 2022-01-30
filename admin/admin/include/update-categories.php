
 <form action="" method="post" class="mb-5">
    <div class="form-group">
        <label for="update">Update Category</label>
                <?php 
                    if(isset($_GET['update'])){
                        $cat_update_id = $_GET['update'];
                        $query = "SELECT * FROM category WHERE cat_id = $cat_update_id";
                        $query_select_cat = mysqli_query($conn,$query);

                        while($row = mysqli_fetch_assoc($query_select_cat)){
                            $cat_id = $row['cat_id'];
                            $cat_title = $row['cat_title'];
                        }
                        ?>
    <input value="<?php if(isset($cat_title)){echo $cat_title;} ?>" type="text" class="form-control" name="new_cat_title">

                     <?php    }

                ?>
    <?php
        if(isset($_POST['update'])){
        $the_cat_title = $_POST['new_cat_title'];
          $query = "UPDATE category SET cat_title = '{$the_cat_title}' WHERE cat_id = $cat_update_id";
          $query_update_category = mysqli_query($conn,$query);
        }
    ?>
    </div>
    <div>
        <button class="btn btn-primary" name='update'>Update</button>
    </div>
   


                    
                                    
