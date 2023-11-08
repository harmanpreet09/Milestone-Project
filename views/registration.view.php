
<?php
include("connection.php");
include("functions.php");
?>
<?php require "partials/head.php";
?>
<?php require "partials/nav.php";
?>
 
        <section class="registration-form">
        <div class="container">
            <h2>Register Now</h2>
            <form action="#" method="post">
                <label for="name">Full Name:</label><br>
                <input type="text" id="name" name="name" required><br>
                
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
        <?php require "partials/footer.php";
?>
