<?php
get_header();
$slug = basename($_SERVER['REQUEST_URI']);
$args = array(
    'post_type' => 'products',
    'posts_per_page' => -1,
    'category_name' => $slug
);

$posts = get_posts($args);
?>
<div class="side-content">
    <div class="items">
        <?php foreach ($posts as $post) : ?>
            <div class="item">
                <div><?= $post->post_title; ?></div>
                <div class="item-image"><img class="rounded" src="<?= get_field('image', $post->ID) ?>" alt=""></div>
                <div>$<?= get_field('price', $post->ID) ?></div>
                <?php echo do_shortcode('[wp_cart_button name="' . $post->post_title . '" price="' . get_field('price', $post->ID) . '"]') ?>
            </div>
            <div class="item">
                <div><?= $post->post_title; ?></div>
                <div class="item-image"><img class="rounded" src="<?= get_field('image', $post->ID) ?>" alt=""></div>
                <div>$<?= get_field('price', $post->ID) ?></div>
                <?php echo do_shortcode('[wp_cart_button name="' . $post->post_title . '" price="' . get_field('price', $post->ID) . '"]') ?>
            </div>
            <div class="item">
                <div><?= $post->post_title; ?></div>
                <div class="item-image"><img class="rounded" src="<?= get_field('image', $post->ID) ?>" alt=""></div>
                <div>$<?= get_field('price', $post->ID) ?></div>
                <?php echo do_shortcode('[wp_cart_button name="' . $post->post_title . '" price="' . get_field('price', $post->ID) . '"]') ?>
            </div>
            <div class="item">
                <div><?= $post->post_title; ?></div>
                <div class="item-image"><img class="rounded" src="<?= get_field('image', $post->ID) ?>" alt=""></div>
                <div>$<?= get_field('price', $post->ID) ?></div>
                <?php echo do_shortcode('[wp_cart_button name="' . $post->post_title . '" price="' . get_field('price', $post->ID) . '"]') ?>
            </div>
            <div class="item">
                <div><?= $post->post_title; ?></div>
                <div class="item-image"><img class="rounded" src="<?= get_field('image', $post->ID) ?>" alt=""></div>
                <div>$<?= get_field('price', $post->ID) ?></div>
                <?php echo do_shortcode('[wp_cart_button name="' . $post->post_title . '" price="' . get_field('price', $post->ID) . '"]') ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php get_footer(); ?>