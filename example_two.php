<?php
    echo '<pre>';
    print_r($_POST);
    if(isset($_POST['btn'])){
       function word_character_count($data) {
            $given_text = $data['given_text'];
            $rdata = array();
            $rdata['number_of_word']=str_word_count('$given_text');
            $rdata['number_of_character']=strlen('$given_text');
            return $rdata;
       }
       $adata = word_character_count($_POST);
       echo $adata['number_of_word'];
       echo $adata['number_of_character'];
    }



?>
<form action="" method="post">
<table>
    <tr>
        <td>Enter your string</td>
        <td><textarea name="given_text" id="" cols="30" rows=7></textarea></td>
    
    </tr>
    <tr>
        <td>total number of world</td>
        <td><input type="number"></td>
    
    </tr>
    <tr>
        <td>total number of character</td>
        <td><input type="number"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="btn" value="SUBMIT"></td>
    </tr>

</table>





</form>