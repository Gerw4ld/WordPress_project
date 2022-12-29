<?php get_header(); ?>

    <section class="page-wrap">

        <div >

            <?php get_template_part('blocks/heroBanner'); ?>

        </div>

        <div >

            <?php get_template_part('blocks/mainInfo'); ?>

        </div>


        <div >

            <?php get_template_part('blocks/contactAndInfo'); ?>

        </div>

        <div >

            <?php get_template_part('blocks/ourTeam'); ?>

        </div>

        <div >

            <?php get_template_part('blocks/interest'); ?>

        </div>

        <div >

            <?php get_template_part('blocks/textField'); ?>

        </div>

        <div >

            <?php get_template_part('blocks/impressum'); ?>

        </div>

        <div class="container pt-5 pb-5">

            <?php the_title(); ?>

            <div class="row">

                <div class="col">
                    left side


                </div>
                <div class="col">
                    right side
                    <br>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile; endif; ?>

                </div>
            </div>


        </div>



    </section>

<?php get_footer(); ?>