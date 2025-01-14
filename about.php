<?php
/* Template Name: About Us */
get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Culture Connect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #ffffff;
            color: #2e3c4b;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 40px 0;
        }

        .hero img {
            max-width: 48%;
            height: auto;
            border-radius: 10px;
        }

        .hero .text-content {
            max-width: 48%;
        }

        .mission-section {
            margin: 40px 0;
        }

        .mission-card {
            background: #f8f9fa;
            color: #2e3c4b;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .signup-section {
            text-align: center;
            margin-top: 40px;
        }

        .signup-section input[type=email] {
            border: 2px solid #ff7900;
            border-radius: 5px;
            padding: 10px;
            width: 300px;
            margin-right: 10px;
        }

        .signup-section button {
            background-color: #ff7900;
            border: none;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .signup-section button:hover {
            background-color: #e66900;
        }
    


    </style>
</head>
<body>

<main class="container">
    <section class="hero">
    <img src="<?php echo get_template_directory_uri(); ?>/Images/logo du site.png"alt="About Us">
        <div class="text-content">
            <h1>Who We Are?</h1>
            <p class="lead">
                Culture Connect is a platform created to bring people from different parts of the world together through culture, art, and common interests. We believe that through understanding traditions, language, and customs, we can create a stronger and more harmonious community.
            </p>
        </div>
    </section>

    <section class="row mission-section">
        <div class="col-md-6">
            <div class="mission-card">
                <h3>Our Mission</h3>
                <p>
                    We strive to: Create a space for the exchange of cultural experiences. To strengthen international cooperation and mutual understanding. Support local initiatives that promote cultural heritage.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mission-card">
                <h3>Why Culture Matters?</h3>
                <p>
                    Culture is a bridge that unites people despite their differences. We are proud that our platform helps to strengthen this bridge, opening the doors for friendship, cooperation, and mutual respect.
                </p>
            </div>
        </div>
    </section>

    <div class="container my-5">
    <h2 class="text-center mb-4">Stay Connected</h2>
    <form method="post" action="subscribe.php" class="d-flex justify-content-center align-items-center gap-3">
        <input 
            type="email" 
            name="email" 
            class="form-control" 
            placeholder="Enter your email address" 
            required 
            style="max-width: 400px; border-radius: 20px; padding: 10px;">
            <button type="button" class="btn btn-primary">Subscribe</button>
    </form>
</div>
<?php
    get_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



