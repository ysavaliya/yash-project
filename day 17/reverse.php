<?php   
    $a =array("Pineapple","Mango","Apple","Grapes");
    print_r($a);

    echo"<br><br>Using count()..";
    echo "<br>No. of element in arry : ".count($a);

    echo "<br><br>Using sort()..<br>";
    sort($a);
    print_r($a);

    echo "<br><br>Using array_reverse()..<br>";
    print_r(array_reverse($a));

    echo "<br><br>Using List()..";
    list($f1,$f2,$f3,$f4)=$a;
    echo "<br>After sorting the fourth item in list is : ".$f4;
?>