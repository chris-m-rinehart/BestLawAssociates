<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best and Associates</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="header_top">
            <!-- Header content here -->
            <!-- Navigation bar -->
            <?php include 'navigation.php'; ?>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <p>We specialize in change.<br>
            Change in your work. Change in your family. 
            Change in your life.<br>
            We love what we do. We think you will too.</p>
        </div>
    </div>
    
    <!-- Carousel of Google Reviews -->
    <div id="carousel">
        <div class="imagecarousel">
            <!-- Insert images of Google reviews -->
            <?php include 'google_reviews.php'; ?>
        </div>
    </div>

    <!-- About Us Section -->
    <section id="about-us">
        <div class="container">
            <h2>About Us</h2>
            <div class="bio-container">
                <!-- Include PHP file with bios -->
                <?php include 'bios.php'; ?>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact-us">
        <div class="container">
            <h2>Contact Us</h2>
            <!-- Include PHP file with contact information and form -->
            <?php include 'contact.php'; ?>
        </div>
    </section>

    <!-- Picture of Philadelphia -->
    <div class="philadelphia-image">
        <!-- Insert picture of Philadelphia -->
        <img src="/assets/images/philadelphia.jpg" alt="Philadelphia Skyline">
    </div>

    <!-- Map of Our Location -->
    <section id="location-map">
        <div class="container">
            <h2>Our Location</h2>
            <!-- Include PHP file with Google Map -->
            <?php include 'map.php'; ?>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-wrapper">
                <!-- Include PHP file with service cards -->
                <?php include 'services.php'; ?>
            </div>
        </div>
    </section>

    <!-- EOIR Hotline Check -->
    <section id="a-number">
        <div class="container">
            <h2>EOIR Hotline Check</h2>
            <!-- Include PHP file with EOIR hotline check form -->
            <?php include 'a-number.php'; ?>
        </div>
    </section>

    <!-- Timely Policy Notices -->
    <section id="policy-notices">
        <div class="container">
            <h2>Timely Policy Notices</h2>
            <!-- Include PHP file with policy notices -->
            <?php include 'policy_notices.php'; ?>
        </div>
    </section>

    <!-- Facebook Page -->
    <section id="facebook-page">
        <div class="container">
            <h2>Facebook Page</h2>
            <!-- Include PHP file with Facebook page embed or link -->
            <?php include 'facebook_page.php'; ?>
        </div>
    </section>

    <!-- Ability to Update Website Content -->
    <section id="update-content">
        <div class="container">
            <h2>Update Website Content</h2>
            <!-- Include PHP file with instructions for updating content -->
            <?php include 'update_content.php'; ?>
        </div>
    </section>

    <footer>
        <!-- Footer content here -->
        <p>&copy; 2024 Best & Associates LLP. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <!-- Include any necessary JavaScript files or plugins here -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@floating-ui/core@1.6.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/@floating-ui/dom@1.6.3"></script>
</body>
</html>