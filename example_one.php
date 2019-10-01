<?php
  echo '<pre>';
  print_r($_POST);



?>






<form action="" method="post">
    <table>
        <tr>
            <td>Starting Number</td>
            <td><input type="number"  name="starting_number"></td>
        </tr>
        <tr>
            <td>Ending Number</td>
            <td><input type="number" name="ending_number"></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><input type="number"></td>
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