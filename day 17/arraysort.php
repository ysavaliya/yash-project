<?php
    echo "The original array is : <br>";

    $a = array("Jhanvi Kapoor","Shradhha Kapoor","Samntha Puri","Kriti Senon");
    echo"<pre>";
    print_r($a);
    echo "After sorting...<br>";
    sort($a);
    echo"<pre>";
    print_r($a);
?>