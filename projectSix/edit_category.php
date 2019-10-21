<?php
 $category_id = $_GET['category_id'];
 //echo $category_id;
 function select_category_info_by_category_id(){
 $$hostname ="localhost";
 $user_name="root";
 $password ="";
 $db_name  ="db_student";
 $connection = mysqli_connect($hostname,$user_name,$password,$db_name);
 if($connection){
     $db_select = mysqli_select_db($connection,$db_name);
     if($db_select){

     }else{
         die('Database selection fail'.mysqli_error($connection));
     }
 }else{
     die('Database connection fail'.mysqli_error($connection));
 }
 $sql ="SELECT * FROM tbl_category WHERE category_id='$category_id'";
 if(mysqli_query($category_id,$sql)){
     $resourse_id = mysqli_query($connection,$sql);
     return $resourse_id;

 }else{
     die("query problem".mysqli_error($connection));
 }
}
 $resourse_id = select_category_info_by_category_id($category_id);
 $category_info = mysqli_fetch_assoc($resourse_id);
  if(isset($_POST)){
      function update_category_name($data){
           $hostname = "localhost";
           $user_name= "root";
           $password = "";
           $db_name  = "db_student";
           $connection = mysqli_connect($hostname,$user_name,$password,$db_name);
 if($connection){
     $db_select = mysqli_select_db($connection,$db_name);
     if($db_select){

     }else{
         die('Database selection fail'.mysqli_error($connection));
     }
 }else{
     die('Database connection fail'.mysqli_error($connection));
 }   
  $sql = "UPDATE tbl_category SET category_name='[category_name]',category_description='[category_description]',publication_status='[publication_status]' WHERE category_id='[category_id]'";
   if(mysqli_query($connection,$sql){
     // headers('location:view_category.php');
     header('location:view_category.php');
        
   }else{

   }


      update_category_name($_POST);
};

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
            <td>
             <input type="text" name="category_name" <?php echo $category_info['category_name'];?>">
             <input type="hidden" name="category_id" <?php echo $category_info['category_id'];?>">

            </td>
        </tr>
        <tr>
            <td>Category Description</td>
            <td><textarea name="category_description" type="text" cols="20" rows="10">valus="<?php echo $category_info['category_description'];?></textarea></td>
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