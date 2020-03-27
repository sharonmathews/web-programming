<html>
    <head>
        <title>Login Form</title>
        <script>
            function validate()
            {
                var x = document.mylogin.nm.value;
                var y = document.mylogin.pass.value;
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
        <form  name = "mylogin" method = "POST" action = "newlogin.php" onsubmit="return validate()">
            <h1>Login</h1>
                <table>
                <tr>
                    <td><label>username</label></td>
                    <td><input type="text" name = "nm" value ="<?php echo Cookie_val(1)?>"></td>
                </tr>
                <tr>
                    <td><label>Password</label></td>
                    <td><input type="password" name = "pass" value = "<?php echo Cookie_val(2)?>" /></td>
                </tr>
                <tr><td>  <input type="checkbox" name="rem[]" value = "1"/>
                    <label>Remember me</label>
              </td></tr>
              <tr><td><input type = "submit" name = "submit" /></td>
                <td><a href="#">Forget Password</a> &nbsp;<a href ="form2.html">Not a member?</a></td>
              </tr>
              </table>
              </form>
              </body>
              <?php
              function Cookie_val($ch)
              {
                  if($ch == 1)
                  {
                      if(isset($_COOKIE['nm']))
                      {
                          return $_COOKIE['nm'];
                      }else{
                          return;
                      }
                    }
                else{
                      if(isset($_COOKIE['pass'])){
                          return $_COOKIE['pass'];
                       }
                       else{
                              return;
                          }
                      }
                  
              }
              ?>
              </html>