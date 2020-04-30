<?php

    $name=$email=$password="";
    $error=array('name'=>'','email'=>'','password'=>'');
    if(isset($_POST["signup_submit"])){
        //validate name
        if(empty($_POST['u_name'])){
            $error['name']= "name is empty";
        }
        else{
            $name = $_POST['u_name'];
            if(!preg_match("/^[a-zA-Z]*$/",$name)){
                $error['name']= "Type correct username";
            }
            else{
            $servername = "localhost";
            $username = "sijan";
            $password = "localhost123";
            $dbname = "webproject";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT FROM 'user login' WHERE username='sijan'";
            $result = $conn->query($sql);

            if ($result->mysqli_num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo $row["username"];
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            }

         }
         //validating email
         if(empty($_POST['email'])){
			$error['email'] = 'An email is required';
		}
         else{
                $email = $_POST['email'];
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $errors['email'] = 'Email must be a valid email address';
                }
            }
         

         //validing password
         if(empty($_POST['u_password'])){
             $error['password'] = "enter password";
    }
    else{
        $password=($_POST['u_password']);
     }
    }


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
<form action="login.php" method="POST" name="logIn" class="login">
    <span class="form_topic" >Login</span>
    <hr>
    <label for="Username">UserName: </label><br>
    <input type="text" name ="Username" id="Username" class="input"  required;/><br>
    <label for="password">Password: </label><br>
    <input type="password" name = "password" id="password" class="input" required;/>
    <label for="forget_password"></label>
    <input type = "button" value="Forget password" name="forget_password" class="forget_password" id="forget_password"/>
    <label for="submit"></label><br>
    <input type="submit" value = "Log In"id="submit" class="submit" name="login_submit"/>    
    
</form>
<hr>
<hr>
    <form action="loginform.php" method="POST" name='signup' class="signup">
        <span class="form_topic">Sign Up</span>
        <hr>
        <label for="U_name">Name:</label><br>
        <input type="text" name ="u_name" id="U_name" class="input" required value="<?php echo "$name"; ?>" /><br>
        <p class="error" style='color:red;margin-top:0%;margin-left:40%; margin-right:0%;font-size:0.8em; margin-bottom:0px;'><?php echo $error['name'] ?></p>
        <label for="Email">Email:</label><br>
        <input type="email" name = "email" id="email" class="input" required value="<?php echo "$email"; ?>" /><br>
        <p class="error" style='color:red;margin-top:0%;margin-left:40%; margin-right:0%;font-size:0.8em; margin-bottom:0px;'><?php echo $error['email'] ?></p>
        <label for="u_password">Password</label><br>
        <input type="password" name="u_password" id="u_password" class="input" required value="<?php echo "$password"; ?>" required; /><br>
        <p class="error" style='color:red;margin-top:0%;margin-left:40%; margin-right:0%;font-size:0.8em; margin-bottom:0px;'><?php echo $error['password'] ?></p>
        <input type="checkbox" name="remember_password" id="remeber_password" />
        <label for="remember password" >Remember Password</label></span>
        <label for="signup"></label><br>
        <input type="submit" name="signup_submit" value = "signup" class="submit" id ="sign up" />
    </form>
</body>
</html>