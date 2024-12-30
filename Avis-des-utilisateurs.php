<?php
/* Template Name: Avis des Utilisateurs */
get_header(); ?>

<div class="container">
    <h1 class="text-center mb-4">Laisser Un Avis</h1>
    <form id="review-form" class="text-center mb-5" method="POST" action="">
        <textarea name="comment" rows="4" class="form-control mb-3" placeholder="Votre avis..." required></textarea>
        <input type="text" name="author" class="form-control mb-3" placeholder="Nom" required>
        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
        <label for="rating" class="d-block mb-2">Votre note :</label>
        <select name="rating" id="rating" class="form-control mb-3" required>
            <option value="5">5 étoiles</option>
            <option value="4">4 étoiles</option>
            <option value="3">3 étoiles</option>
            <option value="2">2 étoiles</option>
            <option value="1">1 étoile</option>
        </select>
       
        <button type="submit" class="btn-custom">Soumettre</button>
        <form id="review-form" method="POST" action="">
</form>    
    </form>
</div>
    <!-- Section avis d'utilisateurs -->
<section class="reviews-container">
    <button class="button left">&larr;</button>
    <div class="reviews-wrapper">
        <?php 
        // Exemple d'avis
        $reviews = [
            [
                "name" => "Celia Almeda",
                "rating" => 5,
                "comment" => "Super service ! Je recommande vivement Culture Connect."
            ],
            [
                "name" => "Nat Reynolds",
                "rating" => 4,
                "comment" => "Très utile et facile à utiliser. Interface intuitive !"
            ],
            [
                "name" => "Bob Roberts",
                "rating" => 5,
                "comment" => "Une expérience incroyable. Je le recommande à tous."
            ],
            [
                "name" => "Alice Johnson",
                "rating" => 4,
                "comment" => "Une belle découverte avec des guides locaux très accueillants !"
            ],
            [
                "name" => "Ethan Brown",
                "rating" => 3,
                "comment" => "Bonne expérience, mais j'aurais aimé plus d'options d'activités."
            ],
        ];

        // Génération dynamique des avis
        foreach ($reviews as $review) { ?>
            <div class="review">
                <h3><?php echo $review['name']; ?></h3>
                <div class="stars">
                    <?php 
                    for ($i = 1; $i <= 5; $i++) {
                        echo $i <= $review['rating'] ? '★' : '☆';
                    }
                    ?>
                </div>
                <p><?php echo $review['comment']; ?></p>
            </div>
        <?php } ?>
    </div>
    <button class="button right">&rarr;</button>
</section>

<?php get_footer(); ?>