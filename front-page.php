<?php get_header();?>


    <div class="container pt-5 pb-5">

    <?php the_title();?>

    <div class="row">

        <div class="col">
        left side



        </div >
        <div class="col">
        right side
        <br>

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

                <?php the_content();?>

        <?php endwhile; endif;?>

        </div>
    </div>
    </div>


<?php get_footer();?>