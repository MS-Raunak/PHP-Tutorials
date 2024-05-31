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
            background: grey;
            padding:20px;
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
                echo "You can go to the party!!";
            else if($age==15)
                echo "You go to the school!!";
            else
            echo "You can not go the party!!";
        ?>
    </div>
</body>
</html>