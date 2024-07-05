<?php get_header(); ?>
<main class="container space-y-8 pt-[96px]">
    <section class="relative">
        <img
            src="<?php bloginfo('template_url'); ?>/assets/img/banner-comics.png"
            class="mx-auto"
            alt="Banner evento" />
        <div class="absolute top-[15%] space-y-4 bottom-[15%] left-[5%] right-[5%] z-20 max-w-[400px]">
            <h1
                class="font-bold text-lg md:text-3xl">
                Featured this week
            </h1>
            <p class="hidden md:block">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi purus magna, pharetra ut libero non.
            </p>
            <a
                href="<?php echo get_home_url(); ?>/comics"
                class="bg-white rounded-lg block w-fit md:px-4 md:py-2 p-2 shadow-lg text-comix-primary">
                Read Now!
            </a>
        </div>
    </section>

    <section class="space-y-4">
        <h1 class="text-4xl font-bold text-center">Last Comics</h1>
        <div class="grid grid-cols-12 gap-8 items-center justify-between">
            <?php
            $premium_args = array(
                'post_type' => 'product',
                'paged' => get_query_var('paged', 1),
                'posts_per_page' => 12,
            );
            $premium_query = new WP_Query($premium_args);
            if ($premium_query->have_posts()) :
                while ($premium_query->have_posts()) : $premium_query->the_post();
                    global $product;
            ?>
                    <div class="col-span-12 md:col-span-3 space-y-4">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url($premium_query->post->ID); ?>" class="rounded-lg" />
                        </a>
                        <div>
                            <a href="<?php the_permalink(); ?>" class="text-lg text-comix-primary"><?php echo wp_trim_words(get_the_title(), 10); ?></a>
                            <p class="text-[#454545]"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                        </div>
                        <p>$<?php echo $product->get_price(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="bg-comix-primary text-white block w-fit px-4 rounded-lg py-2">Buy</a>
                    </div>
            <?php
                endwhile;
                // Restaurar datos originales del loop
                wp_reset_postdata();
            else :
                // Si no hay productos
                echo '<p>No hay comics disponibles.</p>';
            endif;
            ?>
        </div>
        <div class="flex justify-center items-center mt-4 gap-x-4">
            <?php
            echo paginate_links(array(
                'total' => $premium_query->max_num_pages,
                'prev_text' => '<span>«</span>',
                'next_text' => '<span>»</span>',
            ));
            ?>
        </div>

    </section>
</main>
<?php get_footer(); ?>
