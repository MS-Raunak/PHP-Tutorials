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
     
    <?php  echo"hello world!!";
    ?>
    <h1>
        <?php 
            echo"Hello I am PHP" 
        ?>
    </h1>

    
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
    echo $Variable2;
    echo $a;

    echo "Sum of $Variable1 + $Variable2 + $a =  $sum";  //Concatination
    ?>
</body>
</html>