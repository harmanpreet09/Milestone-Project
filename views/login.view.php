
<?php 

session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password) && !is_numeric($username)) {
        // read from database
        $query = "select * from users where username = '$username' limit 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data['password'] === $password) {
                $_SESSION['user_id'] = $user_data['user_id'];
                displayLoginSuccessMessage(); // Call the function to display success message
            } else {
                echo "Wrong username or password!";
            }
        } else {
            echo "Wrong username or password!";
        }
    } else {
        echo "Wrong username or password!";
    }
}

?>
<?php require "partials/head.php";
?>
<?php require "partials/nav.php";
?>
 
        <section class="registration-form">
        <div class="container">
            <h2>Login Now</h2>
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
