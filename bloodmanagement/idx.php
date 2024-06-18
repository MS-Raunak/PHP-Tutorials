<?php
    include 'connect.php';
    if(!$con){
        echo "Not Connected";
        exit;  
    }

    if(isset($_POST['donate_btn'])) {
        //echo "OK";
        $name =  $_POST['dname'];
        $email =  $_POST['email'];
        $dob =  $_POST['dob'];
        $gender =  $_POST['gender'];
        $blood =  $_POST['bloodgroup'];
        $adress =  $_POST['adress'];
        $mobile =  $_POST['mobile'];

        $sql = "INSERT INTO doner(dname, email, dob, gender, bloodgroup, adress, mobile)
                            VALUES('$name', '$email', '$dob', '$gender', '$blood', '$adress', '$mobile')";
        $inserted = mysqli_query($con, $sql) or die("Query Unsuccessfull");
        if($inserted){
            echo "Donated Successfully!";
            //$message = "Donated Successfully!";
            //header("Location: index.html?donation_message=" . urlencode($message));
            //header("Location:index.html",  echo "Donated");
        }else {
            echo "Donation Failed!";  
        }
    }
    else{
        echo "Fails..";
    }
    $query = "INSERT INTO bloodlist(bloodgroup) VALUES('$blood')";
    $inserted = mysqli_query($con, $query) or die("Query Unsuccessfull");
?>