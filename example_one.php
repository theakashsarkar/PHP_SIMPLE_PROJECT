<?php
    echo '<pre>';
    print_r($_POST);

    if(isset($_POST['btn'])){
            function calculator($data){
                // echo '<pre>';
                // print_r($_POST);
                $first_number =$data[$first_number];
                $second_number=$data[$second_number];
                $btn = $data['btn'];
                if($btn == '+'){
                    echo $first_number+$second_number;
                }
                else if($btn == '-'){
                    echo $first_number-$second_number;
                }
                else if($btn == '*'){
                    echo $first_number*$second_number;
                }
                else if($btn == '/'){
                    echo $first_number/$second_number;
                }
            }
            
    }



?>






<form action="" method="post">
    <table>
        <tr>
            <td>Starting Number</td>
            <td><input type="number"  name="first_number"></td>
        </tr>
        <tr>
            <td>Ending Number</td>
            <td><input type="number" name="second_number"></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><input type="number" value="<?php if(isset($_POST['btn'])){calculator($_POST);} ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
            </td>
        </tr>
    
    </table>

</form>