<?php
// PHP code for EOIR hotline check form submission
?>

<div class="container">
    <h2>EOIR Hotline Check</h2>
    <!-- EOIR hotline check form HTML -->
    <form action="process_eoir_hotline.php" method="POST">
        <!-- Form fields -->
        <input type="text" name="a_number" placeholder="Enter A Number">
        <button type="submit">Check</button>
    </form>
</div>