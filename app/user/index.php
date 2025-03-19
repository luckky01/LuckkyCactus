<!-- this user page -->
<?php
$all_product = $dataHandler->get("SELECT * FROM product");
$all_order = $dataHandler->get("SELECT * FROM orders");
?>

<div class="container pt-5">
    <?php
    foreach ($all_product as $data):
        include "components/product_select.php";
    endforeach;

    include "components/product.php";
    include "components/history.php";
    ?>
</div>