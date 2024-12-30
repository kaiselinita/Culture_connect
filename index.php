<?php 
get_header(); ?>
<section class="hero">
  <img src="<?php echo get_template_directory_uri(); ?>/Images/van culture connect.jpeg" alt="Van in nature" class="hero-image">
  <div class="hero-text">
  <h1>Explore the <span class="highlight">world</span> through culture<br> with <span class="highlight">Culture Connect</span> !</h1>
  </div>
</section>

<section class="stories-section">
<h2>Stories that bring the world alive</h2>
    <div class="stories-container">
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cyprus.jpeg" alt="Cyprus">
            <div class="card-content">
                <h3><span class="highlight">Cyprus</span></h3>
                <p>Cyprus is a sunny island in the eastern Mediterranean known for its golden beaches, ancient history and mix of cultures. This island-state offers a rich cultural experience through a combination of Greek and Turkish heritage.</p>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Spain.jpeg" alt="Barcelona">
            <div class="card-content">
                <h3><span class="highlight">Barcelona</span></h3>
                <p>Barcelona, CT, Spain is a vibrant and cosmopolitan city on the Mediterranean coast, the capital of Catalonia. Barcelona is famous for its unique architecture, where Antoni Gaudi's works such as the Sagrada Familia and Parc Güell make the city a living museum of modernism.</p>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/Images/ Italy.jpeg" alt="Venice">
            <div class="card-content">
                <h3><span class="highlight">Venice, Italy</span></h3>
                <p>Venice, Italy is a romantic city built on water, known for its unique network of canals, graceful architecture and rich history. Located in the lagoon of the Adriatic Sea, Venice charms visitors with its gondolas, majestic palaces and cozy squares.</p>
            </div>
        </div>
    </div>

</section>

<section class="large-image-section">
  <img src="<?php echo get_template_directory_uri(); ?>/Images/hikers.jpeg" alt="Hiker in mountains">
</section>

<section class="culture-section">
<h2>What is culture?</h2>
    <div class="culture-container">
      <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/Images/gastronomie.png" alt="Gastronomy">
        <div class="card-content">
          <h3>Gastronomy</h3>
          <p>Immerse yourself in culture...</p>
        </div>
      </div>
      <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/Images/Tradition.png"alt="Traditions">
        <div class="card-content">
          <h3>Traditions</h3>
          <p>Discover the customs and rituals...</p>
        </div>
      </div>
        <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/Images/Musée.png" alt="Arts & Museum">
            <div class="card-content">
              <h3>Arts & Museum</h3>
              <p>Immerse yourself in the world of art! Here we will tell you about outstanding museums, exhibitions and art events that reflect the rich cultural heritage of different countries.</p>
            </div>
          </div>
          <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>/Images/Tours&Excursions.png" alt="Tours & Excursions">
            <div class="card-content">
              <h3>Tours & Excursions</h3>
              <p>Travel to iconic places and hidden gems! This section features unique tours and excursions that will help you gain a deeper understanding of each region's history and culture.</p>
            </div>
          </div> 
          <div class="culture-section-footer text-center">
    <a href="<?php echo site_url('/avis-des-utilisateurs'); ?>" class="btn-custom">
        Avis
    </a>
</div>

    </div>
</section>
<section class="connect">
  <form id="signup-form" class="mt-3" style="max-width: 300px; margin: 0 auto;">
    <div class="mb-3">
      <input type="email" id="email" class="form-control" placeholder="Email" required>
    </div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
  </form>
  <div id="message" class="mt-3 text-center"></div>
</section>
<?php 
get_footer(); ?>
