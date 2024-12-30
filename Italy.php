<?php 
/* Template Name: Italy */
get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positano, Italy | Culture Connect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container py-5">
    <!-- Заголовок и описание -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Positano, Italy</h1>
            <p class="fs-5 text-muted">
            Positano, Italy is a gem of the Amalfi Coast, known for its stunning architecture, colorful slope-side homes, unique culture, and delicious cuisine. Here's what you should know about the culture, museums and food in Positano and Italy in general:
            </p>
            <a href="http://localhost:8888/wordpress-3/events/" class="btn btn-secondary px-4 py-2">Back to Events</a>
        </div>
        <div class="col-md-6 text-center">
        <img src="http://localhost:8888/wordpress-3/wp-content/uploads/2024/12/Italy.jpeg" alt="Positano, Italy" class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Карточки с информацией -->
    <section>
        <div class="row g-4">
            <!-- Карточка 1 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Local lifestyle</h4>
                        <p class="card-text text-muted">
                        Life in Positano is calm and measured. The town is known for its artistic atmosphere, having attracted artists, writers and celebrities since the 19th century.
The streets are full of boutiques selling fashionable clothes and handmade shoes, especially sandals made by local craftsmen.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 2 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Festivals</h4>
                        <p class="card-text text-muted">
                        Religious festivals are an important part of the culture, such as the Festival of the Madonna Assunta, celebrated on August 15 with traditional processions and fireworks.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 3 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Architecture</h4>
                        <p class="card-text text-muted">
                        The city's trademark is the pastel-colored, multi-level houses built on steep slopes. Each building is blended into the natural landscape.
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
                        <h6> <br>Church of Santa Maria Assunta</h6>
                        The main attraction of Positano. It is famous for its dome decorated with majolica and the icon of the Black Madonna, which is considered miraculous.</br>
<h6><br>Villa Romana del Gallo Lungo</h6>
Ruins of an ancient Roman villa steeped in history. Here you can see the remains of mosaics and wall paintings.</br>

<h6><br>Sentiero degli Dei (Path of the Gods)</h6>
Not a museum, but an iconic natural attraction. It is a hiking trail with spectacular views of the coast and the Mediterranean Sea.</br>

<h6><br>Archaeological museums of the region</h6>
For a deeper dive into history, visit the museums in nearby Sorrento or Pestum, featuring ancient Greek and Roman artifacts.</br>
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
                        <h6><br>Limoncello</h6>

                        A liqueur made from lemons grown on the Amalfi Coast. It is served chilled as a digestif.</br>

<h6><br>Scialatielli ai Frutti di Mare</h6>
Traditional pasta with seafood: mussels, squid, shrimp and other seafood. The flavor is enriched with fresh herbs and lemon.</br>

<h6><br>Pizza Napoletana</h6>
An hour's drive from Positano is Naples, the birthplace of pizza. Be sure to try it in the local restaurants, which use traditional recipes and wood-fired ovens.</br>

<h6><br>Sfogliatella</h6>
A layer of ricotta cream flavored with lemon or orange zest.<br>

<h6><br>Delizia al Limone</h6>
A lemon dessert that symbolizes Positano. It is an airy pastry with lemon liqueur cream.</br>

<h6><br>Frittura di Pesce</h6>
An assortment of fresh fried fish served with lemon. Especially delicious with a glass of local white wine.</br>
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
                <li>Best time to visit: Spring and fall, when there are fewer tourists and the weather is mild.</li>
                <li>Transportation: Positano is a city for walking. Prepare yourself for the many stairs and narrow streets.</li>
                <li>Local produce: Buy souvenirs such as lemon liqueur, painted pottery and handmade leather goods.
Positano is the perfect place to enjoy Italian culture, cooking and inspiring scenery.</li>
            </ul>
        </div>
    </section>
</main>

<?php 
get_footer(); ?>
</body>
</html>
