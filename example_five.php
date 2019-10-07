<?php
    echo '<pre>';
    print_r($_POST);
    if(isset($_POST['btn'])){
       require_once './function_defination.php';
        echo sum_of_seris($_POST);
    }

?>

<form action="" method="post">
    <table>
        <tr>
            <td>Starting Number</td>
            <td><input type="number" value="starting_number"/></td>
        </tr>
        <tr>
            <td>Ending Number</td>
            <td><input type="number" value="ending_number"/></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><input type="text" value=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="SUBMIT"/></td>
        
        </tr>
    </table>

</form>