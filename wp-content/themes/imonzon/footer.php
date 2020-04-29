</div>
</div>

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