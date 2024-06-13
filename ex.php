<?php
    //###########ARRAY FUNCTIONS###############################
    echo "Special(Advanced Fun)<br>==================================<br>";

    echo "Map Function(Square Each Ele):<br>";
    $arr = [1,2,3,4]; //find square of each elements
    echo "arr = [1,2,3,4]<br>";

    $sq_arr = array_map('square', $arr);

    function square($ele){
        return $ele*$ele;
    }
    echo "<pre>";
    print_r($sq_arr);
    echo "</pre>";

    //array_map(): Mapping with Associated array
    echo "<br>Mapping with Associated Array(convert in uppercase)<br>";
    $colors = ['red','yellow','blue','green']; //convert in elements uppercase
    
    echo "colors = ['red','yellow','blue','green']<br>";
    
    $ucolor_arr = array_map('upper', $colors);

    function upper($ele){
        return strtoupper($ele);
    }
    echo "<pre>";
    print_r($ucolor_arr);
    echo "</pre>";

    #array_reduce(): reduce all elemenets of an array into single ele
    echo "<br>Reduce all elemenets of an array into single ele<br>";

    $colors = ['red','yellow','blue','green'];
    echo "colors = ['red','yellow','blue','green']<br>";

    $reduced = array_reduce($colors, 'reduce');
    function reduce($res, $ele) {
        return "$res-$ele";
    }
    echo "Reduced ele: $reduced<br>";//-red-yellow-blue-green

    //with one optional arg(holds intital val)
    echo "<br>Reduce all elemenets with initial val(optional arg)<br>";

    $colors = ['red','yellow','blue','green'];
    echo "colors = ['red','yellow','blue','green']<br>";

    $initial_val = 'white';

    $reduced = array_reduce($colors, 'reduce1', $initial_val);
    function reduce1($res, $ele) {
        return "$res-$ele";
    }
    echo "Reduced ele: $reduced<br>";//white-red-yellow-blue-green



    #array_filter(): filter elemenets of an array based on specific condition
    echo "<br>Filter Even Numbers From An Array:<br>";

    $numbers = [1,2,3,4,5,6];
    $even_nums = array_filter($arr, 'isEven');

    function isEven($num) {
        return $num%2==0;
    }

    echo "<pre>";
    print_r($even_nums);
    echo "</pre>";


    #array_replace(): Replace elements of an array with elements of another array
    echo "<br>Replace elements of an array with elements of another array:<br>";
    $numbers = [1,2,3,4,5,6];
    $colors = ['red','yellow','blue','green'];

    $replaced_arr = array_replace($numbers, $colors);
    echo "<pre>";
    print_r($replaced_arr);
    echo "</pre>";


   
    #array_merge(): Merges one or more arrays into one array.
    $idx_arr = [1,2,3];
    $ass_arr = ["a","b"];

    echo "<br>Merge 2 Array:<br>";
    $merged_Arr = array_merge($idx_arr, $ass_arr);
    print_r($merged_Arr);

    #array_slice(): Extracts a slice of an array.
    echo "<br><br>Extracts a slice of an array:<br>";
    echo "fruits = ['apple', 'banana', 'orange', 'mango', 'pineapple']<br>";
    $fruits = ["apple", "banana", "orange", "mango", "pineapple"];
    $sliced_fruits = array_slice($fruits, 1,3); // Extract 3 elements from index 1.

    echo"<pre>"; //For printing in good format
    print_r($sliced_fruits);////banana,orange, mango
    echo"</pre>";

    #array_splice(): Removes a portion of an array and replaces it with something else.
    echo "<br><br>Remove ele of an array:<br>";
    echo "fruits = ['apple', 'banana', 'orange', 'mango', 'pineapple']<br>";
    
    $fruits = ["apple", "banana", "orange", "mango", "pineapple"];
    $spliced_fruits = array_splice($fruits, 0,2); // remove 2 elements from index 0

    echo "<pre>";
    print_r($sliced_fruits);// [apple,banana]
    echo "</pre>";
    
    $fruits = ["apple", "banana", "orange", "mango", "pineapple"];
    $colors = ["red", "blue"];
    $spliced_fruits = array_splice($fruits, 1,2, $colors); // remove 2 elements from index 0 and insert $colors
    echo "<pre>";
    print_r($sliced_fruits);// [apple,banana]
    echo "</pre>";

    

?>