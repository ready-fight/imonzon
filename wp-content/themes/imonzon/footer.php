</div>
</div>
<div class="text-center" style="padding-bottom: 15px; width: 100%; transform: translateY(35px); background-color: #f7f7f7; border-top: 2px solid #000; margin-top: 35px;"><img class="rounded" width="400" src="<?= get_template_directory_uri() ?>/images/home/safe-badge.png" alt=""></div>
<script>
    var quantity = 0;
    $('.wspsc_cart_item_qty').each(function() {
        quantity += parseInt($(this).val());
    });

    if ($('.wspsc_cart_item_qty').length != 0) {
        $('#shopping-cart-count').text(quantity);
    }
</script>
</body>

</html>