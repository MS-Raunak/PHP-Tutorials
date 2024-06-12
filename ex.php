<?php
//*********CONDITIONAL STATEMENTS ********//
    //1.If-Else Statement
    echo "If-Else Statement<br>==============<br>";

    $age = 18;
    echo "Your Age: ". $age. "<br>";

    if($age<10){
        echo "You are Minor!!<br>";
    }
    else{
        echo "You are not Minor<br>";
    }

    //2.If-Else If-Else Statement
    echo "<br>If-Else If-Else Statement<br>==============<br>";

    $age = 3;
    echo "Your Age: ". $age. "<br>";

    if($age<=5){
        echo "You are Child!!<br>";
    }
    else if($age< 18 && $age >5){
        echo "You are Minor<br>";
    }
    else{
        echo "You are not Minor<br>";
    }

    //3.Nested If-Else or Ladder If Else
    echo "<br>Nssted If-Else Statement<br>==============<br>";

    $age = 50;
    echo "Your Age: ". $age. "<br>";

    if($age<18){
        echo "You are Minor!!<br>";
    }
    else{
        if($age >= 18 && $age <=40)
            echo "You are Eligible For Marriage!!<br>";
        else
            echo "You are Overaged!!<br>";
    }

    //Switch-Case Statement
    //2.If-Else If-Else Statement
    echo "<br>Switch-Case Statement<br>=================<br>";
    echo "****WELCOME TO QUIZ GAME*****<br>";
    echo "Which City OF India is Known As Silicon Valley Of India?<br>";
    echo "1.Hydrabad<br>2.Noida<br>3.Bengaluru<br>4.Pune<br>";

    $choice = 4;
    echo "<br>Your Choice: " . $choice."<br>";

    switch ($choice) {
        case 1:
            echo "Wrong Answer<br>";
            break;

        case 2:
            echo "Wrong Answer<br>";
            break;

        case 3:
            echo "Correct Answer!! Bengaluru";
            break;

        case 4:
            echo "Wrong Answer<br>";
            break;
        
        default:
            echo "Invalid Input!!";
            break;
    }
?>