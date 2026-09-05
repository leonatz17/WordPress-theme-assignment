<?php get_header(); ?>



    <section>
        <?php
        $args = array(
            'posts_per_page' => 3,
            //    'category_name' => 'uncategorized',
//    'tag'=> 'ball', 'technology', '',
            'oderby' => 'date',
            'order' => 'DESC'
        );

        $recent_post = new WP_Query($args);
        ?>

        <div class="flex justify-center h-full w-full mt-30">
            <div class="text-center    ">
                <h1 class="text-3xl font-bold text-shadow-lg">Latest post</h1>
            </div>
        </div>
        <?php if ($recent_post->have_posts()):
            while ($recent_post->have_posts()):
                $recent_post->the_post(); ?>
                <div class="flex flex-col">
                    <div class="flex flex-col p-3 lg:px-48 lg:py-11">
                        <div class="bg-gray-100 p-5 mb-10 blogs rounded-lg">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full h-50 object-cover rounded-lg']); ?>
                            <h1 class="font-bold text-2xl mb-2">
                                <?php the_title(); ?>
                            </h1>
                            <h2 class=" text-lg mb-2">Author:
                                <?php the_author() ?> || Date Published:
                                <?php echo get_the_date('F j, Y'); ?>
                            </h2>
                            <p class="my-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                            </p>
                            <a href="<?php the_permalink(); ?> "
                                class="text-white font-semibold bg-blue-600 hover:bg-blue-800 p-1 my-5 rounded mt-10">Read
                                More...</a>
                        </div>
                    </div>

                    <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

    </section>


    <section>
        <?php
        $args = array(
            'posts_per_page' => 2,
               'category_name' => 'featured post',
//    'tag'=> 'ball', 'technology', '',
            'oderby' => 'date',
            'order' => 'DESC'
        );

        $featured_post = new WP_Query($args);
        ?>

        <div class="flex justify-center h-full w-full mt-30">
            <div class="text-center    ">
                <h1 class="text-3xl font-bold text-shadow-lg">Featured Post</h1>
            </div>
        </div>
        <?php if ($featured_post->have_posts()):
            while ($featured_post->have_posts()):
                $featured_post->the_post(); ?>
                <div class="flex flex-col">
                    <div class="flex flex-col p-3 lg:px-48 lg:py-11">
                        <div class="bg-gray-100 p-5 mb-10 blogs rounded-lg">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full h-50 object-cover rounded-lg']); ?>
                            <h1 class="font-bold text-2xl mb-2">
                                <?php the_title(); ?>
                            </h1>
                            <h2 class=" text-lg mb-2">Author:
                                <?php the_author() ?> || Date Published:
                                <?php echo get_the_date('F j, Y'); ?>
                            </h2>
                            <p class="my-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                            </p>
                            <a href="<?php the_permalink(); ?> "
                                class="text-white font-semibold bg-blue-600 hover:bg-blue-800 p-1 my-5 rounded mt-10">Read
                                More...</a>
                        </div>
                    </div>

                    <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

    </section>

<section>
        <?php
        $args = array(
            'posts_per_page' => 4,
               'category_name' => 'news',
//    'tag'=> 'ball', 'technology', '',
            'oderby' => 'date',
            'order' => 'DESC'
        );

        $news = new WP_Query($args);
        ?>

        <div class="flex justify-center h-full w-full mt-30">
            <div class="text-center    ">
                <h1 class="text-3xl font-bold text-shadow-lg">News</h1>
            </div>
        </div>
        <?php if ($news->have_posts()):
            while ($news->have_posts()):
                $news->the_post(); ?>
                <div class="flex flex-col">
                    <div class="flex flex-col p-3 lg:px-48 lg:py-11">
                        <div class="bg-gray-100 p-5 mb-10 blogs rounded-lg">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full h-50 object-cover rounded-lg']); ?>
                            <h1 class="font-bold text-2xl mb-2">
                                <?php the_title(); ?>
                            </h1>
                            <h2 class=" text-lg mb-2">Author:
                                <?php the_author() ?> || Date Published:
                                <?php echo get_the_date('F j, Y'); ?>
                            </h2>
                            <p class="my-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                            </p>
                            <a href="<?php the_permalink(); ?> "
                                class="text-white font-semibold bg-blue-600 hover:bg-blue-800 p-1 my-5 rounded mt-10">Read
                                More...</a>
                        </div>
                    </div>

                    <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
<?php get_sidebar(); ?>

    </section>




    <?php get_footer(); ?>