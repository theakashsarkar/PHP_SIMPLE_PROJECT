<?php
    echo '<pre>';
    print_r($_POST);
    $starting_number = $_POST["starting_number"];
    $ending_number = $_POST["ending_number"];

    $sum = 0;
    for($i =$starting_number; $i<=$ending_number;$i++){
     $sum=$sum+$i;
    }
    echo $sum;


?>





<form action="" method="post">
    <table>
        <tr>
            <td>Starting Number</td>
            <td><input type="number" value="starting_number"></td>
        </tr>
        <tr>
            <td>Ending Number</td>
            <td><input type="number" value="ending_number"></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><input type="number"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" type="btn" value="Submit"></td>
        </tr>
    
    </table>

</form>