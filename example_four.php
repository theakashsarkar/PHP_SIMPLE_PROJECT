<?php
  echo '<pre>';
  print_r($_POST);
  if(isset($_POST['btn'])){
    function make_password($data){
      $given_length = $data['given_length'];
      $pdata = array('@','!','#','$','%','*');
      $password ="";

      for($i;$i<= $given_length; $i++){
        $index = rand(0,6);
        $password.= $pdata[$index];
      }
      return $password;
    }
    //echo make_password($_POST);
  }

?>
<form action="" method="post">
  <table>
    <tr>
      <td>Enter your password length</td>
      <td><input type="number" value="given_length"/></td>
    </tr>
    <tr>
      <td>Your password</td>
      <td><textarea cols="30" rows="5"><?php if(isset($_POST['btn'])){echo make_password($_POST)}?></textarea></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="btn" value="SUBMIT"</td>
    </tr>
  </table>
</form>
