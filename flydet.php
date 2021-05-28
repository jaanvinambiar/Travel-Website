<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database_name="project";

    $conn=mysqli_connect($servername,$username,$password,$database_name);
    

    if(isset($_POST['submit']))
    {
        $checks=$_POST['checks'];
        $froml=$_POST['froml'];
        $tol=$_POST['tol'];
        $ddate=$_POST['ddate'];
        $rdate=$_POST['rdate'];
        $adults=$_POST['adults'];
        $child=$_POST['child'];
        $clas=$_POST['clas'];

        $sql_query="INSERT INTO fly (checks,froml,tol,ddate,rdate,adults,child,clas)
        VALUES ('$checks','$froml','$tol','$ddate','$rdate','$adults','$child','$clas')";

        if(mysqli_query($conn, $sql_query))
        {
            echo 'Thank You! <a href="./fly.html">Return</a>';
        }
        else{
            echo "Error: ".$sql . "" .mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>