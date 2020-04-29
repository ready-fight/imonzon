<?php get_header(); ?>
<div class="side-content"></div>


<script>
    if ($('.shopping_cart').length == 0) {
        $('.side-content').append('<p>Nothing in your shopping cart.</p>');
    } else {
        $('.side-content').append($('.shopping_cart').css('display', 'block'));
    }
</script>
<?php get_footer(); ?>