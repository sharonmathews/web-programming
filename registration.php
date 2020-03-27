<?php
$servername="localhost";
$dbname="mydatabase";
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
$rpass=$_POST["cpass"];
$mail=$_POST["emailid"];
$datebirth=$_POST["date"];
$ph=$_POST["Phone"];
$zip=$_POST["Zipcode"];
$gen=$_POST["Gender"];
$lang=$_POST["LanguagesKnown"];
$add=$_POST["Address"];
$sql="INSERT INTO regform(Username, Password, ConfirmPassword,emailId,DOB,phone,zipcode,gender,language,address)VALUES('$name','$pass','$rpass','$mail','$datebirth',
'$ph','$zip','$gen','$lang','$add')";
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

