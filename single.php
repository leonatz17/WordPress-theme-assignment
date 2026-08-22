<?php get_header(); ?>

<h1>This is My Single Page Template</h1>
<div id="story-box">
    <p id="title"><?php the_title(); ?> </p>
    <p id="title"> <?php the_content(); ?></p>
</div>

<?php get_footer(); ?>