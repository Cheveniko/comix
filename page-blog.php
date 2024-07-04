<?php get_header(); ?>
<main class="container space-y-8 pt-[96px]">
    <section class="relative">
        <img
            src="<?php bloginfo('template_url'); ?>/assets/img/banner-home.jpg"
            class="mx-auto"
            alt="Banner evento" />
        <div class="absolute top-[15%] space-y-4 bottom-[15%] left-[5%] right-[5%] z-20 max-w-[400px]">
            <h1
                class="font-bold text-3xl">
                Our Blog
            </h1>
            <p class="">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi purus magna, pharetra ut libero non.
            </p>
            <a
                href="<?php echo get_home_url(); ?>/comics"
                class="bg-white rounded-lg block w-fit px-4 py-2 shadow-lg text-comix-primary">
                Read Now!
            </a>
        </div>
    </section>

    <section class="space-y-4">
        <h1 class="text-4xl font-bold text-center">Latest Posts</h1>

        <div class="grid grid-cols-12 gap-8 items-center justify-between">
            <?php
            $free_args = array(
                'post_type' => 'post',
                'paged' => get_query_var('paged', 1),
                'posts_per_page' => 12,
            );
            $free_query = new WP_Query($free_args);
            if ($free_query->have_posts()) :
                while ($free_query->have_posts()) : $free_query->the_post();
            ?>
                    <div class="col-span-4 space-y-4">
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
        <div class="flex justify-center items-center mt-4 gap-x-4">
            <?php
            echo paginate_links(array(
                'total' => $free_query->max_num_pages,
                'prev_text' => '<span>«</span>',
                'next_text' => '<span>»</span>',
            ));
            ?>
        </div>

    </section>
</main>
<?php get_footer(); ?>
</main>
<?php get_footer(); ?>
