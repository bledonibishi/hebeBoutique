<?php 

    function allCategories(){
        global $conn;

        $query = " SELECT * FROM category ";
        $query_category = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($query_category)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];

            echo "<tr>";
        
            echo "<td>$cat_id</td>";
            echo "<td>$cat_title</td>";
            echo "<td><a href='categories.php?update={$cat_id}'>EDIT</a></td>";
            echo "<td><a href='categories.php?delete={$cat_id}'>DELETE</a></td>";
            echo "</tr>";
        }

    }
    function deleteCategories(){
        global $conn;
        if(isset($_GET['delete'])){
            $cat_delete_id = $_GET['delete'];
            $query = "DELETE FROM category WHERE cat_id=$cat_delete_id";
            $query_delete_cat = mysqli_query($conn , $query);
            header("Location:categories.php");
        }

    }
    function createCategory(){
        global $conn;

        if(isset($_POST['create-cat'])){
            $the_cat_title = $_POST['new_cat_title'];
            $query = "INSERT INTO category(cat_title) VALUES ('{$the_cat_title}') ";
            $query_add_category = mysqli_query($conn,$query);
    
            if(!$query_add_category){
                die('QUERY FAILED' . mysqli_error($conn));
            }else{
                ECHO "<H1>Success</H1>";
            }
             }
    }

?>