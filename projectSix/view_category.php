<?php
    function select_all_category_info(){
        $host_name = "localhost";
        $user_name= "root";
        $password ="";
        $db_name  = "db_student";
        $connection = mysqli_connect($host_name,$user_name,$db_name);
        if($connection){
            $db_select = mysqli_select_db($connection,$db_name);
            if($db_select){

            }else{
                die('Database selection fail'.mysqli_error($connection));
            }
        }else{
            die('Database connection fail'.mysqli_error($connection));
        }
        $sql = "INSERT INTO tbl_student(category_name,category_description,publication_status) VALUES ($data[category_name],$data[category_description],$data[publication_status])";
        if(mysqli_query($connection,$sql)){
            $message ="category info save succesfully";
            return $message;
        }else{
            die('Query problem'.mysqli_error($connection));
        }
        $sql = "SELECT * FROM tbl_category";
        if(mysqli_query($connection,$sql)){
            $resource_id = mysqli_query($connection,$sql);
            return $resource_id;
        }else{
            die('Query problem'.mysqli_error($connection));
        }
    }
     $result = select_all_category_info();

?>


<a href="add_category.php">Add Category</a>
<a href="view_category.php">View Category</a>
<table border="1" width="800" align="center">
<tr>
    <th>Category Name</th>
    <th>Category Description</th>
    <th>Publication status</th>
    <th>Action</th>
</tr>
<?php while($category_info = mysqli_fetch_assoc($result)){?>
<tr>
    <td><?php echo $category_info['categoty_name'];?></td>
    <td><?php echo $category_info['categoty_description'];?></td>
    <td>
    <?php
     if( $category_info['publication_status'] == 1){
        echo 'published';
     }else{
         echo "unblished";
     }
     ?>
    </td>
    <td>
      <a href="edit_category.php?category_id=<?php echo $category_info['category_id'];?>">Edit</a>|
      <a href="">Delete</a>
    </td>

</tr>
<?php }?>
</table>