<?php get_header(); ?>
<main class="container space-y-8 pt-[96px]">
    <section class="mt-8 space-y-2">
        <h1 class="font-bold text-center text-5xl">Categories</h1>
        <h2 class="text-[#828282] text-center">Immerse yourself in the diverse categories we have in our catalog.</h2>
    </section>
    <section>
        <div class="grid grid-cols-12 justify-between items-center gap-8">
            <?php
            $args = array(
                'taxonomy' => 'product_cat',
                'orderby' => 'name',
                'hide_empty' => 0,
                'parent' => 0,
            );

            $categories = get_categories($args);
            foreach ($categories as $cat) {
                $category_id = $cat->term_id;
                $thumbnail_id = get_term_meta($category_id, 'thumbnail_id', true);
                $image = wp_get_attachment_url($thumbnail_id);
            ?>
                <a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>" class="col-span-12 md:col-span-3">
                    <img src="<?php echo $image; ?>" class="rounded-lg mx-auto" />

                    <p class="text-center font-bold text-lg">
                        <?php echo $cat->name; ?>
                    </p>
                </a>
            <?php } ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
