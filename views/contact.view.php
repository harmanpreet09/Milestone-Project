<?php require "partials/head.php";
?>
<?php require "partials/nav.php";
?>
    <section class="hero_2 hero">
            <div class="container">
                <h2>Welcome to contact Page</h2>

               
            </div>
        </section>
        <section class="contact-content">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have questions or feedback? Contact us using the form below or the provided contact information.</p>

            <div class="contact-form">
                <h3>Contact Form</h3>
                <form action="#" method="post">
                    <label for="name">Full Name:</label><br>
                    <input type="text" id="name" name="name" required><br>

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br>

                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" rows="5" required></textarea><br>

                    <input type="submit" value="Submit">
                </form>
            </div>

            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><strong>Email:</strong> info@example.com</p>
                <p><strong>Phone:</strong> +123 456 789</p>
            </div>
        </div>
    </section>
        <?php require "partials/footer.php";
?>
