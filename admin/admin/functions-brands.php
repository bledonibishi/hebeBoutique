<?php 

    function allBrands(){
        global $conn;

        $query =" SELECT * FROM brands";
        $query_brands = mysqli_query($conn, $query);

        while($rowi = mysqli_fetch_array($query_brands)){
            $brand_id = $rowi['brand_id'];
            $brand_name = $rowi['brand_name'];
            
            echo "<tr>";
            echo "<td>$brand_id</td>";
            echo "<td>$brand_name</td>";
            echo "<td><a href='brands.php?update={$brand_id}'>EDIT</a></td>";
            echo "<td><a href='brands.php?update={$brand_id}'>DELETE</a></td>";
            echo "</tr>";
        }
    }
    function deleteBrands(){
        global $conn;
        if(isset($_GET['delete'])){
            $brand_delete_id = $_GET['delete'];
            $query = "DELETE FROM brands WHERE brand_id=$brand_delete_id";
            $query_delete_brand = mysqli_query($conn , $query);
            header("Location:brands.php");
        }

    }
    function createBrand(){
        global $conn;

        if(isset($_POST['create-brand'])){
            $the_brand_title = $_POST['new_brand_title'];
            $query = "INSERT INTO brands(brand_name) VALUES ('{$the_brand_title}') ";
            $query_add_category = mysqli_query($conn,$query);
             }
    }

?>