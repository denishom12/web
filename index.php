<?php

$news = [
    [
        'id' => 1,
        'title' => 'BBC News',
        'descriptions' => 'BBC News является оперативным подразделением Британской радиовещательной корпорации',
        'image' => 'https://www.politico.eu/wp-content/uploads/2015/08/GettyImages-481915008.jpg',
        'date' => '2020-03-02',
        'active' => true
    ],
    [
        'id' => 2,
        'title' => 'CNN News',
        'descriptions' => 'CNN News является оперативным подразделением Британской радиовещательной корпорации',
        'image' => 'https://regnum.ru/uploads/pictures/news/2017/11/10/regnum_picture_1510303796214341_normal.jpg',
        'date' => '2020-03-01',
        'active' => true
    ],
    [
        'id' => 3,
        'title' => 'News 1',
        'descriptions' => 'BBC News является оперативным подразделением Британской радиовещательной корпорации',
        'image' => 'https://www.politico.eu/wp-content/uploads/2015/08/GettyImages-481915008.jpg',
        'date' => '2020-03-02',
        'active' => false
    ],
];

/**
 * Список активных новостей
 *
 * @param array $news
 * @return array
 */
function findActive($news){
    $result=[];
    foreach($news as $item){
        if ($item['active']) {
            $result[] = $item;
        }
    }
    return $result;
}

/**
 * Поиск новости по ID
 *
 * @param array $news
 * @param int $id
 * @return array|bool
 */
function findById($news, $id){
    foreach($news as $item){
        if($item['id']==$id){
            return $item;
        }
    }
    return false;
}

/**
 * @param $news
 */
function findNow($news){
    $result = [];
    $now = date('Y-m-d');

    foreach($news as $item){
        if($item['date'] == $now){
            $result[] = $item;
        }
    }
    return $result;
}

$news = findActive($news);

?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset=" UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <main class ="d-flex">
            <?php foreach($news as $item): ?>
            <article>
                <h1><?= $item['title']?></h1>
                <img src="<?= $item['image']?>"style="width: 150px">
                <p><?= $item['descriptions']?></p>
                <p>
                    <?= $item['date']?>
                </p>
            </article>
            <?php endforeach; ?>
        </main>
    </body>
</html>
