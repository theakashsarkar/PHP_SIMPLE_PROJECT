<?php
    echo '<pre>';
    print_r($_POST);
    if(isset($_POST['btn'])){
        function save_student_info($data){
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
            $sql = "INSERT INTO tbl_student(student_name,email_address,phone_number,address) VALUES ('$data[student_name]','$data[email_address]','$data[phone_number]','$data[address]')";
            if(mysqli_query($connection,$sql)){
    
            }else{
                die('query problem'.mysqli_error($connection));
            }
        }
       
        save_student_info($_POST);
    }
 ?>
 <a href="add_student.php">Add Student</a>
 <a href="view_information.php">View Information</a>
<form action="" method="post">
    <table>
        <tr>
             <td>Student Name</td>
             <td><input type="text" name="student_name"/></td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td><input type="email" name="email_address"/></td>
        </tr>
         <tr>
            <td>Phone Number</td>
            <td><input type="number" name="phone_number"></td>
         </tr>
         <tr>
            <td>Address</td>
            <td><textarea name="address" id="" cols="30" rows="3"></textarea></td>
         </tr>
         <tr>
            <td></td>
            <td><input type="submit" name="btn" value="save student"></td>
         </tr>
    </table>
</form>