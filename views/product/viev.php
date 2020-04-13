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
        <li>
            <?= $review->text?>
            &nbsp;
            <time class="small text-muted">
                <?= date('d.m H:s', strtotime($review->createdAt))?>
            </time>
        </li>
    <?php endforeach; ?>
</ul>
