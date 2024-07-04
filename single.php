<?php get_header(); ?>
<main class="container space-y-8 pt-[96px]">
    <section class="">
        <h1 class="text-4xl mt-8 font-bold text-center"><?php the_title(); ?></h1>
        <h2 class="text-lg text-center mt-2 text-[#828282]"> Written By: <?php the_field('blog_author'); ?> </h2>
        <h2 class="text-lg text-center mt-2 text-[#828282]"> Date: <?php the_field('blog_date'); ?> </h2>
    </section>

    <section>
        <img src="<?php the_field('post_banner'); ?>" class="w-full" />
    </section>
    <section>
        <?php the_content(); ?>
    </section>
    <section class="space-y-4">
        <h3 class="font-bold text-3xl">
            Related posts
        </h3>
        <div class="grid grid-cols-12 gap-8 items-center justify-between">
            <?php
            $free_args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
            );
            $free_query = new WP_Query($free_args);
            if ($free_query->have_posts()) :
                while ($free_query->have_posts()) : $free_query->the_post();
            ?>
                    <div class="col-span-3 space-y-4">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_field('post_banner'); ?>" class="rounded-lg" />
                        </a>
                        <div>
                            <a href="<?php the_permalink(); ?>" class="text-lg text-comix-primary"><?php echo wp_trim_words(get_the_title(), 10); ?></a>
                            <p class="text-[#454545]"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="bg-comix-primary text-white block w-fit px-4 rounded-lg py-2">Read more</a>
                    </div>
            <?php
                endwhile;
                // Restaurar datos originales del loop
                wp_reset_postdata();
            else :
                // Si no hay entradas
                echo '<p>No hay comics disponibles.</p>';
            endif;
            ?>
        </div>

    </section>

</main>
<?php get_footer(); ?>
