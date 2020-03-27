<?php
$servername="localhost";
$dbname="mdb";
$conn=new mysqli($servername,"root","",$dbname);
if($conn->connect_error)
{
    die("connection failed:".$connect->connect_error);
}
else
{
    extract($_POST);
}
if(isset($_POST['submit']))
{
    $terms=$_POST['terms1'];
    $t1="";
    foreach($terms as $t)
    {
        $t1.=$t.",";
    }
}
$name=$_POST["Username"];
$pass=$_POST["Password"];
$sql="INSERT INTO logdetails(Username,Password)VALUES('$name','$pass')";
if($conn->query($sql) == TRUE)
{
    header('Location:Login.html');
    echo "success";
    exit();
}
else{
    header("Location:register.php?msg=failed");
    exit();
}
$conn->close();
?>
