<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if(isset($_POST['submit']))
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

                    // echo "<script type='text/javascript'>alert('$user_data');</script>";
					
					if($user_data['password'] == $password)
					{

						$_SESSION['email'] = $user_data['email'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet">
    <script src="aura.js"></script> 
    <link rel="stylesheet" href="aura.css">
    <title>Forever Young</title>
    <style>
    body{
        background-image: url('images\signupbg.jpg');
    }
    </style>
</head>
<body>
        <div class="content">
            
                <h1>
                    LogIn
                </h1>
                <hr>
                <form method="POST">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                
                               <label for="email"><b>Email</b></label><br>
                                <input type="text" class="w3-input" name="email" placeholder="email" required><br>
                                <label for="password"><b>Password</b></label><br>
                                <input type="password" class="w3-input" name="password" placeholder="Password" required><br>
                                <input type="submit" name="submit" value="login" ><br>
                                <a href="#" class="forget_pasw">Forget Password?</a>
                            
                            </div>
                        </div>
                    </div>
                </form>

            </div>
</body>
</html>
