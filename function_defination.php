<?php

function sum_of_seris($data){
            $starting_number = $data['starting_number'];
            $ending_number   = $data['ending_number'];
            $sum = "";
            for($i = $starting_number; $i <= $ending_number; $i++){
                if($i % 2 == 0){
                    //echo $i;
                    $sum+=$i;
                }
            }
            return $sum;
            
        }
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
   ?>       
