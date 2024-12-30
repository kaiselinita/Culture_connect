<?php 
/* Template Name: Cyprus */
get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyprus  | Culture Connect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container py-5">
    <!-- Заголовок и описание -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Cyprus </h1>
            <p class="fs-5 text-muted">
            Cyprus is an island nation in the eastern Mediterranean Sea, rich in history, culture and diverse cuisine. Cyprus is a crossroads of civilizations where Greek, Turkish, Middle Eastern and European influences mix. It is famous for its ancient monuments, warm beaches and the hospitality of the locals.
            </p>
            <a href="http://localhost:8888/wordpress-3/events/" class="btn btn-secondary px-4 py-2">Back to Events</a>
        </div>
        <div class="col-md-6 text-center">
        <img src="http://localhost:8888/wordpress-3/wp-content/uploads/2024/12/Cyprus.jpeg" alt="Cyprus  " class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Карточки с информацией -->
    <section>
        <div class="row g-4">
            <!-- Карточка 1 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Historical Heritage</h4>
                        <p class="card-text text-muted">
                        Cyprus has a rich history associated with the ancient Greeks, Romans, Byzantines, Crusaders and Ottomans. The island has preserved many monuments that reflect these eras.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 2 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Bilingualism and tradition</h4>
                        <p class="card-text text-muted">
                        The official languages are Greek and Turkish, depending on the region. Traditions include dancing (sirtaki), music and rituals such as Easter celebrations.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 3 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Festivals</h4>
                        <p class="card-text text-muted">
                        Limassol Wine Festival: a celebration of Cypriot wines with tastings and entertainment.
Almond Blossom Festival: celebrates spring in the villages with folk dances and fairs.
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
                        <h6> <br>Paphos Archaeological Park</h6>
                        Includes ancient villas with magnificent mosaics, tombs of kings and amphitheaters.</br>

<h6><br>Kourion</h6>
One of the most impressive ancient city-states with a Roman theater and baths..</br>

<h6><br>Cyprus Museum (Nicosia)</h6>
The largest archaeological museum on the island, showing exhibits from the Neolithic to the Byzantine era.</br>

<h6><br>Kolossi Castle (Limassol)</h6>
Medieval castle used by the Crusaders.</br>

<h6><br>The ancient city of Salamis (Famagusta)</h6>
Ruins of an ancient city with mosaics, Roman baths and theaters.</br>

<h6><br>Cyprus Wine Museum (Episkopi)</h6>
Tells about the history of winemaking on the island, which dates back thousands of years.</br>
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
                        <h6><br>Meze</h6>

                        A set of small dishes including hummus, tarmasalata, olives, halloumi cheese and dolma.</br>

<h6><br>Halloumi</h6>
Traditional Cypriot cheese made from a mixture of sheep and goat's milk, often served fried or grilled.</br>

<h6><br>Kleftiko</h6>
Slow roasted lamb with potatoes and spices.</br>

<h6><br>Souvla</h6>
Large pieces of meat slowly cooked on a spit.<br>

<h6><br>Commandaria</h6>
A dessert wine, considered one of the oldest wines in the world.
</br>

<h6><br>Loukoumades</h6>
Sweet doughnuts soaked in syrup or honey.</br>

<h6><br>Afelia</h6>
Pork marinated in wine and cooked with coriander.</br>

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
                <li>Best time to visit: Spring (April-May) and fall (September-October) are the ideal time for a comfortable vacation.</li>
                <li>Features of local traditions :Respect local customs, especially in villages. Clothing should be modest when visiting religious places.</li>
                <li>What to bring: Commandaria local wine, lace products, olive oil and haloumi.</li>
                <li>Cyprus is a place where history, culture and natural beauty intertwine, offering an unforgettable vacation for travelers.</li>
            </ul>
        </div>
    </section>
</main>

<?php 
get_footer(); ?>
</body>
</html>

