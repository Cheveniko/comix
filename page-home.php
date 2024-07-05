<?php get_header(); ?>
<main class="container space-y-8 pt-[96px]">
    <section class="relative">
        <img
            src="<?php bloginfo('template_url'); ?>/assets/img/banner-home.jpg"
            class="mx-auto"
            alt="Banner evento" />
        <div class="absolute top-[15%] space-y-4 md:bottom-[15%] md:left-[5%] md:right-[5%] z-20 max-w-[400px]">
            <h1
                class="font-bold md:text-3xl text-lg">
                Our Comics
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
        <h2 class="font-semibold text-center text-2xl">Premium Comics</h2>

        <div class="grid grid-cols-12 gap-8 items-center justify-between">
            <?php
            $premium_args = array(
                'post_type' => 'product',
                'posts_per_page' => 4,
            );
            $premium_query = new WP_Query($premium_args);
            if ($premium_query->have_posts()) :
                while ($premium_query->have_posts()) : $premium_query->the_post();
                    global $product;
            ?>
                    <div class="md:col-span-3 col-span-12 space-y-4">
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

    </section>
    <section class="space-y-4">
        <h2 class="font-semibold text-center text-2xl">Our Blog</h2>

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
                    <div class="md:col-span-3 col-span-12 space-y-4">
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
