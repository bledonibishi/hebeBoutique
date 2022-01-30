<link rel="stylesheet" href="style/style.css" />

<nav class="navbar sticky-top">
      <a href="#" class="cart" onclick="myFunction()">
      <!-- javascript:void(0); -->
            <span style="color: white" class="show-cart material-icons">
              shopping_cart
            </span>
            <?php
            if(isset($_SESSION['cart'])){
              $count = count($_SESSION['cart']);
              echo "<span id='cart_count' class=''>$count</span> ";
            }else{
              echo "<span id='cart_count' class=''>0</span> ";

            }
            
            ?>
        </a>
      <div class="logo col-md-3">
        <a href="index.php">
        <img src="images/logo-hebe.jpg" />
        </a>
      </div>

      <div class="topnav col d-flex justify-content-end ">
        <ul class="nav-menu nav col-md-8 non" id="myTopnav">
          <li class="nav-item">
            <a class="shop-list" href="#">Shop</a>
          </li>
          <li class="nav-item">
            <a class="brands-list" href="#brands">Brands</a>
          </li>
          <li class="nav-item">
            <a href="boyfriendsBack.php">My Boyfriends back</a>
          </li>
         
          <li class="nav-item">
            <a href="staffEdit.php">Staff edit</a>
          </li>
          <li class="nav-item"><a href="contact.php">Contact</a></li>
          <li class="nav-item">
            <a href="admin/admin/index.php">Admin</a>
          </li>
          
        </ul>
        <a href="javascript:void(0);" style="color:white;" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>

      </div>
    
    </nav>
    <div class="shopHover">
    <div class='shop-detail'>
      <p>CATEGORYS</p>
    
    <?php
    $query="SELECT * FROM category";
    $query_cat = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_cat)){
      $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];
      
      echo "<ul class='ul-shop'>";
     echo " <li><a href=''>$cat_title</a></li> ";
     echo "</ul>";
    
      } ?>
    
    </div>
    </div>

