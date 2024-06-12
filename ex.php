<?php
//*********OPERATORS********//
    //Arithmetic Operator
    echo "Arithmetic<br>==============<br>";
    $a = 10; $b=10;
    echo "Sum:".$a+$b . "<br><br>";
//###############################################################

    //Relational Operator(Comparison)
    echo "Relational(Comparison)<br>=================<br>";

    echo "10<20: ".(10<20) ."<br>"; //1
    echo "10<20: ".(10>20). "<br>"; //blank
    echo "10<20: ".var_dump(10<20). "<br>";  //bool(true)
    echo "10<20: ".var_dump(10==20). "<br>";  //bool(flase)
    echo "10<20: ".var_dump(10<=20). "<br><br>";  //bool(true)
//################################################################

    //Logical Operator//
    echo "Logical<br>==============<br>"; 
    echo "Logical(AND)<br>==============<br>"; 
    //AND operator(and/AND/&&)
    echo "6>1 and 6<10:  ";
    echo var_dump(6>1 and 6<10); //bool(true)

    echo "<br> 1>6 and 1<10:  ";
    echo var_dump(1>6 and 1<10); //bool(flase)

    //OR operator(or/||)
    echo "<br><br>Logical(OR)<br>=============="; 
    echo "<br> 1>6 OR 1<10:  ";
    echo var_dump(1>6 or 1<10); //bool(true)

    //NOT operator(or/!)
    echo "<br><br>Logical(NOT)<br>=============="; 
    echo "<br> !(1>6):  ";
    echo var_dump(!(1>6)); //bool(true)

    //Xor operator: if both operands are different the return true otherwise false
    echo "<br><br>XOR<br>==============<br>"; 
    echo "true xor true:";
    echo var_dump(true xor true); //bool(flase)
    echo "<br>true xor false:";
    echo var_dump(true xor false); //bool(true)
//################################################################

    //Increment Opertaor//
    echo "<br><br>INCREMENT<br>==============<br>"; 

    //Pre Increment/Decrement Opertaor
    echo "Increment/Decrement(Pre)<br>==============<br>"; 
    $m = 10; 
    echo "m: 10";
    echo "<br>++m: ". ++$m; //11
    echo "<br>--m: ". --$m; //10
    

     //POST Increment/Decrement Opertaor
     echo "<br>Increment/Decrement(Post)<br>==============<br>"; 
     $k = 10; 
     echo "k:10"; 
     echo "<br>k++: ". $k++; //10
     echo "<br>k: ". $k; //11
     echo "<br>k--: ". $k--; //11
     echo "<br>k: ". $k; //10
//#################################################################
     

     //Assignment opertor
     echo "<br><br>Assignment<br>==============<br>"; 
     echo "10==10: ";
     echo var_dump(10==10);

     


?>