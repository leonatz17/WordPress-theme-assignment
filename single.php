<?php get_header(); ?>



    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <!-- Blog post header -->
                    <div class="py-8">
                        <h1 class="text-3xl font-bold mb-2"><?php the_title(); ?> </h1>
                        <p class="text-gray-500 text-sm">Author: <?php the_author(); ?> </p>
                        <p class="text-gray-500 text-sm">Published on <?php echo get_the_date('M j,Y'); ?> </p>
                    </div>

                    <!-- Featured image -->
                    <!-- <img src="https://images.unsplash.com/photo-1493723843671-1d655e66ac1c" alt="Featured image" class="w-full h-auto mb-8"> -->
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full h-auto mb-8']); ?>

                    <!-- Blog post content -->
                    <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                        <p><?php the_content(); ?></p>

                    </div>
                </div>
            </div>


    <?php 
    endwhile;
    endif; ?>
    
    
    <section>
    <?php
        $categories = get_the_category();
        if(!empty($categories)) :
            $category = $categories[0];

            $args = array(
                'cat' => $category->term_id,
                'post_per_page' => 3,
                'post__not_in' => array(get_the_ID())
            );

            $related_posts = new WP_Query($args);
            if($related_posts->have_posts()) :
                while($related_posts->have_posts()):
                    $related_posts->the_post();

        ?>

     <h1 class="font-bold text-2xl flex justify-center p-2">Related Post</h1>
    <div class="flex justify-center">
        
        <h2 class="text-xl"><?php the_title(); ?></h2>
        <a href="<?php the_permalink(); ?>" class="bg-blue-500 rounded-lg p-1">Read more</a>
    </div>


<?php
endwhile;
endif;

wp_reset_postdata();

endif;

?>
</section>
<?php get_footer(); ?>