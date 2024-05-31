<?php
    // find lengh of string
    $str = "Namaste";
    $lenthOfStr = strlen($str); 
    echo "Length of given string is ". $lenthOfStr . " wow amazing concatination using dot(.)";

    //Count word in given string
    $str = "Hello Chhaya!!";
    echo "<br>Number of word in given string is " . str_word_count($str);

    //Reverse the given string
    echo "<br>Reversed string of Chhaya is ". strrev("Chhaya");

    //Finding position of a part of string in given string
    echo "<br>Index number of given part of string is ". strpos("This is cow", "is"); //2('is' strted with 2nd index)

    //Replace string
    $str = "Hello Chhaya!!";
    echo "<br>New String after Replacing, " . str_replace("Chhaya", "Shanaya", $str);
?>