<?php
//*********STRING IN PHP ********//
//We can create String in 2 ways in PHP 1."double quote", 2.'Single quote'
    echo "STRING<br>==============<br>";
    
    $str = "Chhaya";

    //Double Quote String is capable to process special character
    echo "Hello $str  : Printed by double quote String <br>";

    //Single Quote String is not capable to process special character

    echo 'Hello $str: Print by single quote String <br><br>';
    
    //################# STRING FUNCTIONS ##################
    echo "String Functions:<br>------------------------";
    //length of string
    echo "<br>Length Of $str: ". strlen($str);

    //Reverse String
    echo "<br>Reverse String($str): ". strrev($str);

    //Replace String
    echo "<br>Replace String($str): ". str_replace("C", "s", $str);
    echo "<br>Replace String($str): ". str_replace("Chhaya", "Shanaya", $str);

    //Getting sub-string index number
    echo"<br>Index Value SubStr(aya) in $str: ". strpos($str, 'aya');
   # echo var_dump($str, "aya");//string(6) "Chhaya" string(3) "aya"

   //Trim Blank Space
   echo "<br>Trim Side Blank Space: " . trim("  hello chhaya  ");

   //Explode String(Convert String To Array based on specified delimeter)
   echo "<br><br>Convert String (apple,banana,orange,grape) into array:- <br>";
   $string = "apple,banana,orange,grape";
   $fruits = explode(",", $string);
   print_r($fruits); //print_r is used to print or display contents of a variable in human readable format

   //Implode String(Join elements of an array into string based on given delimeter)
   $arr = array("apple","banana","orange","grape");
   echo "<br>Convert Array to String: ". implode(' ', $arr);

   //Convert String UpperCase/lowercase
   echo "<br>Convert String($str) in Uppercase: ". strtoupper($str);
   echo "<br>Convert String($str) in lowercase: ". strtolower($str);

   //Count Word In String
   $msg = "Hello Chhaya";
   echo "<br>Count word in String($msg): ". str_word_count($msg);

   //Substring of given string
   echo "<br>SubString in ($str, 3): ". substr($str, 3);

   //Split string
   echo "<br>Split String($str, 1): ";
   $arr_split = str_split($str, 2);
   print_r($arr_split);

   /**
    * In PHP, some of the most commonly used functions for working with strings include:

        
    *strlen(): Returns the length of a string.
    
    *strpos(): Finds the position of the first occurrence of a substring in a string.
    
    *substr(): Returns a part of a string based on a start position and length.
    
    *str_replace(): Replaces all occurrences of a search string with a replacement string.
    
    *strtolower() / strtoupper(): Convert a string to lowercase / uppercase.
    
    *trim(): Removes whitespace or other predefined characters from the beginning and end of a string.

    *explode(): Splits a string into an array by a specified delimiter.

    *implode(): Joins elements of an array into a string, using a specified delimiter.

    *str_split(): Splits a string into an array of characters.

    *strrev(): Reverses a string.
    */
    
?>