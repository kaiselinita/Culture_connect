<?php 
/* Template Name: Greece */
get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athens, Greece  | Culture Connect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container py-5">
    <!-- Заголовок и описание -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Athens, Greece</h1>
            <p class="fs-5 text-muted">
            Athens, Greece is the cradle of Western civilization and democracy. This city combines ancient ruins, a modern energetic culture and a stunning cuisine that delights with its flavor and variety.
            </p>
            <a href="http://localhost:8888/wordpress-3/events/" class="btn btn-secondary px-4 py-2">Back to Events</a>
        </div>
        <div class="col-md-6 text-center">
        <img src="http://localhost:8888/wordpress-3/wp-content/uploads/2024/12/Greece-scaled.jpg" alt="Athens, Greece" class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Карточки с информацией -->
    <section>
        <div class="row g-4">
            <!-- Карточка 1 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Historical heritage</h4>
                        <p class="card-text text-muted">
                        Athens is the center of ancient Greece, a city of philosophy, science and art. Socrates, Plato and Aristotle lived here.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 2 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Mythology and art</h4>
                        <p class="card-text text-muted">
                        Athens, named after the goddess Athena, represents protection and wisdom. The city is full of monuments associated with ancient Greek myths.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 3 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Modern culture</h4>
                        <p class="card-text text-muted">
                        Athens is a vibrant city with theaters, street art, music festivals and an active nightlife.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 4 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Museums</h4>
                        <p class="card-text text-muted">
                        <h6> <br>Acropolis Museum</h6>
                        A modern museum at the foot of the Acropolis that houses ancient Greek artifacts, including the famous Parthenon marbles.</br>

<h6><br>National Archaeological Museum (National Archaeological Museum)</h6>
One of the largest museums in the world with an extensive collection of ancient Greek sculptures, vases and jewelry.</br>

<h6><br>Benaki Museum</h6>
Presents art and artifacts from all eras of Greek history, from ancient to modern times.</br>

<h6><br>Museum of Cycladic Art.</h6>
Dedicated to the art and culture of the Bronze Age Cycladic civilization.</br>

<h6><br>The Agora of Athens (Ancient Agora)</h6>
An archaeological complex with a museum where you can see the ruins of an ancient market place.</br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 5 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">National food</h4>
                        <p class="card-text text-muted">
                        <h6><br>Gyros</h6>

                        Greek-style shawarma - grilled meat served in flatbread with tzatziki, potatoes and vegetables.</br>

<h6><br>Moussaka</h6>
A casserole of eggplant, potatoes and minced meat covered with creamy béchamel sauce.</br>

<h6><br>Souvlaki</h6>
Skewered meat, often served with flatbread and sauce.</br>

<h6><br>Dolma (Dolmadakia)</h6>
Grape leaves stuffed with rice, herbs and sometimes meat.<br>

<h6><br>Choriatiki Salata (Choriatiki Salata)</h6>
Choriatiki Salata (Choriatiki Salata)
Traditional Greek salad with tomatoes, cucumbers, onions, olives and feta cheese.
</br>

<h6><br>Tzatziki (Tzatziki)</h6>
Refreshing sauce made of yogurt, cucumber and garlic.</br>

<h6><br>Baklava</h6>
Puff pastry dessert with nuts and honey syrup.</br>

<h6><br>Greek wine and ouzo</h6>

Try the local wines or the aniseed vodka ouzo.</br>
                        </p>
                    </div>
                </div>
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
        <button 
            type="submit" 
            class="btn" 
            style="background-color: #FF7900; color: white; border-radius: 20px; padding: 10px 20px;">
            Subscribe
        </button>
    </form>
</div>

    <!-- Блок Travel Tips -->
    <section class="mt-5">
        <div class="p-4 bg-warning text-white rounded shadow">
            <h2 class="fw-bold text-center mb-3">Travel Tips</h2>
            <ul class="fs-5">
                <li>Best time to visit Spring (April-May) and fall (September-October) are the ideal times to visit Athens.</li>
                <li>What to bring ? Olive oil, honey, spices, Greek sweets and pottery.</li>
                <li>How to get around? Athens has a convenient metro system, but many sights can be gotten around on foot.</li>
                <li>Athens is a city where the past meets the present. Every corner is steeped in history and every restaurant offers delicious food.</li>
            </ul>
        </div>
    </section>
</main>

<?php 
get_footer(); ?>
</body>
</html>

