<?php
     //Template Name:Other Services
get_header(); 
?>
<main class="creative-page-v3">

 <!-- Hero Section -->
  <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/backgrounde.png');
    background-size: cover;">
 <div class="container">
    <h1>Marketing <br>That Attracts</h1>
    <p>At Elite Marketing, we build the bridge between where you are and where you want to reach.</p>
    <div class="hero-btn">
      <a href="#" class="btn con-btn">Send a Message</a>
      <!-- <a href="#" class="btn btn-outline">See Our Projects</a> -->
    </div>
  </div>
    
</section>

    <div class="scrolling-marquee">
        <div class="marquee-content">
            CREATIVE • DATA • STRATEGY • BRANDING • GROWTH • SEO • CREATIVE • DATA • STRATEGY
        </div>
    </div>

    <section id="about" class="process-zigzag">
        <div class="container">
            <div class="zigzag-row">
                <div class="zigzag-text">
                    <span class="step-num">01</span>
                    <h2>Audit & Research</h2>
                    <p>We dive deep into your brand's current performance to find hidden opportunities.</p>
                </div>
                <div class="zigzag-box bg-lime"></div>
            </div>
            <div class="zigzag-row reverse">
                <div class="zigzag-text">
                    <span class="step-num">02</span>
                    <h2>Creative Execution</h2>
                    <p>Our designers craft high-converting visuals tailored for your specific audience.</p>
                </div>
                <div class="zigzag-box bg-dark"></div>
            </div>
        </div>
    </section>

    <section class="service-slots">
        <div class="slot">
            <h3>Content Strategy</h3>
            <p>Storytelling that converts casual browsers into loyal fans.</p>
        </div>
        <div class="slot border-l">
            <h3>PPC Management</h3>
            <p>Maximizing ROI with precision targeting and continuous testing.</p>
        </div>
        <div class="slot border-l">
            <h3>UI/UX Audit</h3>
            <p>Removing friction from your customer's digital journey.</p>
        </div>
    </section>

    <section class="testimonials-v3">
        <div class="glass-testimonial">
            <p>"Elite Marketing transformed our brand from a local shop to a national competitor within 6 months."</p>
            <div class="author">
                <strong>Sarah Johnson</strong>
                <span>CEO, TechFlow</span>
            </div>
        </div>
    </section>

    <section class="emt-cta-v3">
        <div class="black-wash"></div>
        <div class="cta-inner">
            <h2 class="huge-title">Ready for <br>Lift Off?</h2>
            <p>Let's scale your project with Elite Marketing Technology.</p>
            <a href="#" class="btn-lime">Schedule a Call</a>
        </div>
    </section>

</main>
<?php get_footer(); ?>