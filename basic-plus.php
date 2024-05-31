<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .container {
            max-width:80%;
            margin: auto;
            background: #0001;
            padding:20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Let's Learn If-Else Statements</h1>
        <p>Your party status is here:</p>

        <?php
            $age =15;
            if($age >= 18)
                echo "You can go to the party!!<br>";
            else if($age==15)
                echo "You go to the school!!<br>";
            else
            echo "You can not go the party!!<br>";

            //Loops
            //1. while loop
            $idx=0;
            while($idx <= 10){
                //echo "<br> Value of i: $idx";
                $idx++;
            }

           // 2.for loop
           for($i=0; $i<=5; $i++) {
            //echo "$i ";
           }

           //3.do-while loop
           $j=10;
           do{
           // echo "<br> value of j: $j";
           }while($j<10);
            
        //Array: Accepts Hetrogeneous values
        
         $arr = array(10,20,30, "php", "java");
         //echo "<br>element $arr[0] present on 0th index<br>";
         //echo "Total elements in array: ";
         //echo count($arr); //size of array
         echo "Array iteration using tradional for loop";
         for($i=0; $i<count($arr); $i++) {
            echo "<br>arr[$i]: $arr[$i]";
         }
         //forEach loop with array
         echo "<br>Array iteration using enhanced foreach loop";
         foreach($arr as $value){
            echo "<br>value of arr: $value";
         }

        ?>
    </div>
</body>
</html>