<?php
        function view_student_info(){
            $hostname ="localhost";
            $user_name="root";
            $password ="";
            $db_name  ="db_student";
            $connection=mysqli_connect($hostname,$user_name,$password);
            if($connection){
                //echo 'Database connection';
               $db_select = mysqli_select_db($connection,$db_name);
               if($db_select){
                    echo 'Database Selected';
               }else{
                   die('Database Selected Faild'.mysqli_error($connection));
               }
            }else{
                die('Database Fail'.mysql_error($connection));
            }
            $sql ="SELECT * FROM tbl_student";
            if(mysqli_query($connection,$sql)){
                $result = mysqli_query($connection,$sql);
                return $result;
    
            }else{
                die('query problem'.mysqli_error($connection));
            }
        }
       
       $result = view_student_info();
       
    //    while($row = mysqli_fetch_assoc($result))
    //    {
    //      echo '<pre>';
    //      print_r($row);
    //    }
    
 ?>
  <a href="add_student.php">Add Student</a>
 <a href="view_information.php">View Information</a>
 <hr />
 <table border="1" width="700">
       <tr>
        <th>Student ID</th>
        <th>student Name</th>
        <th>Email Addres</th>
        <th>Phone Number</th>
        <th>Address</th>
       
       </tr>
       <?php while($student_info = mysqli_fetch_assoc($result)) {?>
       <tr>
        <td><?php echo $student_info['student_id'];?></td>
        <td><?php echo $student_info['student_name'];?></td>
        <td><?php echo $student_info['email_address'];?></td>
        <td><?php echo $student_info['phone_number'];?></td>
        <td><?php echo $student_info['address'];?></td>
       
       </tr>
       <?php }?>
 
 </table>