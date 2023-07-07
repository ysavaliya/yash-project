<?php
    echo "The original array is : <br>";

    $a = array(3=>"Jhanvi Kapoor",1=>"Shradhha Kapoor",4=>"Samntha Puri",2=>"Kriti Senon");
    echo"<pre>";
    print_r($a);
    echo "After key sorting...<br>";
    ksort($a);
    echo"<pre>";
    print_r($a);
?>