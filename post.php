<?php  
  session_start();
  include_once 'header.php' ;
    
    if(isset($_POST['addToCart'])){
      if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'],"product_Id");
          if(in_array($_POST['product_Id'],$item_array_id)){
            echo "E KENI NE SHPORTE!";
          }else{
            $count = count($_SESSION['cart']);
            $item_array = array(
              'product_Id'=>$_POST['product_Id']
            );

            $_SESSION['cart'][$count] = $item_array;
            // print_r($_SESSION['cart']);
            header("location:post.php");
          }

      }else{
        $item_array = array(
          'product_Id'=>$_POST['product_Id']
        );

        $_SESSION['cart'][0] = $item_array;
      }
      
      }
    ?>
    <!-- Cart  -->
      <?php include_once "cart.php" ?>

    <!-- Cart over div -->

    <!-- //nav-bar -->
    <?php include "navigation.php" ?>
    <link rel="stylesheet" href="style/product.css">
    <body>

    <form action="post.php" method="post">
      
    <?php
        if(isset($_GET['p_id'])){
          $the_post_id = $_GET['p_id'];
        }
        
        $query = "SELECT * FROM posts";
        $query_product = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($query_product)){
          $post_id = $row['post_id'];
          $post_category_id = $row['post_category'];
          $post_title = $row['post_title'];
          $post_stok = $row['post_stock'];
          $post_price = $row['post_price'];
          $post_size = $row['post_size'];
          $post_color = $row['post_color'];
          $post_content = $row ['post_content'];
          // $post_image =$row['post_image_hebe'];
          $post_brand_id = $row['post_brand'];
        
        
        ?>
            <div class="sectioni">

      <div class="min-photos-div scroller"id="minPhotos" >
        <a href="#1" class="move">
          <?php 
          $query = "SELECT post_image_hebe FROM posts";
          $query_images = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($query_images)){
              ?>
                <img src="images/<?php echo $row['post_image_hebe']; ?>"/>

            <?php }
          
          ?>
        </a>

      </div>



      <div class="max-photos-div scroll" id="maxPhotos">
        <a id="1" class="img" href="#">
        <?php 
          $query = "SELECT post_image_hebe FROM posts ";
          $query_images = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($query_images)){
              ?>
                <img src="images/<?php echo $row['post_image_hebe']; ?>" alt="" />

            <?php }
          
          ?>
        </a>
      </div>

      <div class="details-div scroll">
        <?php
          $query1 = " SELECT * FROM brands where brand_id = $post_brand_id";
          $query_brands = mysqli_query($conn,$query1);
         
          while($row = mysqli_fetch_assoc($query_brands)){
            $brand_id = $row['brand_id'];
            $brand_name = $row['brand_name'];

            
          }
          ?>
          <?php
          
          $query=" SELECT * FROM category where cat_id = $post_category_id";
          $query_cat = mysqli_query($conn , $query);
          while($row = mysqli_fetch_assoc($query_cat)){

            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
          }
        
          
          ?>

 
         <h5><?php echo $cat_title; ?></h5>
        <p class='category-title'><?php echo $post_title; ?>//<?php echo $post_color; ?></p>
        <h4><?php echo $brand_name; ?></h4>
        <p><?php echo $post_price; ?></p>
        <p>
          or 6 weekly interest-free payments from <?php echo $post_price/6; ?> with <em>LayBay</em>
        </p>

        <p>
          or make 4 interest-free payments of $<?php echo $post_price/4; ?> fortnightly with
          <em>afterpay</em>
        </p>

        <p>Tax included</p>
        <p class="stok"><?php echo $post_stok; ?>  in stock</p>

        <label for="size">
          <p class="size">Size</p>
          <select name='post_size' class="size-select">
            <option value=""><?php echo $post_size; ?></option>
      <?php
        if($post_size == 'XL'){
            echo "<option value='L'>L</option>";
            echo "<option value='XXL'>XXL</option>";
            echo "<option value='S'>S</option>";
            echo "<option value='M'>M</option>";          
        }
      ?>
          </select>
        </label>

        <label for="color">
          <p class="color">Color--<?php echo $post_color; ?></p>
        <div class="colors">
         <a href=""> <span class="dot"></span></a>
         <a href=""> <span class="dot-white"></span></a>
         <a href=""> <span class="dot-blue"></span></a>
         <a href=""> <span class="dot-brown"></span></a>
         <a href=""> <span class="dot-green"></span></a>
          
        </div>
        <select name="select-color" class="color-select" id="">
          <option value="1">Black</option>
          <option value="2">Yellow</option>
          <option value="3">Brown</span></option>
          <option value="4">White</span></option>
          <option value="5">Blue</span></option>
        </select>
      </label>

      
     
     
        <button class="add-cart-button" name="addToCart">Add to cart</button>
        <input type="hidden" name="product_Id" value="<?php echo $post_id; ?>">
        <button class="buy-button">Buy it now</button>
        

        <div class="d-flex mt-2">
          <div class="mr-3">
            <a
              class="description"
              href="javascript:void(0)"
              onclick="myJsFunc()"
              >Description</a
            >
            <p class="desc hidden">
            <?php echo $post_content; ?>
            </p>
          </div>
          <div>
            <a
              class="shipping mr-3"
              href="javascript:void(0)"
              onclick="myJsFunc()"
              >Shipping</a
            >
            <p class="shipp hidden">
              CLICK & COLLECT For all online orders we offer the option to ‘pick
              up instore’ which means you can whip in and pick up your parcel.
              Your purchase will be packaged up, ready to go. If you’re not able
              to get out of the house but are local, we are happy to deliver
              your item to your door. There is a charge of just $3 and delivery
              takes place after shop hours (5pm-7pm). Delivery applies to
              Masterton and Carterton. SHIPPING COSTS Hebe Boutique is aligned
              with GoSweetSpot who ensure you get the safest, most efficient
              shipping possible including Saturday and overnight delivery. The
              majority of couriers we use deliver overnight nationwide, yay! All
              customers with an online transaction total over $200 get FREE
              shipping! We charge a flat rate of $6 per package (based on mean
              calculations) for any purchase of clothing- this is regardless of
              whether it is overnight, Saturday or rural. FYI rural parcels can
              be around $15, so our aim is to make it reasonable for all. A
              charge of $4.00 applies for any purchase of jewellery or an
              accessory (sunglasses, watches etc.) Shipping to Australia $10
              shipping fee applies 5-15 working days (excluding Public Holidays)
              untracked. If you would like a tracking quote, email us.
              International $20 shipping fee applies. 5-15 working days
              untracked. If you would like a tracking quote, email us.
            </p>
          </div>
          <div>
            <a class="return" href="javascript:void(0)" onclick="myJsFunc()"
              >Returns</a
            >
            <p class="ret hidden">
              Worried an item you bought online won’t be right? Don’t stress, we
              want to make it easy! Follow the conditions below and you can
              return your item to us for an exchange or refund. Email us at
              hellothere@hebeboutique.com or call us on +64 (6) 378 8924 to
              notify us that you’re returning something. You must return the
              item within 7 working days (Nationwide) and 10 days
              (International) from receiving it. We recommend tracking your
              return so there’s no risk of it going missing. We won't be able to
              process your return if we don't receive it. You know the drill-
              all tags attached, include your receipt and contact details, and
              the item must be in brand new, unworn condition. If a refund is
              issued, you will be refunded via your original payment method- or
              to a nominated bank account once your return is approved. The
              shipping aspects of your order are non-refunable. Return courier
              fees are also at the expense of the customer. Due to hygiene
              reasons we cannot accept returns for change of mind on jewellery,
              lingerie or eyewear- these terms are also forwarded to us by the
              supplier and we are unable to return these items to them unless
              faulty. Sale items are not eligible for return, all sale
              transactions are final and cannot be accepted.
            </p>
          </div>
        </div>
      </div>
    </div>
    <?php }  ?>
  </form>

    <h1 class="text-center m-5">You may also like</h1>
    <div class="mayLike">
      <div class="mayLike-details">
        <a href="">
          <img src="images/bag.jpg" alt="" />
          <p class="text-center">Torty Hoops - Dark</p>
          <p class="text-center">SOPHIE</p>
        </a>
        <p class="text-center">52$</p>
      </div>
      <div class="mayLike-details">
        <a href="">
          <img src="images/b2.jpg" alt="" />
          <p class="text-center">Torty Hoops - Dark</p>
          <p class="text-center">SOPHIE</p>
        </a>
        <p class="text-center">52$</p>
      </div>
      <div class="mayLike-details">
        <a href="">
          <img src="images/b3.jpg" alt="" />
          <p class="text-center">Torty Hoops - Dark</p>
          <p class="text-center">SOPHIE</p>
        </a>
        <p class="text-center">52$</p>
      </div>
      <div class="mayLike-details ">
        <a href="">
          <img src="images/b4.jpg" alt="" />
          <p class="text-center">Torty Hoops - Dark</p>
          <p class="text-center">SOPHIE</p>
        </a>
        <p class="text-center">52$</p>
      </div>
      <div class="mayLike-details">
        <a href="">
          <img src="images/b5.jpg" alt="" />
          <p class="text-center">Torty Hoops - Dark</p>
          <p class="text-center">SOPHIE</p>
        </a>
        <p class="text-center">52$</p>
      </div>
      <div class="mayLike-details">
        <a href="">
          <img src="images/bag6.jpg" alt="" />
          <p class="text-center">Torty Hoops - Dark</p>
          <p class="text-center">SOPHIE</p>
        </a>
        <p class="text-center">52$</p>
      </div>
    </div>
  </body>
    

   <?php include "footer.php" ?>