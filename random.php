<?php
      function rand_(){
    $digits_needed=7;

    $random_number=''; // set up a blank string

    $count=0;

    while ( $count < $digits_needed ) {
        $random_digit = mt_rand(0, 8);
        $random_number .= $random_digit;
        $count++;
    }

    return $random_number;

    }

    $a=array('0812', '0813'  ,'0814' ,'0815' ,'0816' ,'0817' ,'0818','0819','0909','0908');
        $i=0;
        while($i<21){
            $website = $a[mt_rand(0, count($a) - 1)];
           print $website . rand_().'<br>';
           $i++;
        }
?>