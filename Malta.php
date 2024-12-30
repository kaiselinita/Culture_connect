<?php
/* Template Name: Malta */
get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valletta, Malta  | Culture Connect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container py-5">
    <!-- Заголовок и описание -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Valletta, Malta </h1>
            <p class="fs-5 text-muted">
            Valletta, Malta is the capital of Malta, located on a small peninsula in the Mediterranean Sea. It is a museum city rich in history, culture and magnificent architecture and is a UNESCO World Heritage Site. Valletta attracts with its narrow streets, historical monuments and authentic cuisine reflecting a mix of European, African and Arabic influences.
            </p>
            <a href="http://localhost:8888/wordpress-3/events/" class="btn btn-secondary px-4 py-2">Back to Events</a>
        </div>
        <div class="col-md-6 text-center">
        <img src="http://localhost:8888/wordpress-3/wp-content/uploads/2024/12/malta.jpeg"alt="Valletta, Malta " class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Карточки с информацией -->
    <section>
        <div class="row g-4">
            <!-- Карточка 1 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Architecture</h4>
                        <p class="card-text text-muted">
                        The city is dominated by Baroque architecture with elements of Renaissance and Mannerism. Narrow streets and houses with characteristic balconies create a unique look for the city.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 2 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Cultural events</h4>
                        <p class="card-text text-muted">
                        Malta International Art Festival: a celebration of theater, music and dance.
Fireworks Festival: a colorful show reflecting Maltese traditions.
Religious festivals: processions and celebrations in honor of patron saints.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 3 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">History</h4>
                        <p class="card-text text-muted">
                        The city was founded by the Knights of the Order of St. John in the 16th century after the Great Siege of Malta in 1565.
Valletta became a symbol of the defense of Christianity in the Mediterranean.
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
                        <h6> <br>St. John's Co-Cathedral (St. John's Co-Cathedral)</h6>
                        One of the greatest examples of Baroque architecture. Inside is Caravaggio's masterpiece The Beheading of St. John the Baptist.</br>

<h6><br>Grandmaster's Palace (Grandmaster's Palace)</h6>
The historic center of power, where you can see the armory and opulent halls.</br>

<h6><br>National Museum of Archaeology</h6>
Located in a building from the age of the Knights. Exhibits cover Maltese history from the Neolithic to the Bronze Age.</br>

<h6><br>Fort St. Elmo</h6>
A historic fortress that defended the city during the siege. Today it houses the National War Museum.</br>

<h6><br>Upper Barrakka Gardens</h6>
A park with stunning views of the Grand Harbor and the Tri-Cities.</br>

<h6><br>Manuel Theater</h6>
One of the oldest theaters in Europe, known for its acoustics and baroque finishes.</br>

<h6><br>Casa Rocca Piccola</h6>
A private palace representing the life of the Maltese aristocracy.</br>

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
                        <h6><br>Pastizzi</h6>

                        Layered pastries filled with ricotta or pea puree.</br>

<h6><br>Fenek</h6>
Rabbit cooked in wine or stewed with vegetables. It is the national dish of Malta.</br>

<h6><br>Kapunata</h6>
Maltese version of ratatouille with tomatoes, eggplant and capers.</br>

<h6><br>Lampuki Pie.</h6>
Fish pie with lampuki (local fish), spinach, cauliflower and nuts.<br>

<h6><br>Minestra Soup (Minestra)</h6>
A thick vegetable soup, especially popular in winter.</br>

<h6><br>Hobż biz-zejtom (Ħobż biż-Żejt)</h6>
Bread soaked in olive oil and topped with tomatoes, olives and anchovies.</br>

<h6><br>Imunna (Imqaret)</h6>
A sweet dessert made of dough filled with dates.</br>

<h6><br>Kinnie</h6>

A traditional soft drink made from oranges and herbs.</br>
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
                <li>Best time to visit : Spring and fall: mild weather and fewer tourists.</li>
                <li>Getting around: Public transportation, walking or water cabs are ideal for exploring Valletta.</li>
                <li>What to bring: Filigree jewelry, handmade glass, olive oil and local liqueurs.</li>
                <li>Valletta is a combination of history, art and maritime traditions that fascinates travelers from all over the world.</li>
            </ul>
        </div>
    </section>
</main>

<?php 
get_footer(); ?>
</body>
</html>