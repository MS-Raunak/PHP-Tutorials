<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorials</title>
</head>
<body>
    <h1>This is my first php code</h1>
   
    <!-- 
        - Php is not a case sensitive language
        - echo is used to print value
     -->
    <?php 
         echo "hello world!!";
    ?>
     <!-- 
            Variable: 
            Syntax $Variable varName;
            php is dynamically typed programming language.
            putting semicolon is mandatory after completing the statement
     -->

    <?php

    $Variable1 = 10;
    $Variable2 = 20;

    $a = 30;

    $sum = $Variable1 + $Variable2 + $a;

    echo $Variable1; 
    echo"<br>"; //newLine

    echo $Variable2;  
    echo"<br>";

    echo $a;           
    echo"<br>";
    ?>

    <!-- Operators in Php -->
    <?php
        echo "<br><h2>Operator</h2>";
        // Aritmetic Opertaor
        echo "Sum of $Variable1 + $Variable2 + $a =  $sum";  //Concatination
       
        // Assignment Opertaor
        $var1 = 20;
        $newVar = $var1;
        $newVar+=1;
        echo "<br> Value of new variable is $newVar";

        // Comperator Opertaor
        echo "1==4";
        echo var_dump(1==4);
        echo "<br>";

        echo "1<4";
        echo  var_dump(1<4);
        echo "<br>";

        echo "1>4";
        echo var_dump(1>4);
        echo "<br>";

        echo"1<=4";
        echo var_dump(1<=4);
        echo "<br>";

        echo"1>=4";
        echo var_dump(1>=4);
        echo "<br>";

        // Increment/Decrement Opertaor
        $Variable = 4;
        echo $Variable; //4
        echo "<br>";

    
        echo $Variable++; //4
        echo "<br>";
 
        echo $Variable--; //5
        echo "<br>";
 
        echo --$Variable; //3
        echo "<br>";

        echo ++$Variable; //4
        echo "<br>";

        // Logical Opertaor
        // and(&&), or (||),xor, (!)

        $myAge = 25;

        echo var_dump($myAge > 10 and $myAge < 30); //true
        echo"<br>";
        echo var_dump($myAge > 5 && $myAge <= 10 ); //false
        echo"<br>";

        echo var_dump($myAge > 10 or $myAge < 20); //true
        echo"<br>";
        echo var_dump($myAge > 10 || $myAge < 20); //true
        echo"<br>";

        echo var_dump($myAge!=10);//true
        echo"<br>";

        //xor: if both operands are different the return true otherwise false
        echo var_dump(true xor true);//false
        echo"<br>";
        echo var_dump(false xor false);//false
        echo"<br>";
        echo var_dump(true xor false);//true
        echo"<br>";
    ?>

    <!-- Data Types in Php -->
    <?php
        echo "<h2>Data Types in Php</h2>";
        // 1.String
        $varStr = "This is string";
        echo var_dump($varStr);
        echo "<br>";

        // 2.Integer
        $varInteger = 20;
        echo var_dump($varInteger);
        echo "<br>";

        // 3.Float
        $varFloat = 20.2;
        echo var_dump($varFloat);
        echo"<br>";

        // 4.Boolean
        $varBoolean = true;
        echo var_dump($varBoolean);
        echo"<br>";

        // 5.Array
        $varArray = [10,20,30];
        echo var_dump($varArray);
        echo"<br>";

        // 6.Object
       
    ?>
</body>
</html>