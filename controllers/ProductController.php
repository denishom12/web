<?php


namespace app\controllers;


use app\models\Review;
use app\models\Product;
use yii\web\Controller;

class FilmController extends Controller
{
    /**
     * Список всех фильмов
     */
    public function actionIndex(){
        $products = Product::find()
            ->orderBy(['createdAt'=>SORT_DESC])
            ->all();


        return $this->render('index',[
            'films'=>$films
        ]);
    }

    /**
     * Просмотр одного фильма
     *
     * @param int $id id фильма
     * @return string
     */
    public function actionView($id){
        $film= Film::findOne(['id'=>$id]);
        $comments = Comment::find()
            ->where(['filmId'=>$id])
            ->orderBy(['createdAt'=>SORT_DESC])
            ->all();
        return $this->render('viev',[
            'film'=>$film,
            'comments'=>$comments
        ]);
    }

    /**
     * Просмотр комментариев к фильму
     * @param $id
     * @return string
     */
    public function actionComment($id){
        $film = Film::findOne(['id'=>$id]);
        $comments = Comment::find()
            ->where(['filmId'=>$id])
            ->all();
        return $this->render('comment',[
            'film'=>$film,
            'comments'=>$comments
        ]);
    }
}