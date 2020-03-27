<?php
$servername = "localhost";
$dbname = "mdb";

//create connection
$conn = mysqli_connect($servername, "root","",$dbname);
//check connection
if(mysqli_connect_errno())
{
    die("connection failed : ". mysqli_connect_error());
    exit();
}
    extract($_POST); 
    /*if(isset($_POST['submit']))
    {
        $terms = $_POST['rem'];
        $t1 ="";
        foreach($terms as $t)
        {
            $t1.= $t."";
        }
    }*/
    $sql = "SELECT * FROM logdetails WHERE Username='$Username' AND Password = '$Password'";
    
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    

   if($count >= 1)
    {
        $row = mysqli_fetch_row($res);
        $Username = $row[0];
        session_start();
        $_SESSION['SUsername'] = $Username;
       echo $_SESSION['status'] . "Session status : Login successful";

        if(isset($_POST['rem']))
        {
            setcookie("Username", $Username, time()+60*60*24);
            setcookie("Password", $Password, time()+60*60*24);
        }
  
        else{
            setcookie("Username","",time()-5);
            setcookie("Password","",time()-5);
        }
        header("location:home.php");
    }
    else{
        /*unset($_SESSION['Sname']);
        unset($_SESSION['status']);
        echo "Login Failed!!!";
        header("location:login.php");*/
        session_start();
        if(isset($_SESSION['Username'])){
            unset($_SESSION['Username']);
        }
    }
mysqli_close($conn);
    ?>