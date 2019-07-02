<html>
<body>
        <style> 
                input[type=text] {
                width: 25%;
                padding: 11px 21px;
                margin: 5px 2;
                border: 1px solid black; 
                }
                input[type=submit] {
                  width: 10%;
                  padding: 12px 20px;
                border: 1px solid #555;
                 background-color: blue;
                 color: white;
                    
                }
                
                </style>
<center>

<form action="" method="POST">

<b>Enter your Username:</b><input type="text" name="uname" required=""><br><br>

<b>Enter your Password:</b><input type="text" name="upassword" required=""><br><br>

<input type="submit" name="submit" value="Login">

<form>
        <?php 
        include("config.php");
        
        if(isset($_POST['submit']))
        {
        $uname = $_POST['uname'];
        $upassword = $_POST['upassword'];
        
        $res = mysqli_query($mysqli,"select * from demo.loginform where user='$uname'and password='$upassword'");
        $result=mysqli_fetch_array($res);
        if($result)
        {
        echo "Login Successfully!";
        //header("location:pageAfterLogin.php");   // you can create pageAfterLogin.php page for redirection 
            
        }
        else
        {
            echo "Login failed!";
        }
        }
        ?>
</center>        
</body></center>
</html>