<?php
     //Template Name:Leads
get_header(); 
?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">


     <!-- Hero Section -->
  <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/backgrounde.png');
    background-size: cover;">
 <div class="container">
    <h1>WE DESIGN THE <br> FUTURE OF BRANDS.</h1>
    <p>High-end marketing systems for businesses that refuse to settle for average results.</p>
    <div class="hero-btn">
      <a href="#" class="btn con-btn">GET EXCLUSIVE ACCESS</a>
      <!-- <a href="#" class="btn btn-outline">See Our Projects</a> -->
    </div>
  </div>
    
</section>

    <!-- <section class="section-padding min-h-screen flex flex-col justify-center items-center text-center">
        <span class="gold-text uppercase tracking-widest font-bold mb-4 block">Est. 2026</span>
        <h1 class="text-5xl md:text-8xl font-black mb-6 leading-tight">WE DESIGN THE <br><span class="gold-text italic">FUTURE</span> OF BRANDS.</h1>
        <p class="text-gray-400 text-lg md:text-xl max-w-2xl mb-10">High-end marketing systems for businesses that refuse to settle for average results.</p>
        <button class="gold-gradient text-black font-bold px-10 py-4 rounded-full hover:scale-105 transition-transform duration-300">GET EXCLUSIVE ACCESS</button>
    </section> -->

    <section class="section-padding text-black" style="background-image: linear-gradient(160deg, #941c97 0%, #337b8b 80%);">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <div>
                <h2 class="text-6xl font-black mb-2">500%</h2>
                <p class="text-gray-500 uppercase font-bold tracking-widest">Average ROI</p>
            </div>
            <div>
                <h2 class="text-6xl font-black mb-2">$10M+</h2>
                <p class="text-gray-500 uppercase font-bold tracking-widest">Client Revenue</p>
            </div>
            <div>
                <h2 class="text-6xl font-black mb-2">50+</h2>
                <p class="text-gray-500 uppercase font-bold tracking-widest">Global Awards</p>
            </div>
        </div>
    </section>

    <section class="section-padding bg-[#1A1A1A]">
        <div class="max-w-6xl mx-auto">
            <h2 class="em-title-large emt-section-title">OUR ELITE PILLARS</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="glass-card p-10 rounded-2xl hover:border-[#fff] transition-all">
                    <div class="mb-6 gold-text text-3xl font-bold">01</div>
                    <h3 class="text-xl font-bold mb-4 text-white">Strategic Branding</h3>
                    <p class="text-gray-400">Creating visual identities that command authority in any market.</p>
                </div>
                <div class="glass-card p-10 rounded-2xl hover:border-[#fff] transition-all">
                    <div class="mb-6 gold-text text-3xl font-bold">02</div>
                    <h3 class="text-xl font-bold mb-4 text-white">Performance Leads</h3>
                    <p class="text-gray-400">AI-driven lead generation focused on high-net-worth conversion.</p>
                </div>
                <div class="glass-card p-10 rounded-2xl hover:border-[#fff] transition-all">
                    <div class="mb-6 gold-text text-3xl font-bold">03</div>
                    <h3 class="text-xl font-bold mb-4 text-white">Creative Production</h3>
                    <p class="text-gray-400">Cinema-quality content designed to stop the scroll instantly.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 gold-gradient text-black">
        <div class="max-w-4xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between">
            <h2 class="text-3xl font-black mb-6 md:mb-0 text-center md:text-left">DOWNLOAD THE 2026 <br>MARKETING PLAYBOOK</h2>
            <div class="flex w-full md:w-auto">
                <input type="email" placeholder="Your Work Email" class="px-6 py-4 rounded-l-lg w-full outline-none">
                <button class="bg-black text-white px-8 py-4 rounded-r-lg font-bold">GET IT</button>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="max-w-3xl mx-auto glass-card p-8 md:p-12 rounded-3xl">
            <h2 class="em-title-large emt-section-title">Ready to Scale?</h2>
            <p class="text-center text-gray-400 mb-8">Fill the form and our elite strategist will contact you.</p>
            
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <input type="text" placeholder="Full Name" class="bg-transparent border-b border-gray-700 py-4 outline-none focus:border-[#D4AF37] transition-all">
                    <input type="text" placeholder="Company Name" class="bg-transparent border-b border-gray-700 py-4 outline-none focus:border-[#D4AF37] transition-all">
                </div>
                <select class="w-full bg-transparent border-b border-gray-700 py-4 outline-none focus:border-[#D4AF37] appearance-none text-gray-400">
                    <option>Select Your Monthly Budget</option>
                    <option>$5,000 - $10,000</option>
                    <option>$10,000 - $50,000</option>
                    <option>$50,000+</option>
                </select>
                <textarea placeholder="Tell us about your project" rows="4" class="w-full bg-transparent border-b border-gray-700 py-4 outline-none focus:border-[#D4AF37]"></textarea>
                
                <div class="pt-6">
                    <button class="btn con-btn">Send Request</button>
                </div>
            </form>
        </div>
    </section>

<?php get_footer(); ?>