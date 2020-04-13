<?php

/**
 * @var $film \app\models\Film
 * @var $comments \app\models\Comment[]
 */

?>

<article>
    <h3><?= $film->title?></h3>
    <p><?= $film->id?></p>
</article>
<ul>
    <?php foreach ($comments as $comment): ?>
        <li>
            <?= $comment->text?>
            &nbsp;
            <time class="small text-muted">
                <?= date('d.m H:s', strtotime($comment->createdAt))?>
            </time>
        </li>
    <?php endforeach; ?>
</ul>
