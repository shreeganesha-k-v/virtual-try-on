<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if(isset($_POST['submit']))
	{
		//something was posted
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
        $confirm = $_POST['confirm'];

		if(!empty($email) && !empty($password) && !empty($name))
		{
            if($password == $confirm){
                //save to database
                $query = "insert into users (name,email,password) values ('$name','$email','$password')";

                mysqli_query($conn, $query);
                header("Location: login_aura.php");
                die;
            }
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet">

<script src="aura.js"></script> 
<link rel="stylesheet" href="aura.css">
<title>Forever Young</title>
</head>
<body>
    
    <form method="POST">
        <div class="signup">
            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images\loginbg.jpg" width="700px" height="700px">
                        </div>
                        <div class="col-sm-6">
                            
                            <form class="signup_form" method="POST" >
                                <h1 class="heading1">Sign Up</h1>
                                <p>Please fill the following details to make an account</p>
                                <hr>
                                <label for="name"><b>Full Name</b></label><br>
                                <input type="text" class="w3-input" placeholder="Full Name" name="name" required><br>
                                <label for="email"><b>Email</b></label><br>
                                <input type="text" class="w3-input" placeholder="Email" name="email" required><br>
                                <label for="password"><b>Password</b></label><br>
                                <input type="password" class="w3-input" placeholder="Enter Password" name="password" required><br>
                                <label for="confirm"><b>Repeat Password</b></label><br>
                                <input type="password" class="w3-input" placeholder="Repeat Password" name="confirm" required><br>
                                <label>
                                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                                    <br>
                                    Already have an account?<a href="./login_aura.php" style="color:dodgerblue" class="login" >Login</a>
                                </label>
                            
                                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue" target="_blank">Terms & Privacy</a>.</p>
                            
                                <div class="clearfix">
                                    <button type="button" class="cancelbtn">Cancel</button>
                                    <button type="submit" name="submit" class="signupbtn">Sign Up</button>
                                                
                                </div>
                            </div>
                        </div>

                        </div>
                        
                    </form>

</body>
</html>




