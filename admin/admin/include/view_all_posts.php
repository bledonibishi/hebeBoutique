                <table class="table table-bordered table-hover table-striped">
                    <thead class="w-100">
                      <tr>
                          <td>ID</td>
                          <th>category</th>
                          <th>Brand</th>
                          <th>Title</th>
                          <th>Price</th>
                          <th>Size</th>
                          <th>Color</th>
                          <th>Image</th>
                          <th>Content</th>
                          <th>Date</th>
                          <th>Stock</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $query = "SELECT * FROM posts";
                    $query_posts = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_assoc($query_posts)){
                      $post_id = $row['post_id'];
                      $post_category = $row['post_category'];
                      $post_title = $row['post_title'];
                      $post_price = $row['post_price'];
                      $post_size = $row['post_size'];
                      $post_color = $row['post_color'];
                      $post_image = $row['post_image_hebe'];
                      $post_content = $row['post_content'];
                      $post_date = $row['post_date'];
                      $post_stock = $row['post_stock'];
                      $post_brand_id = $row['post_brand'];

                     

                    echo "<tr>";
                      echo "<td>{$post_id}</td>";
                      $query = "SELECT * FROM category where cat_id = $post_category";
                      $query_category = mysqli_query($conn , $query);
                      while($row = mysqli_fetch_assoc($query_category)){
                        $cat_id = $row ['cat_id'];
                        $cat_title = $row ['cat_title'];

                      echo "<td>{$cat_title}</td>";
                      }
                      echo "<td> {$post_title}</td>";
                      echo "<td> {$post_price}</td>";
                      echo "<td> {$post_size}</td>";
                      echo "<td> {$post_color}</td>";
                      echo "<td><img width='100' src='../../images/$post_image'></td>";
                      echo "<td> {$post_content}</td>";
                      echo "<td> {$post_date}</td>";
                      echo "<td> {$post_stock}</td>";
                      $query = "SELECT * FROM brands where brand_id = $post_brand_id";
                      $query_brand = mysqli_query($conn , $query);
                      while($row = mysqli_fetch_assoc($query_brand)){
                        $brand_id = $row ['brand_id'];
                        $brand_name = $row ['brand_name'];

                        echo "<td>{$brand_name}</td>";
                      }
                      echo "<td><a href='post.php?source=edit_post'> EDIT</a></td>";
                      echo "<td><a onClick=\"javascript:return confirm('Are you sure you want to delete? '); \"  href='post.php?post_delete={$post_id}'>DELETE</a></td>";
                   echo" </tr>";

          } ?>         
          
          
          <?php
            if(isset($_GET['post_delete'])){
              $post_delete_id = $_GET['post_delete'];
              $query = "DELETE FROM posts WHERE post_id = $post_delete_id ";
              $query_delete_post = mysqli_query($conn,$query);
              header("location:post.php");
            }
          ?>
                  </tbody>
          </table>