<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database_name="project";

    $conn=mysqli_connect($servername,$username,$password,$database_name);
    

    if(isset($_POST['submit']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $country=$_POST['country'];
        $datet=$_POST['datet'];
        $guest=$_POST['guest'];

        $sql_query="INSERT INTO user_details (fname,lname,age,email,gender,country,datet,guest)
        VALUES ('$fname','$lname','$age','$email','$gender','$country','$datet','$guest')";

        if(mysqli_query($conn, $sql_query))
        {
            echo 'Thank You! <a href="./forms.html">Return</a>';
        }
        else{
            echo "Error: ".$sql . "" .mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>