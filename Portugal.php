<?php 
/*
Template Name: Portugal
*/
get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lagos, Portugal  | Culture Connect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container py-5">
    <!-- Заголовок и описание -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Lagos, Portugal </h1>
            <p class="fs-5 text-muted">
            Lagos, Portugal is a picturesque city in the Algarve region, famous for its stunning beaches, historical sites and maritime atmosphere. Lagos is a place where tradition meets modernity and Portuguese culture is evident in the architecture, cuisine and hospitality of the locals.
            <a href="http://localhost:8888/wordpress-3/events/" class="btn btn-secondary px-4 py-2">Back to Events</a>
        </div>
        <div class="col-md-6 text-center">
            <img src="http://localhost:8888/wordpress-3/wp-content/uploads/2024/12/Portugal.png" alt="Lagos, Portugal " class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Карточки с информацией -->
    <section>
        <div class="row g-4">
            <!-- Карточка 1 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Maritime history</h4>
                        <p class="card-text text-muted">
                        Lagush is an important port of the era of the Great Geographical Discoveries. From here began expeditions of Portuguese sailors, including Henry the Navigator. The city’s history is closely linked to the sea, navigation and trade.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 2 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Architecture and tradition</h4>
                        <p class="card-text text-muted">
                        The city is charmed by its white houses, narrow cobbled streets and decorative azuleij ceramics.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 3 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Nature and tourism</h4>
                        <p class="card-text text-muted">
                        Lagoush is known for its natural beauty: the picturesque cliffs, grottos and beaches such as Praia da Dona Ana are a hallmark of the region.
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
                        <h6> <br>Museum of the Navigator (Museu Municipal Dr. José Formosinho)</h6>
                        Located in the historical center dedicated to the age of discovery. You can see the artifacts from the era of the great geographical discoveries, ancient navigation devices and works of art.</br>

<h6><br>Church of St Anthony (Igreja de Santo António)</h6>
Part of the Formosinho museum, known for its luxurious baroque interior with gilt carving.</br>

<h6><br>The first slave market in Europe (Mercado de Escravos)</h6>
This historical object tells the dark chapter of the story of Lagosta, where for the first time in Europe were sold African slaves. Now it’s a small museum dedicated to this topic.</br>

<h6><br>Benagil Sea Caves</h6>
Although it is not a museum in the classical sense, excursions to sea grottos and caves offer a unique opportunity to get acquainted with the natural history of the region.</br>

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
                        <h6><br>Fish and seafood</h6>

                        Lagouches are famous for fresh seafood dishes. Try grilled sardines (Sardinhas Assadas) or grilled squid (Lulas Grelhadas).</br>

<h6><br>Chestnut House (Cataplana de Marisco)</h6>
The traditional dish of the region is a seafood stew with vegetables, prepared in special copper dishes.</br>

<h6><br>Bacalau (Bacalhau)</h6>
Salted cod, which is prepared in hundreds of ways. One of the popular options is a braw (with onion, potatoes and eggs).</br>

<h6><br>Persepolis (Percebes)</h6>
Sea Anglerfish, an unusual and expensive delicacy of the region.<br>

<h6><br>Almond and figs sweets</h6>
In the Algarve, desserts such as Doqueses de Amendóia (Doce de Amêndoa) or Fig sweets are popular.
</br>

<h6><br>Vina Algavè</h6>
The region is famous for its white and pink wines, which are perfectly combined with local dishes.</br>
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
                <li>How to get there: Lagouches is easily accessible by train or bus from Faro, Lisbon or other cities in the Algarve.</li>
                <li>Best time to visit: Spring and autumn are the optimal seasons to avoid crowds of tourists and enjoy the mild weather.</li>
                <li>What to bring: Traditional pottery, local wine, almond sweets and Portuguese marjoram marshmallows.</li>
                <li>Lagoa is the ideal place for those who want to combine nature, history and a taste of authentic Portuguese cuisine.</li>
            </ul>
        </div>
    </section>
</main>

<?php 
get_footer(); ?>
</body>
</html>

