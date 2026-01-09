<?php
     //Template Name:Graphics
get_header(); 
?>

<!-- ================= HERO ================= -->
<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/backgrounde.png');
    background-size: cover;">
 <div class="container">
    <h1>Creative Graphic Design <br> That Builds Brands</h1>
    <p>Logos, social media creatives, branding & marketing visuals that convert.</p>
    <div class="hero-btn">
      <a href="#" class="btn con-btn">Send a Message</a>
      <!-- <a href="#" class="btn btn-outline">See Our Projects</a> -->
    </div>
  </div>
    
</section>

<!-- ================= SERVICES ================= -->
<section class="emt-services">
  <div class="container">
    <h2 class="em-title-large emt-section-title">Our Graphic Design Services</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="emt-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/graphic/design.png" alt="Logo Design">
          <h5 class="graphics-h5">Logo Design</h5>
          <p>Unique and memorable logos tailored to your brand identity.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="emt-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/graphic/branding.png" alt="Brand Identity">
          <h5 class="graphics-h5">Brand Identity</h5>
          <p>Complete brand visuals that tell your brand story.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="emt-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/graphic/broadcast.png" alt="Social Media Posts">
          <h5 class="graphics-h5">Social Media Posts</h5>
          <p>High-engagement posts, stories and ads designs.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="emt-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/graphic/mobile.png" alt="Banners & Ads">
          <h5 class="graphics-h5">Banners & Ads</h5>
          <p>Creative banners optimized for marketing campaigns.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="emt-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/graphic/strategy.png" alt="Business Stationery">
          <h5 class="graphics-h5">Business Stationery</h5>
          <p>Professional business cards & corporate branding.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="emt-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/graphic/ux-design.png" alt="UI Graphics">
          <h5 class="graphics-h5">UI Graphics</h5>
          <p>Modern UI assets for websites and applications.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= PROCESS ================= -->
<section class="emt-process">
  <div class="container">
    <h2 class="em-title-large emt-section-title">Our Creative Process</h2>
    <div class="row text-center">
      <div class="col-md-3 emt-process-step">
        <strong>Research & Concept</strong>
        <p>Understanding your vision</p>
      </div>
      <div class="col-md-3 emt-process-step">
        <strong>Design & Draft</strong>
        <p>Crafting initial ideas</p>
      </div>
      <div class="col-md-3 emt-process-step">
        <strong>Revisions</strong>
        <p>Refining with your feedback</p>
      </div>
      <div class="col-md-3 emt-process-step">
        <strong>Final Delivery</strong>
        <p>Delivering the final design</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= PORTFOLIO ================= -->
<section class="portfolio-section">
  <h2 class="section-title">Our <span>Portfolio</span></h2>

  <div class="filter-tabs">
    <button class="tab-btn active" data-filter="all">All</button>
    <button class="tab-btn" data-filter="logos">Logos</button>
    <button class="tab-btn" data-filter="social">Social Media</button>
    <button class="tab-btn" data-filter="branding">Branding</button>
    <button class="tab-btn" data-filter="ads">Ads</button>
  </div>

  <div class="portfolio-grid">
    <div class="portfolio-item logos">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/logotoronto11.webp" alt="Logo Design">
    </div>
    <div class="portfolio-item social">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/img-4.png" alt="Social Media">
    </div>
     <div class="portfolio-item branding">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/img-4.png" alt="Social Media">
    </div>
        <div class="portfolio-item ads">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/ad1.png" alt="Ads Design">
    </div>

  <button class="btn con-btn">View More Projects</button>
</section>

<!-- ================= CTA ================= -->


<section class="emt-cta" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo get_template_directory_uri(); ?>/assets/img/graphic/bg.jpg'); background-size: cover; background-position: center;">
  <div class="container text-center">
    <h2 class="em-title-large" style="color: white;">Let’s Create Something Amazing</h2>
    <p style="color: white;">Start your graphic design project with Elite Marketing Technology</p>
    <a href="#" class="btn con-btn">Start Project</a>
  </div>
</section>

<?php get_footer(); ?>
