
<?php 
session_start();

include($proj_root . "connection.php");
include($proj_root . "functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,username,password) values ('$user_id','$username','$password')";

			mysqli_query($con, $query);

			// header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<?php require "partials/head.php";
?>
<?php require "partials/nav.php";
?>
 
        <section class="registration-form">
        <div class="container">
            <h2>Register Now</h2>
            <form action="#" method="post">
               
                
                <label for="username">usename</label><br>
                <input type="text" id="username" name="username" required><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
        <?php require "partials/footer.php";
?>
