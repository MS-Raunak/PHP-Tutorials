<?php
//*********LOOP STATEMENTS ********//
    //1.While Loop
    echo "While Loop<br>==============<br>";

    echo "Print 1 to 5:<br>";
    $a=1;

    while($a<=5){
        echo $a. ", ";
        $a++;
    }

    //2.do-While Loop
    echo "<br><br>do-while Loop<br>==============<br>";
    echo "Print 5 to 1:<br>";

    $a=5;

    do{
        echo $a. ", ";
        $a--;
    }while($a<5 && $a>0);

    //3.For Loop
    echo "<br><br>For Loop<br>==============<br>";
    echo "Print Table Of 2:<br>";

    for($i=1; $i<=10; $i++){
        echo "2X".$i . "= " . 2*$i;
        echo "<br>";
    }
   

    
    
?>