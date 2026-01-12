<?php
     //Template Name:Marketing
get_header(); 
?>

 <!-- Hero Section -->
  <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/backgrounde.png');
    background-size: cover;">
 <div class="container">
    <h1>Beyond <br> Creativity</h1>
    <p>We don't just design; we build digital ecosystems that drive results and define industries.</p>
    <div class="hero-btn">
      <a href="#" class="btn con-btn">Send a Message</a>
      <!-- <a href="#" class="btn btn-outline">See Our Projects</a> -->
    </div>
  </div>
    
</section>


    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Expertise</h2>
            </div>
            <div class="bento-grid">
                <div class="bento-box large-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/marketing/branding.jpeg');
    background-size: cover;">
                    <h3>Branding & Identity</h3>
                    <p>Creating visual languages that speak louder than words.</p>
                </div>
                <div class="bento-box small-box purple mar-h" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/marketing/social.jpeg');
    background-size: cover;">
                    <h3>Social Ads</h3>
                </div>
                <div class="bento-box small-box dark mar-h-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/marketing/ui.jpeg');
    background-size: cover;">
                    <h3>UX Design</h3>
                </div>
                <div class="bento-box wide-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/marketing/growth.jpeg');
    background-size: cover;">
                    <h3>Growth Marketing</h3>
                    <p>Data-driven strategies to scale your business exponentially.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="process-section">
        <div class="container">
            <div class="process-row">
                <div class="step"><span>01</span><h4>Discovery</h4></div>
                <div class="step"><span>02</span><h4>Design</h4></div>
                <div class="step"><span>03</span><h4>Deliver</h4></div>
            </div>
        </div>
    </section>

    <section class="emt-cta">
        <div class="overlay-black"></div>
        <div class="container cta-content">
            <h2 class="em-title-large">Let’s Create Something Amazing</h2>
            <p>Start your graphic design project with Elite Marketing Technology</p>
            <a href="#" class="btn con-btn">Start Project</a>
        </div>
    </section>

<?php get_footer(); ?>