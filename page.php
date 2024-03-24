<?php
get_header();
the_post();

?>
<header class=" text-center gradient ">
    <h1 class=""><?php the_title(); ?></h1>
</header>

<h2><a href="<?php echo site_url(); ?>"></a>Emporio</h2>

<!-- <div class="main-content"><?php echo get_the_content(); ?></div> -->
<div class="main-content"><?php the_content(); ?></div>


<?php get_footer();   ?>
