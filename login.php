<html !DOCTYPE>
<head>
<meta charset="UTF-8">
<title>Log In</title>
<style>
body {
  background-image: url('back6.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<script>
            function validate()
            {
                var x = document.mylogin.Username.value;
                var y = document.mylogin.Password.value;
                if(y=="" || y==null)
                {
                    alert("Input password");
                    return false;
                }else if(x == "" || x == null)
                {
                    alert("Input username");
                }
                return true;
            }
        </script>
</head>
<body>
    
    <header style="margin-left: 30%;">
        
    <h1 style="margin-left: 12%;">Sign In </h1>
</header>

    <form action="home.php" name="logindetails" onsubmit="return loginvalidate()" method="POST">
        <table style="margin-left: 30%">
            <tr>
                <td colspan="3"><label for="Username">Username</label></td>
                <td colspan="5"> <input type="text" name="Username"></td>
            </tr>
        <tr>
            <td colspan="3"> <label for="password">Password</label></td>
            <td colspan="5"><input type="password" name="Password"></td>
        </tr>
        <tr><td>  <input type="checkbox" name="rem[]" value = "1"/>
                    <label>Remember me</label>
        <center>
        <tr> 
            <td><input type="submit"></td>
        </tr>
        </center>
        </table>
        </form>
</body>
 <?php
              function Cookie_val($ch)
              {
                  if($ch == 1)
                  {
                      if(isset($_COOKIE['Username']))
                      {
                          return $_COOKIE['Username'];
                      }else{
                          return;
                      }
                    }
                else{
                      if(isset($_COOKIE['Password'])){
                          return $_COOKIE['Password'];
                       }
                       else{
                              return;
                          }
                      }
                  
              }
              ?>
</html>
