<?php session_start(); include 'header.php' ?>
<link rel="stylesheet" href="style/style.css" />
  <body class="bodyy">
    <!-- Cart  -->
    <?php include 'cart.php' ?>
    <!-- Cart over div -->

    <!--  //Login and Register div -->
    <div class="up-nav d-flex flex-row-reverse sticky-top">
      <a href="include/login.php" class="pr-2">Login</a>
      <a class="pr-2" href="include/register.php">Register</a>
    </div>

    <!-- //nav-bar -->
    <?php include "navigation.php" ?>
  
    <div class="front-image">
        <img src="images/2.jpg "/>
    </div>

    <div class="title1">
      <h1 class="text-center pt-3 pb-3">Featured Products</h1>
    </div>

    <!-- //products -->
      <div class="products col">
        
        <?php 
      
      $query = "SELECT * FROM posts";
      $query_posts = mysqli_query($conn,$query);
      $post_count = mysqli_num_rows($query_posts);

      while($row = mysqli_fetch_assoc($query_posts)){
        $post_id = $row['post_id'];
        $post_image = $row['post_image_hebe'];
        $post_title = $row['post_title'];
        $post_category_id = $row['post_category'];
        $post_price = $row['post_price'];
        $post_brand_id = $row['post_brand'];
      
      ?>
      <div class="selected-product">
          <a href="post.php?p_id=<?php echo$post_id; ?>">
            <img
              src="images/<?php echo $post_image; ?>"
              class="w-80"
            />
          </a>

          <?php 
          
          $query=" SELECT * FROM category where cat_id = $post_category_id";
          $query_cat = mysqli_query($conn , $query);
          while($row = mysqli_fetch_assoc($query_cat)){

            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];

            echo "<a style='color:black;' href='post.php'>$cat_title</a>";

          }
          
          ?>
        <h6><?= $post_title; ?></h6>
        <p class="text-center">$ <?php echo $post_price; ?></p>
      
        </div>
        
        <?php } ?>
      </div>
    <div class="background-image">
      <a href=""> Shop my Boyfriend back </a>
    </div>

    <section class="brands" id="brands">
      <p>Brands</p>
      <ul class="ul-brands">
          <?php 
            $query = "SELECT * FROM brands";
            $query_brands = mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($query_brands)){
              $brand_id = $row['brand_id'];
              $brand_name = $row['brand_name'];

              // echo "<ul class='ul-brands'>";
              echo " <li><a href=''>$brand_name</a></li> ";
              // echo "</ul>";
            }
          ?>
          </ul>
    </section>

   <?php include "footer.php" ?>