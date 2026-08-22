<?php get_header(); ?>

<section id="about">
    <h1>This is My template page</h1>
        <div class="aboutUs">
            <h1 class="home-header"><?php the_title(); ?></h1>
            
            <div class="story">
                <div>
                    <img id="cafe" src="<?php echo get_template_directory_uri(); ?>/assets/images/cafe.png" alt="">
                </div>
                <div id="story-box">
                    <p id="title"><?php the_title(); ?> </p>
                    <p id="title"> <?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>