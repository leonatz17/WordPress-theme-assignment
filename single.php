<?php get_header(); ?>

<!-- <h1>This is My Single Page Template</h1>
<div id="story-box">
    <p id="title"></p>
    <p id="title"> </p>
</div> -->


<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <!-- Blog post header -->
        <div class="py-8">
            <h1 class="text-3xl font-bold mb-2"><?php the_title(); ?> </h1>
            <p class="text-gray-500 text-sm">Author: <?php the_author();?> </p>
            <p class="text-gray-500 text-sm">Published on <?php echo get_the_date('M j,Y');?> </p>
        </div>

        <!-- Featured image -->
        <!-- <img src="https://images.unsplash.com/photo-1493723843671-1d655e66ac1c" alt="Featured image" class="w-full h-auto mb-8"> -->
          <?php the_post_thumbnail('post-thumbnail', ['class'=>'w-full h-auto mb-8']); ?> 

        <!-- Blog post content -->
        <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
            <p><?php the_content(); ?></p>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>