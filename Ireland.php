<?php 
/* Template Name: Ireland */
get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>County Clare, Ireland | Culture Connect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container py-5">
    <!-- Заголовок и описание -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4">County Clare, Ireland</h1>
            <p class="fs-5 text-muted">
            County Clare, Ireland is a picturesque region known for its stunning natural scenery, rich history, traditional music and unique Irish cuisine. Here are the highlights of the region's culture, museums and national cuisine:
            </p>
            <a href="http://localhost:8888/wordpress-3/events/" class="btn btn-secondary px-4 py-2">Back to Events</a>
        </div>
        <div class="col-md-6 text-center">
        <img src="http://localhost:8888/wordpress-3/wp-content/uploads/2024/12/Ireland-scaled.jpg" alt="County Clare, Ireland" class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Карточки с информацией -->
    <section>
        <div class="row g-4">
            <!-- Карточка 1 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Traditional Music</h4>
                        <p class="card-text text-muted">
                        Clare is considered the capital of traditional Irish music. The town of Doolin is particularly famous for its pubs, which regularly feature live music using instruments such as the fiddle, banjo and Irish flute.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 2 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Irish language and literature</h4>
                        <p class="card-text text-muted">
                        The Irish (Gaelic) language is preserved as an important element of the culture. Irish is still spoken in some areas of Clare.
The literary traditions of Ireland are reflected in the region through legends and folklore.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Карточка 3 -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary">Natural attractions</h4>
                        <p class="card-text text-muted">
                        The Cliffs of Moher are one of Ireland's most recognizable sites. It is not only a natural site, but also a symbol of culture and the inspiration for many myths.
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
                        <h6> <br>Clare Regional Museum (Clare Museum).</h6>
Located in the town of Ennis. Here you can learn about the history of the region from ancient to modern times, including artifacts from the Great Famine and the Irish War of Independence.</br>

<h6><br>Doolin Heritage Museum</h6>
Dedicated to the history and cultural heritage of the fishing village of Doolin, including its musical traditions.</br>

<h6><br>Aillwee Cave and Birds of Prey Center</h6>
In addition to exploring the karst cave, here you can learn about the lives of local birds such as eagles and falcons.</br>

<h6><br>Burren Center</h6>
A center dedicated to the unique geological phenomenon of the region, the Burren Limestone Plateau, which forms a lunar landscape and contains traces of ancient settlements.</br>

<h6><br>Bunratty Castle</h6>
A medieval castle with a restored interior and historic village where you can immerse yourself in 16th century Irish life.</br>
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
                        <h6><br>Irish Stew</h6>

A traditional Irish stew of lamb or beef with potatoes, carrots and onions. Often served with homemade bread.</br>

<h6><br>Soda Bread</h6>
A delicious and simple bread made with baking soda. It is served with almost all dishes.</br>

<h6><br>Boxty</h6>
Potato flatbread made from grated potatoes and often served with butter or sour cream.</br>

<h6><br>Seafood Chowder</h6>
A creamy soup with local fish and seafood such as salmon, mussels and crab. Often served with a slice of soda bread.<br>

<h6><br>Black Pudding and White Pudding</h6>
Popular meat sausages that are part of a traditional Irish breakfast.</br>

<h6><br>Irish Whiskey and Craft Beer</h6>
The region is famous for craft breweries and whiskey. Don't miss the opportunity to sample local brews.</br>

<h6><br>Rhubarb Pie</h6>
A traditional dessert favored for its combination of sweet dough and sour rhubarb.</br>
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
                <li>Be sure to visit Doolin or Liscannor to enjoy traditional pub music.</li>
                <li>Try the walking trails around the Cliffs of Moher or Burren to feel connected to nature.</li>
                <li>If you have time, stop by the village of Kilfenora to see the ancient Irish crosses.</li>
                <li>County Clare is the perfect blend of Irish tradition, natural beauty and hospitality.</li>
            </ul>
        </div>
    </section>
</main>

<?php 
get_footer(); ?>
</body>
</html>

