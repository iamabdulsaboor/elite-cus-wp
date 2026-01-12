<?php 
    //Template Name:Website
   get_header(); 
?>
<main class="elite-wrapper">

<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/backgrounde.png');
    background-size: cover;">
 <div class="container">
    <h1>Crafting <br> Digital Legacies</h1>
    <p>We combine data-driven strategy with elite creative execution to scale your brand.</p>
    <div class="hero-btn">
      <a href="#" class="btn con-btn">Send a Message</a>
      <!-- <a href="#" class="btn btn-outline">See Our Projects</a> -->
    </div>
  </div>
    
</section>

  
    <section class="services-bento">
        <div class="container">
            <div class="bento-grid">
                <div class="bento-item main-service" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/website/PSD Template Nirix Metaverse.jpeg');
    background-size: cover;">
                    <h2>Our Core <br>Expertise</h2>
                    <p>Tailored solutions for modern brands.</p>
                </div>
                <div class="bento-item service-card purple" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/website/graphic.jpeg');
    background-size: cover;">
                    <h3>Graphic Design</h3>
                </div>
                <div class="bento-item service-card dark" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/website/ads.jpeg');
    background-size: cover;">
                    <h3>Ads Campaigns</h3>
                </div>
                <div class="bento-item service-card light web-mt" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/website/digital.jpeg');
    background-size: cover;">
                    <h3>Digital Marketing</h3>
                </div>
                <div class="bento-item service-card dark web-mt" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/website/seo.jpeg');
    background-size: cover;">
                    <h3>SEO Mastery</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="portfolio" class="portfolio-section">
        <div class="container">
            <h2 class="title-center">Our <span>Portfolio</span></h2>
            <div class="filter-tabs">
                <button class="tab-btn active" data-filter="all">All</button>
                <button class="tab-btn" data-filter="logos">Logos</button>
                <button class="tab-btn" data-filter="social">Social Media</button>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item logos"><img src="https://via.placeholder.com/400x400/4a3aff" alt="Logo"></div>
                <div class="portfolio-item social"><img src="https://via.placeholder.com/400x400/222222" alt="Social"></div>
                <div class="portfolio-item logos"><img src="https://via.placeholder.com/400x400/6e48ff" alt="Logo"></div>
            </div>
        </div>
    </section> -->

    <section class="stats-section">
        <div class="stat-box">
            <span class="num">50+</span>
            <span class="label">Clients Served</span>
        </div>
        <div class="stat-box">
            <span class="num">95%</span>
            <span class="label">Retention Rate</span>
        </div>
        <div class="stat-box">
            <span class="num">2k+</span>
            <span class="label">Designs Created</span>
        </div>
    </section>

    <section class="emt-cta">
        <div class="overlay-black"></div>
        <div class="container content-above">
            <h2 class="em-title-large">Let’s Create Something Amazing</h2>
            <p>Start your graphic design project with Elite Marketing Technology</p>
            <a href="#" class="btn con-btn">Start Project</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>