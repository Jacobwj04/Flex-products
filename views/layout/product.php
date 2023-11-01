<?php

    require_once './../source/database.php';

?>
<ul class="products">
<?php foreach ($result as $product) : ?>
    <li class="products__product">
        <header class="product__header">
            <h3 class="product__h3"><?php echo $product['title'];?></h3>
        </header>
        <figure class="product__figure">
            <img src="img/<?php echo $product['img']; ?>" alt="" class="product__img">
        </figure>
        <p class="product__paragraph"><?php echo $product['intro']; ?></p>
    </li>
    <?php endforeach; ?>
</ul>