<?php 
/*
Template Name: Moroco
*/
get_header(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marrakesh, Morocco | Culture Connect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container py-5">
    <!-- Заголовок и описание -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">Marrakesh, Morocco</h1>
            <p class="fs-5 text-muted">
            Marrakech, Morocco, is a vibrant city that is famous for its rich culture, history, traditions and great cuisine. Here are the highlights of the culture, museums and national cuisine that are worth knowing:
            </p>
            <a href="http://localhost:8888/wordpress-3/events/" class="btn btn-secondary px-4 py-2">Back to Events</a>
        </div>
        <div class="col-md-6 text-center">
            <img src="http://localhost:8888/wordpress-3/wp-content/uploads/2024/12/morocco-scaled.jpg" alt="Marrakesh, Morocco" class="img-fluid rounded shadow">
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
                        Marrakech is known for its traditional buildings decorated in the style of Moorish architecture: arches, carved wooden panels, and tile mosaics.
The Old City, or medina, is a UNESCO World Heritage Site. In the center is Jemaa el Fna Square, filled with street performers, vendors, and cafes.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 2 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Local Art</h4>
                        <p class="card-text text-muted">
                        Moroccan art includes wood carving, handmade rug making, ceramics and metal jewelry. Markets (souqs) are ideal places to find unique pieces.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 3 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Religion and Traditions</h4>
                        <p class="card-text text-muted">
                        Islam plays a central role in the country's culture, which is reflected in clothing, food, architecture and daily life.
Hammam (traditional bath) and tea ceremonies are important elements of Moroccan life.
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
                        <h6> <br>Musée Yves Saint Laurent (Yves Saint Laurent Museum).</h6>
                        Dedicated to the work of French fashion designer Yves Saint Laurent, who drew inspiration from Moroccan culture. It is also home to the Jardin Majorelle, an oasis of unique plants and rich colors.</br>
<h6><br>Doolin Heritage Museum</h6>
Dedicated to the history and cultural heritage of the fishing village of Doolin, including its musical traditions.</br>

<h6><br>Musée Dar Si Saïd (Dar Si Saïd Museum)</h6>
Located in a beautiful 19th-century palace and displays traditional Moroccan art, including carpets, jewelry and weapons.</br>

<h6><br>Marrakech Museum</h6>
Located in the historic Menebi Palace. The museum features Islamic and Berber artifacts, paintings and sculptures.
Maison de la Photographie (House of Photography)
This museum displays rare photographs of Morocco from the 19th and 20th centuries, which give a glimpse of life in the country's past.</br>
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
                        <h6><br>Tajine</h6>

                        The main symbol of Moroccan cuisine. This dish is cooked in a clay pot with meat, vegetables and spices such as turmeric, cinnamon and saffron.</br>

<h6><br>Couscous</h6>
A wheat flour cereal served with meat, vegetables and often with sweet additions like raisins and caramelized onions.</br>

<h6><br>Harira</h6>
A traditional Moroccan soup often served for Ramadan dinner. It consists of lentils, chickpeas, tomatoes, spices and chunks of meat.</br>

<h6><br>Pastilla (B'stilla)</h6>
A unique dish combining sweet and salty flavors: puff pastry with meat (usually chicken or pigeon) sprinkled with powdered sugar and cinnamon.<br>

<h6><br>Moroccan mint tea</h6>
A real ritual that accompanies all meals. The tea is brewed with green tea and fresh mint, served hot and very sweet.</br>

<h6><br>Street food</h6>
Jemaa el Fna Square offers fried snails, bagrir pancakes, kebabs and freshly squeezed juices.</br>
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
                <li>Visit the Menara Gardens and Ben Yousef Madrasa for a full immersion in the city's history.</li>
                <li>Don't forget the traditional souks, such as Souk el Bahia, where you can buy spices, oils and textiles.</li>
                <li>Be sure to negotiate prices in the markets: haggling is part of Moroccan culture.</li>
                <li>Marrakech is an unforgettable experience combining ancient traditions and modern life.</li>
            </ul>
        </div>
    </section>
</main>
<?php get_footer(); ?>
</body>
</html>
