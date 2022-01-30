
    <?php

    if(isset($_POST['submit'])){ 
            $post_category_id = $_POST['post_category_id'];
            $post_title = $_POST['post_title'];
            $post_price = $_POST['post_price'];
            $post_size = $_POST['post_size'];
            $post_color = $_POST['post_color'];
            $imageCount = count($_FILES['post_image']['name']);
            for($i=0;$i<$imageCount;$i++){
                $post_image = $_FILES['post_image']['name'][$i];
                $post_image_temp = $_FILES['post_image']['tmp_name'][$i];
            };
           

            $post_content = $_POST['post_content'];
            $post_date = date('d-m-y');
            $post_stock = $_POST['post_stock'];
            $post_brand_id = $_POST['post_brand'];

            move_uploaded_file($post_image_temp,"../../images/$post_image");
            // $query = "INSERT INTO `posts`(`post_category`, `post_title`, `post_price`, `post_size`, `post_color`, `post_image_hebe`, `post_content`, `post_date`, `post_stock`, `post_brand`) ";
            // $query .=" VALUES(".mysql_real_escape_string($post_category_id).",'".mysql_real_escape_string($post_title)."','".mysql_real_escape_string($post_price)."','".mysql_real_escape_string($post_size)."','".mysql_real_escape_string($post_color)."','".mysql_real_escape_string($post_image)."','".mysql_real_escape_string($post_content)."',now(),".mysql_real_escape_string($post_stock).",".mysql_real_escape_string($post_brand).")";
    
            $query ="INSERT INTO posts(post_category, post_title, post_price,post_size, post_color , post_image_hebe, post_content,post_date, post_stock,post_brand) ";
            $query .=" VALUES ({$post_category_id},'{$post_title}','{$post_price}','{$post_size}','{$post_color}' ,'{$post_image}','{$post_content}' , now() ,{$post_stock}, $post_brand_id)";
            $queryInsertPost = mysqli_query($conn , $query);
        

        }    
 ?>
    <form  action="" method="post" enctype="multipart/form-data">
    <h2>ADD POST</h2>

    <div class="form-group">
    <label for="post_category_id">Category:
    <select name="post_category_id" id="post_category_id">
        <?php
            $query = "SELECT * FROM category ";
              $query_category = mysqli_query($conn , $query);
              while($row = mysqli_fetch_assoc($query_category)){
                $cat_id = $row ['cat_id'];
                $cat_title = $row ['cat_title'];

                echo "<option value='$cat_id'>{$cat_title}</option>";
              }

            ?>
    </select>
    </label>
    </div>

    <div class="form-group">
    <label for="post_brand_id">Brand:
    <select name="post_brand" id="post_brand">
        <?php
            $query = "SELECT * FROM brands ";
              $query_brands = mysqli_query($conn , $query);
              while($row = mysqli_fetch_assoc($query_brands)){
                $brand_id = $row ['cat_id'];
                $brand_name = $row ['brand_name'];
                echo "<option value='$brand_id'>{$brand_name}</option>";
              }

            ?>
    </select>
    </label>
    </div>
    <div class="form-group">
    <label for="post_title">Title:
    <input type="text" class="form-control" name="post_title">
    </label>
    </div>
    <div class="form-group">
    <label for="post_price">Price:
    <input type="text" class="form-control" name="post_price">
    </label>
    </div>
    <div class="form-group">
    <label for="post_size">Size:
    <!-- <select name="post_size" class="form-control" id="">
        <option value="">XS</option>
        <option value="">S</option>
        <option value="">M</option>
        <option value="">L</option>
        <option value="">XL</option>
        <option value="">XXL</option>
    </select> -->
    <input type="text" name="post_size" class="form-control">
    </label>
    </div>
    <div class="form-group">
    <label for="post_color">Color:
        <!-- <select name="post_color" class="form-control" id="">
        <option value="">Black</option>
        <option value="">White</option>
        <option value="">Brown</option>
        <option value="">Green</option>
        <option value="">Blue</option>
        <option value="">Other...</option>
    </select> -->
    <input type="text" class="form-control" name="post_color">
    </label>
    </div>
    <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" class="form-control" name="post_image[]" multiple >
    </div>
    <div class="form-group">
    <label for="post_content">Content
    <textarea name="post_content" class="form-control" id="" cols="20" rows="5"></textarea>
    </label>
    </div>
    <div class="form-group">
    <label for="post_stock">Stock:
    <input type="text" class="form-control" name="post_stock">
    </label>
    </div>
    <div>
        <label for="submit">
            <input type="submit" class="btn btn-primary" value="ADD POST" name="submit">
        </label>
    </div>
</form>