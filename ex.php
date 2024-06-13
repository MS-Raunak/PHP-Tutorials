<?php
    //###########ARRAY FUNCTIONS###############################
    $idx_arr = [12,5,9,23,7,1];
    $ass_arr = ["ram" => "sita", "mohan" => "radha", "arjun"=>"draupadi"];

    echo "ARRAY'S FUNCTIONS:<br>";
    echo "indexed arr = [12,5,9,23,7,1]<br>";
    echo "associated arr = ['ram' => 'sita', 'mohan' => 'radha', 'arjun'=>'draupadi']<br><br>";

    #Find Length Of Array
    echo "Length Of Array: ".sizeof($idx_arr);

    #Count elements from an Array
    echo "<br>Total elements: ". count($idx_arr);

    echo "<br><br>";

    ###### Sorting Functions---------------->
    echo "Sorting Functions:::====><br>";

    #sort() - sort arrays in ascending order
    echo "Ascending order sorting(Indexed Array): ";
    sort($idx_arr);

    foreach($idx_arr as $ele)    
            echo "$ele, ";

    #rsort() - sort arrays in descending order
    echo "<br>Descending order sorting(Indexed Array): ";
    rsort($idx_arr);

    foreach($idx_arr as $ele)    
        echo "$ele, ";

    #asort() - sort associative arrays in ascending order, according to the value
    echo "<br>Ascending order sorting(Associated Array a/c to val): ";
    asort($ass_arr);

    foreach($ass_arr as $ele)    
        echo "$ele, ";

    #arsort() - sort associative arrays in descending order, according to the value
    echo "<br>Descending order sorting(Associated Array a/c to val): ";
    arsort($ass_arr);

    foreach($ass_arr as $ele)    
        echo "$ele, ";

    #ksort() - sort associative arrays in ascending order, according to the key
    echo "<br>Ascending order sorting(Associated Array a/c to key): ";
    ksort($ass_arr);

    foreach($ass_arr as $ele)    
        echo "$ele, ";

    #krsort() - sort associative arrays in descending order, according to the key
    echo "<br>Descending order sorting(Associated Array a/c to key): ";
    krsort($ass_arr);

    foreach($ass_arr as $ele)    
        echo "$ele, ";

    #count(): Returns the number of elements in an array.
    echo "<br><br>NO of elements in indexed array: ". count($idx_arr);

    #array_push(): Pushes one or more elements onto the end of an array.
    echo "<br>Adding 2 elements onto the end of indexed arr:<br>";
    array_push($idx_arr, 17,11);
    print_r($idx_arr);

    #array_pop(): Removes and returns the last element of an array.
    echo "<br>Removing 1 element onto the end of indexed arr:<br>";
    array_pop($idx_arr);
    print_r($idx_arr);

    #array_shift(): Removes and returns the first element of an array.
    echo "<br>Removing first element of an indexed arr:<br>";
    $rem_ele = array_shift($idx_arr);
    echo "Removed ele: $rem_ele";

    #array_unshift(): Adds one or more elements to the beginning of an array.
    echo "<br>Adding 2 elements onto the beginning of indexed arr:<br>";
    array_unshift($idx_arr, 111,222);
    print_r($idx_arr);

    #array_merge(): Merges one or more arrays into one array.
    echo "<br>Merge 2 Array:<br>";
    $merged_Arr = array_merge($idx_arr, $ass_arr);
    print_r($merged_Arr);

    #array_slice(): Extracts a slice of an array.
    echo "<br><br>Extracts a slice of an array:<br>";
    echo "fruits = ['apple', 'banana', 'orange', 'mango', 'pineapple']<br>";
    $fruits = ["apple", "banana", "orange", "mango", "pineapple"];
    $sliced_fruits = array_slice($fruits, 1,3); // Extract elements at index 1 (banana) and 3 (mango)

    print_r($sliced_fruits);////banana, mango

    #array_splice(): Removes a portion of an array and replaces it with something else.
    echo "<br><br>Remove ele of an array:<br>";
    echo "fruits = ['apple', 'banana', 'orange', 'mango', 'pineapple']<br>";
    
    $fruits = ["apple", "banana", "orange", "mango", "pineapple"];
    $spliced_fruits = array_splice($fruits, 0,2); // 
    print_r($sliced_fruits);

    #array_key_exists(): Checks if the given key or index exists in the array.
    echo "<br><br>Check key exits or not in below array:<br>";
    echo "fruits = ['one' => 'apple', 'two' => 'banana', 'three' => 'orange']<br>";
    
    $fruits = ['one' => 'apple', 'two' => 'banana', 'three' => 'orange'];
    $test = array_key_exists('three', $fruits); // 
    echo "Key Available: $test";

    #array_keys(): Returns all the keys or a subset of the keys of an array.
    echo "<br><br>Display keys of below array:<br>";
    echo "fruits = ['one' => 'apple', 'two' => 'banana', 'three' => 'orange']<br>";
    
    $fruits = ['one' => 'apple', 'two' => 'banana', 'three' => 'orange'];
    $keys = array_keys($fruits); // 
    print_r($keys);

    #array_values(): Returns all the values of an array.
    echo "<br><br>Display values of below array:<br>";
    echo "fruits = ['one' => 'apple', 'two' => 'banana', 'three' => 'orange']<br>";
    
    $fruits = ['one' => 'apple', 'two' => 'banana', 'three' => 'orange'];
    $values = array_values($fruits); // 
    print_r($values);

    #array_search(): Searches the array for a given value and returns the corresponding key if successful.
    echo "<br><br>Searches the array for a given value(apple):<br>";
    echo "fruits = ['one' => 'apple', 'two' => 'banana', 'three' => 'orange']<br>";
    $fruits = ['one' => 'apple', 'two' => 'banana', 'three' => 'orange'];

    $values = array_search( "apple", $fruits); // 
    print_r($values);

    #in_array(): Checks if a value exists in an array.
    echo "<br><br>Check given value(apple) exists or not in given the array:<br>";
    echo "fruits = ['one' => 'apple', 'two' => 'banana', 'three' => 'orange']<br>";
    $fruits = ['one' => 'apple', 'two' => 'banana', 'three' => 'orange'];

    $test = in_array( "apple", $fruits); // 
    print_r($values);//one


    #array_unique(): Removes duplicate values from an array.
    echo "<br><br>Searches the array for a given value(apple):<br>";
    echo "arr = [1,2,3,2,4,3,5,1]<br>";
    $arr =  [1,2,3,2,4,3,5,1];

    $unique_arr = array_unique($arr); // 
    print_r($unique_arr); // 1,2,3,4,5

?>