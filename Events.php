<?php
/*
Template Name: Events
*/
include 'data.php';
get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events | Culture Connect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .event-card {
            background-color: #2e3c4b;
            color: white;
            border-radius: 20px;
            overflow: hidden;
        }

        .event-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .event-card-title {
            background-color: #ff7900;
            padding: 10px;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .more-info-btn {
            background-color: #ff7900;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .more-info-btn:hover {
            background-color: #e66900;
        }
    </style>
</head>
<body>
<main class="container py-5">
    <h1 class="text-center mb-5">Events</h1>

    <div class="row g-4">
        <?php foreach ($events as $event): ?>
            <div class="col-md-4">
                <div class="event-card">
                <img src="<?php echo $event['img']; ?>" alt="<?php echo $event['title']; ?>">
                    <div class="event-card-title">
                        <?= $event['title'] ?>
                    </div>
                    <div class="p-3">
                        <p><?= $event['description'] ?></p>
                        <a href="<?= $event['link'] ?>" class="btn more-info-btn">More Info</a> 
                    </div>
                </div>
            </div>
            
        <?php endforeach; ?>
    </div>
</main>
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
        <button 
            type="submit" 
            class="btn" 
            style="background-color: #FF7900; color: white; border-radius: 20px; padding: 10px 20px;">
            Subscribe
        </button>
    </form>
</div>

<?php get_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</button>
