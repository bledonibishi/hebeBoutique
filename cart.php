<?php

if (isset($_POST['remove'])) {
  if ($_GET['action'] == 'remove') {
    foreach ($_SESSION['cart'] as $key => $value) {
      if ($value['product_Id'] == $_GET['post_id']) {
        unset($_SESSION['cart'][$key]);
        //  echo "<script>alert('Product has been Removed...!')</script>";
        echo "Produkti u fshi";
        echo "<script>window.location = 'index.php'</script>";
      }
    }
  }
}
?>


<link rel="stylesheet" href="style/cart.css" />
<div class="cart-div hidden">
  <div class="cart-title">
    <h4>Your cart</h4>
    <a href="" class="close-cart">
      <span class="material-icons"> close </span>
    </a>
  </div>

  <?php

  $total = 0;
  if (isset($_SESSION['cart'])) {
    $product_id = array_column($_SESSION['cart'], "product_Id");
    // print_r($product_id);

    $query = "SELECT * FROM posts";
    $query_cart = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($query_cart)) {
      foreach ($product_id as $post_id) {
        if ($row && $row['post_id'] == $post_id) {
          $post_id = $row['post_id'];
          $post_title = $row['post_title'];
          $post_stok = $row['post_stock'];
          $post_price = $row['post_price'];
          $post_image = $row['post_image_hebe'];
          $total = $total + (int)$row['post_price'];



          $query = " SELECT * FROM category";
          $query_cat = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_assoc($query_cat)) {

            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
          }



          $query = " SELECT * FROM brands";
          $query_brand = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_assoc($query_brand)) {

            $brand_id = $row['brand_id'];
            $brand_name = $row['brand_name'];
          }
        }
      }



  ?>
      <!-- product -->
      <form action="index.php?action=remove&post_id=<?php echo $post_id; ?>" method="post">
        <div class="product">


          <div class="image-description-div">
            <div class="image-div">
              <img src="images/<?php echo $post_image; ?>" style="width: 20%" />
            </div>

            <div class="description-div">
              <h6 class="title-product"><?php echo $cat_title ?>//Lilac</h6>
              <small><?php echo $brand_name; ?> / LILAC</small>
              <p></p>

              <button class="btn btn-danger" type="submit" name='remove'>REMOVE</button>
            </div>
          </div>

          <div class="trio-div">
            <div class="price">
              <p></p>
              <p></p>
            </div>

            <div class="quantity buttons_added">
              <p>Quantity</p>
              <input class="input" type="button" value="-" id="minus" /><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" /><input class="input" type="button" value="+" id="plus" />
            </div>
            <div class="total">
              <p>Total</p>
              <p>$ <?php echo $post_price; ?></p>
            </div>
          </div>
        </div>
      </form>
  <?php }
  } else {
    echo "<H2>Cart is empty! </H2>";
  } ?>
  <!-- product -->

  <div class="special-instructions">
    <p>Speical instructions for seller</p>
    <textarea name="" id="" cols="25" rows="5" style="width: 90%"></textarea>
  </div>
  <div class="subtotal">
    <p>Subtotal :</p>

    <p><?php echo $total; ?></p>
  </div>
  <div>
    <p>Shipping & taxes calculated at checkout</p>
  </div>
  <button class="btn btn-dark" style="width: 100%">Check Out</button>
</div>