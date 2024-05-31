<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function in Php</title>

    <style>
        *{
            padding:0;
            margin: 0;
            box-sizing:border-box;
        }
        .container{
           background: #0001;
            max-width: 60%;
            margin: auto;
            padding:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Let's learn functions in Php</h1>
        <p>(In php we can call the function before it's creation)</p>
        <?php
            fun();
            function fun() {
                echo "<br>function executed<br>";
            }

            function print1To5(){
                for($i=1; $i<=5; $i++) {
                    echo "<br>value of i: $i";
                }
            }
            //print1To5();

            //Check Prime
            function isPrime($num) {
                $flag = true;
                for($i=2; $i<=$num/2; $i++){
                    if($num%$i==0){
                        $flag = false;
                        break;
                    }
                }
                if($flag==true) 
                    echo "<br>$num is a prime number";
                else
                    echo "<br>$num is not a prime number";
            }
            //isPrime(19);


             //Check even number
             function isEven($num) {
                if($num%2==0) return true;
                return false;
            }

            //Check Range of Even numbers
            function rangeOfEven($st, $lt){
                echo "<br>Even numbers between $st to $lt<br>";
                for($i=$st; $i<=$lt; $i++) {
                    if(isEven($i))
                        echo "$i, ";
                }
            }
            rangeOfEven(1, 20);

        

           
            
        ?>
    </div>
</body>
</html>