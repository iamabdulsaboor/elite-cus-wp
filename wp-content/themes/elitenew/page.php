<?php get_header(); ?>


<div>
    <h2>
        <?php the_title(); ?>
    </h2>
</div>

<div><h3><a href="<?php echo site_url(); ?>">Home</h3><span>/</span><h3>About</h3></div>

<?php the_post_thumbnail(); ?>
<?php 

     $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    //  print_r ($imagepath);
     ?>

<img src="<?php echo $imagepath['0']; ?>" alt="Feature Image">

<?php get_footer(); ?>