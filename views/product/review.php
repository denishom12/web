<?php

/**
 * @var $product
 * @var $reviews
 */

?>

<article>
    <h3><?= $product->title?></h3>
    <p><?= $product->id?></p>
</article>
<ul>

    <?php foreach ($reviews as $review): ?>
        <li><?= $reviews->text?></li>
    <?php endforeach; ?>

</ul>