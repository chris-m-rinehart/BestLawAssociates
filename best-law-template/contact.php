<?php
// PHP code to handle contact form submission
?>

<div class="container">
    <h2>Contact Us</h2>
    <!-- Contact form HTML -->
    <form action="process_contact_form.php" method="POST">
        <!-- Form fields -->
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <textarea name="message" placeholder="Your Message"></textarea>
        <button type="submit">Submit</button>
    </form>
</div>