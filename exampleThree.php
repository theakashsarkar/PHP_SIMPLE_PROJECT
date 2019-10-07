<?php
echo '<pre>';
print_r($_POST);

  if(isset($_POST['btn'])){
    function string_found($data){
      $adata = array('php','js','go','ruby','c#','python','nodejs','express');
      $given_text = $data['given_text'];
      $res = in_array($given_text,$adata);
      if($res){
        $result = 'Found';
      }else{
        $result = 'Not Found';
      }
      return $result;
    }
    $result = string_found($_POST);
  }
?>
<form action="" method="post">
   <table>
      <tr>
        <td>Enter your text</td>
        <td><textarea name="given_text"></textarea></td>
      </tr>
      <tr>
        <td>Result</td>
        <td><input type="text" value="<?php if(isset($result)){echo $result;};?>"/></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="btn" value="SUBMIT"</td>
      </tr>
   </table>
</form>
