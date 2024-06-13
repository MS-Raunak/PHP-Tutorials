<?php
//*********ARRAY IN PHP********//
//######There are ways to crating an array############
    #1. Using array() Function
    $arr = array(1,2, "Three", "Four");
    print_r($arr);

    echo "<br>";

    #Using Square bracket([])
    $arr = [5,6, "Seven", "Eight"];
   print_r($arr);

   echo "<br>";
#################################################################

   //#############There are three types of Array##################
   #1.Indexed Array: Arrays with a numeric index
    echo"<br>1. Indexed Array:<br>";

    $arr = [1,2,3,4, 'five'];
    echo "arr = [1,2,3,4,'five']<br>";

    echo "arr[0]:  $arr[0] <br>";
    echo "arr[1]:  $arr[1] <br>";
    echo "arr[2]:  $arr[2] <br>";
    echo "arr[3]:  $arr[3] <br>";
    echo "arr[4]:  $arr[4] <br>";

    $arr[5] = 'six';
   
    echo "<br>New Element(six) is Added in Array at 4th index:<br>";

    echo "arr[5]:  $arr[5] <br>";

    #Dispaly elements using forEach loop
    echo "<br>Dispaly elements using forEach loop<br>";
    foreach($arr as $ele){
        echo "$ele, ";
    }

    #Dispaly elements using simple for loop
    echo "<br>Dispaly elements using simple for loop<br>";
    for($i=0; $i<count($arr); $i++){
        echo "$arr[$i], ";
    }

    #Update element
    echo "<br>Update Elements, at 0th index update by 10:<br>";
    $arr[0] = 10;
    echo "arr[0] = $arr[0]";

    #Add new element
    echo "<br>Add new Elements at last index:<br>";
    $arr[] = 100;
    $lastIdx = sizeof($arr)-1;
    echo "arr[lastIdx] =". $arr[$lastIdx];
    
    #Remove element
    //Using unset() fun: Can delete but can't rearrange the elements
    echo "<br>Remove Elements at last index:<br>";
    $lastIdx = sizeof($arr)-1;
    unset($arr[$lastIdx]);
    $lastIdx = sizeof($arr)-1;
    echo "Last element is deleted arr[lastIdx] =". $arr[$lastIdx];

    //Using array_splice() method: it can remove and rearrange as well
    echo "<br>Remove Elements at last index:<br>";
    $lastIdx = sizeof($arr)-1;
    array_splice($arr, 0, 1);//from 0 to delte only 1 elemnt
    $lastIdx = sizeof($arr)-1;
    echo "Last element is deleted arr[lastIdx] =". $arr[$lastIdx];
    echo "<br><br>";


    #2.Associative Array: Arrays with specific named keys
    echo "2. Associative Array:<br>";
    echo "arr = array('ONE'=>1,'TWO'=>2,'THREE'=>3)<br>";

    $arr = array(
        "ONE" => 1,
        "TWO" => 2,
           3  => 'Three'
    );//OR,

    #$arr = ['ONE'=>1,'TWO'=>2,'THREE'=>3];
    
    foreach($arr as $ele){
        echo "$ele, ";
    }

    echo "<br><br>";

    #Multi-dimensional Array: Arrays Containing One Or More Than One Array 
    echo "3. Multi-dimensional Array:<br>";
    $cars = array(
        array("Volvo", 300000),
        array("Alto", 250000),
        array("Suzuki", 350000),
    );

    
    foreach($cars as $car){
        foreach($car as $c){
            echo "$c, ";
        }
        echo "<br>";
    }

    #################################################################
?>