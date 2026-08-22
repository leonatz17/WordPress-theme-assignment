<?php get_header(); ?>


<div class="flex justify-center h-full w-full mt-30">
    <div class="text-center    ">
        <h1 class="text-3xl font-bold text-shadow-lg">Blogs</h1>
    </div>
</div>
<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <div class="flex flex-col">
            <div class="flex flex-col p-3 lg:px-48 lg:py-11">
                <div class="bg-gray-100 p-5 mb-10 blogs rounded-lg">
                     <?php the_post_thumbnail('post-thumbnail', ['class'=>'w-full h-50 object-cover rounded-lg']); ?>
                    <h1 class="font-bold text-2xl mb-2"> <?php the_title(); ?></h1>
                    <p class="my-3"> <?php echo wp_trim_words(get_the_excerpt(),15); ?> </p>
                    <a href="<?php the_permalink(); ?> "
                        class="text-white font-semibold bg-blue-600 hover:bg-blue-800 p-1 my-5 rounded mt-10">Read More...</a>
                </div>
            </div>

        <?php
    endwhile;
endif;
?>



    <?php get_footer(); ?>