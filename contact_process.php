<?php
$message=$_POST['message'];
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];

if(!empty($message) || !empty($name) || !empty($email) || !empty($subject))
{
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="foodbuzz";

    // create a connection 
    $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if (mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());
    }
    else
    {
        $SELECT = "SELECT email FROM contact1 WHERE email=? Limit 1";
        $INSERT = "INSERT into contact1 (message,name,email,subject) values(?,?,?,?)";

        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0)
        {
            $stmt->close();
            $stmt->bind_param("ssss",$message,$name,$email,$subject);
            $stmt->execute();
            echo "New record inserted successfully";
        }
        else
        {
            echo "Someone already registered using the same email address";
        }
    }
    else
    {
        echo "All fields are required";
        die();
    }
}
?>