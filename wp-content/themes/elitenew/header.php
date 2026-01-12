<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureInsure Blog - Your Insurance Resource</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/whatsapp.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/graphics.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/website.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/marketing.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/other-services.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/leads.css">
</head>
<body>


    <!-- Header -->
    
     <div class="border-wrap">
    <header>
         <?php $logoimg=get_header_image(); ?>
        <div class="header-main">
            <div class="container">
                <a href="<?php echo site_url(); ?>" class="logo">
                   <img src="<?php echo $logoimg; ?>" alt="Logo">
                </a>
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>

                <?php
                  wp_nav_menu(array('theme_location'=>'primary-menu',
                                            'menu_class'=>'main-nav'))

                  ?>
                
            </div>
        </div>
    </header>
</div>