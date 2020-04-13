<?php

use yii\helpers\Html;
/**
 * @var $products
 *
 */

?>

    <h1>Фильмы</h1>

<?php foreach ($products as $product): ?>

    <article>
        <h3>
            <?= Html::a($product->title,['product/view','id'=> $product->id])?>
        </h3>
        <p><?= $product->id?></p>
    </article>

<?php endforeach; ?>