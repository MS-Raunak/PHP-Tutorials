<?php
    include 'connect.php';
    if(!$con){
        echo "Not Connected";
        exit;  
    }

    if(isset($_POST['gainer_btn'])) {
        //echo "OK";
        $name =  $_POST['gname'];
        $email =  $_POST['email'];
        $dob =  $_POST['dob'];
        $gender =  $_POST['gender'];
        $blood =  $_POST['bloodgroup'];
        $adress =  $_POST['adress'];
        $mobile =  $_POST['mobile'];

        $sql = "INSERT INTO gainer(gname, email, dob, gender, bloodgroup, adress, mobile)
                            VALUES('$name', '$email', '$dob', '$gender', '$blood', '$adress', '$mobile')";
        $inserted = mysqli_query($con, $sql) or die("Query Unsuccessfull");
        if($inserted){
            echo "Blood Issued Successfully!<br>";
            echo "Patient Name: $name <br>";
            echo "Patient DOB: $dob <br>";
            echo "Issued Blood : $blood <br>";
            echo "Adress  : $adress <br>";
        }else {
            echo "Failed to getting blood!";  
        }
    }
    else{
        echo "Fails..";
    }
?>