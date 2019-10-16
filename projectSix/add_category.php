<?php
//  echo '<pre>';
//  print_r($_POST);
    if(isset($_POST['btn'])){
        function save_category($data){
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
        }
        $message = save_category($_POST);
    }

?>
<hr />
    <a href="add_category.php">Add Category</a>
    <a href="view_category.php">View Category</a>
<hr />
<form action="" method="post">
    <h1><?php if(isset($message)){ echo $message;}?></h1>
    <table>
        <tr>
            <td>Category Name</td>
            <td><input type="text" name="category_name"></td>
        </tr>
        <tr>
            <td>Category Description</td>
            <td><textarea name="category_description" type="text" cols="20" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Publication status</td>
            <td>
                <select name="publication_status">
                    <option>___select publication status___</option>
                    <option value="1">published</option>
                    <option value="0">Unpublished</option>
                </select>
            </td>
        
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="save category"></td>
        </tr>
    </table>


</form>