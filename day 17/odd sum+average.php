<?php
    $a = array(1,3,5,7,9,11);
    echo "<pre>";
    print_r($a);
    $sum = 0;
    

    foreach($a as $value)
    {
     $sum = $sum + $value;
     
    }

    echo "Sum of the given sequence is : ".$sum;
   
    $b = array(1,3,5,7,9);
    echo "<pre>";
    print_r($b);
    $sum = 0;
    $av = count($b);

    foreach($b as $val)
    {
     
     $sum = $sum + $val;
    }
     $average = $sum/$av;
    echo "Average of the given sequence is : ".$average;

?>