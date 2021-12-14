<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						// Check here
						header("Location: main.php");
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
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: cornflowerblue;
}
.container{
    width: 100%;
    display: flex;
    max-width: 850px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}
.login{
    width: 400px;
}
form{
    width: 250px;
    margin: 60px auto;
}
h1{
    margin: 20px;
    text-align: center;
    font-weight: bolder;
    text-transform: uppercase;
}

p{
    text-align: center;
    margin: 10px;
}
hr{
    border-top: 2px solid tomato;
}

.pic img{
    width: 450px;
    height: 100%;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
}

form label{
    display: block;
    font-size: 16px;
    font-weight: 600;
    padding: 5px;
}
input{
    width: 100%;
    margin: 2px;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid gray;
}
button{
    border: none;
    outline: none;
    padding: 8px;
    width: 252px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: tomato;
}

button:hover{
    background: rgba(214, 86, 64, 1);
}
p{
    margin: 20px;
}
a{
    color: black;
    text-decoration: none;
}



	</style>

<div id="box">
			<form method ="post">
				<img src="assets/img/avatar.svg">
				<h2 class="title">Login Page</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>

           		   <div class="div">
                  <label>Username</label>
           		   		<input id="text" type="text" name="user_name">
           		   </div>
           		</div>
           		
               <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>

           		   <div class="div">
                  <label>Password</label>
						   <input id="text" type="password" name="password">
            	   </div>

            	</div> 
				<br>				
				<input id="button" type="submit" value="Login"><br><br>

			</form>
			<button> <a href="signup.php" input id="button-2">Click to Signup</a><br><br></button>
		</form>
	</div>
</body>
</html>
