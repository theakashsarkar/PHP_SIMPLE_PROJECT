<?php
  echo '<pre>';
  print_r($_POST);
  if(isset($_POST['btn'])){
    
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
      <td><textarea cols="30" rows="5"><?php if(isset($_POST['btn'])){echo make_password($_POST);};?></textarea></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="btn" value="SUBMIT"/></td>
    </tr>
  </table>
</form>
