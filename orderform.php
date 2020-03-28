<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$landmark=$_POST['landmark'];
$cardno=$_POST['cardno'];
$cardexp=$_POST['cardexp'];
$cvc=$_POST['cvc'];
$cardholder=$_POST['cardholder'];


if(!empty($name) || !empty($email) || !empty($mobile) || !empty($address) || !empty($landmark) || !empty($cardno) || !empty($cardexp) || !empty($cvc) || !empty($cardholder))
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
        $SELECT = "SELECT email FROM order1 WHERE email=? Limit 1";
        $INSERT = "INSERT into contact1 (name,email,mobile,address,landmark,cardno,cardexp,cvc,cardholder) values(?,?,?,?,?,?,?,?,?)";

        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0)
        {
            $stmt->close();
            $stmt->bind_param("ssissiiis",$name,$email,$mobile,$address,$landmark,$cardno,$cardexp,$cvc,$cardholder);
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