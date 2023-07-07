<?php
    $array1 = array("e1"=>"50","e2"=>"70","e3"=>"30");
    echo "<br>";
    print_r($array1);    

    //array without keys
    $array2 = array(50,40,20,10);
    echo "<br>";
    print_r($array2);
    
    $array_brackets = ["1","2","3"];
    echo "<br>";
    print_r($array_brackets);
    echo "<br>";

    //multi dimension array
    $fruit = array (
        array("Mango",10),
        array("Apple",30),
        array("Watermelon",20)
      );
        
      echo $fruit[0][0].": In stock: ".$fruit[0][1]."<br>";
      echo $fruit[1][0].": In stock: ".$fruit[1][1]."<br>";
      echo $fruit[2][0].": In stock: ".$fruit[2][1]."<br>";

      $array3 = array(
        "first" => array("first_first"=>20),
        "second" => array("second_first"=>20,
        "second_second" => array(
            "second_second_first"=> "sub sub array")
        )
        );

        echo "<pre>";
        print_r($array3);


        //sorting

        
        $sort = sort($array2);
        print_r($sort);

       $asort = asort($array2);
       print_r($asort);
       
       echo "desending order: ";
        rsort($array1);
        print_r($array1);

        echo "assending order sort by key : ";
        ksort($array1);
        print_r($array1);
        
        echo "assending order sort by value : ";
        asort($array1);
        print_r($array1);
      

?>    