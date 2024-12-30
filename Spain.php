<?php 
/*
Template Name: Spain
*/
get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcelona, CT, Spain  | Culture Connect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container py-5">
    <!-- Заголовок и описание -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Barcelona, CT, Spain </h1>
            <p class="fs-5 text-muted">
            Barcelona, Catalonia, Spain is a city of vibrant architecture, rich culture, exquisite cuisine and energetic atmosphere. It combines the legacy of Antoni Gaudi, the deep roots of Catalan identity and a warm Mediterranean vibe.
            </p>
            <a href="http://localhost:8888/wordpress-3/events/" class="btn btn-secondary px-4 py-2">Back to Events</a>
        </div>
        <div class="col-md-6 text-center">
        <img src="http://localhost:8888/wordpress-3/wp-content/uploads/2024/12/Spain.jpeg" alt="Barcelona, CT, Spain " class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Карточки с информацией -->
    <section>
        <div class="row g-4">
            <!-- Карточка 1 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Catalan identity</h4>
                        <p class="card-text text-muted">
                        Barcelona is the capital of the autonomous region of Catalonia, where residents are proud of their language, culture and traditions. Catalan is the official language, along with Spanish.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 2 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Architectural heritage</h4>
                        <p class="card-text text-muted">
                        The city is famous for its modernist architecture, especially Antoni Gaudi's creations such as the Sagrada Familia, Parc Güell and Casa Batlló.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 3 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Art and music</h4>
                        <p class="card-text text-muted">
                        
Barcelona has been home to many notable artists, including Pablo Picasso and Joan Miró. Contemporary music and art also thrive here.
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
                        <h6> <br>Picasso Museum (Museu Picasso)</h6>
                        Dedicated to the early works of Pablo Picasso, showing his journey from realism to cubism.</br>

<h6><br>Museu Nacional de Arte de Catalunya (MNAC)</h6>
Collection includes Romanesque, Gothic and contemporary Catalan art.</br>

<h6><br>Fundació Joan Miró (Fundació Joan Miró)</h6>
Contemporary art museum dedicated to the work of one of Spain's leading surrealists.</br>

<h6><br>Casa Milà (La Pedrera)</h6>
A modernist building designed by Gaudí, with a museum dedicated to his work.</br>

<h6><br>Camp Nou Experience</h6>
The Barcelona Football Club Museum is a must-see for soccer fans.</br>
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
                        <h6><br>Paella</h6>

                        A rice dish with seafood, chicken or vegetables.</br>

<h6><br>Pa amb tomàquet</h6>
Bread with tomato, garlic and olive oil, a simple but delicious local delicacy.</br>

<h6><br>Escalivada</h6>
A dish of roasted vegetables (eggplant, peppers, onions) served with olive oil.</br>

<h6><br>Crema Catalana</h6>
Catalan version of crème brûlée, with caramelized sugar on top.<br>

<h6><br>Calçots</h6>
A type of green onion served with romesco sauce and usually eaten with the hands.</br>

<h6><br>Tapas</h6>
Small appetizers such as croquettes, jamon and olives.</br>

<h6><br>Sangria and cava</h6>
Popular drinks are fruit wine (sangria) and sparkling wine (cava).</br>
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
                <li>Best time to visit - Spring and fall are ideal times to visit to avoid the summer heat.</li>
                <li>How to get around? Barcelona has an excellent metro and bus system, and many places are within walking distance.</li>
                <li>What to bring? Catalan sweets, olive oil, wines, ceramics and souvenirs featuring Gaudi.</li>
                <li>Barcelona is a city that inspires. It is a place where historical grandeur blends harmoniously with modern creativity, creating a unique atmosphere for all who come here.</li>
            </ul>
        </div>
    </section>
</main>

<?php 
get_footer(); ?>
</body>
</html>

