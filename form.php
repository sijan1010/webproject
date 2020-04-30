<?php
    include 'config/connection.php';

$email=$user=$password='';
$error = array('email'=>'','name'=>'','password'=>'');
    if(isset($_POST['Submit'])){
            if(empty($_POST['email'])){
                $error['email']='Email is needed.';
                
            }
            else{
             $email=$_POST['email'];
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $error['email']= 'please enter valid email';
                    
                }
            }
        

        if(empty($_POST['user_name'])){
            $error['name']= 'name is needed.';

        }
        else{
            $user=$_POST['user_name'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$user)){
                $error['name']= 'Insert valid name';
            }
        }

        

        if(empty($_POST['password'])){
            $password = $_POST['password'];
            $error['password']= 'password is empty.';
        }

    if (array_filter($error)){
      //  echo 'array has error';
    }
    else{
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $user=mysqli_real_escape_string($conn,$_POST['user_name']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        //create sql
        $sql = "INSERT INTO user_login (Name,Email,Password) Values('$user','$email','$password');";

        if(mysqli_query($conn,$sql)){
        
        }
        else{
        echo 'query error ' . mysqli_error($conn);
        }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>

</head>
<style>
    h6{
        color:red;

    }
    
    .user_form{
        color:black;
        margin-top:6%;
        margin-left:20%;
        max-width:50%;
        height:auto;
        border:1px solid black;
        border-radius:2em;
        padding:1%;

    }
</style>

<?php 
    include 'header.php';
?>
    <div class="user_form">
        <div class="container">
            <div class="container frm">
            <form action="form.php" method= "POST">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email" id="email" />
        </div>
        <h6 class="error"><?php echo $error['email'];?></h6>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="name" name="user_name" id="user_name"  value=<?php echo $user; ?>>
        </div>
        <h6 class="error"><?php echo $error['name'];?></h6>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password"  name="password" id="pwd" value=<?php echo $password; ?>>
        </div>
        <h6 class="error"><?php echo $error['password'];?></h6>
        <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Remember me
            </label>
        <input type="reset" value = "reset"/>
        </div>
        
        <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
        </form>
    </div>
    </div>
    </div>

    

</html>