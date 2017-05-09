<?php

include_once ROOT. '/models/News.php';

class NewsController {

    public function actionIndex()
    {
<<<<<<< HEAD
            $newsList = array();
            $newsList = News::getNewsList();

        require_once (ROOT.'/views/news/index.php');
        return true;
=======
        $newsList = array();
        $newsList = News::getNewsList();

    echo "<pre>";
    print_r($newsList);
    echo "<pre>";
>>>>>>> 64aa5dd42a6bc3f80c07347fde3e9630639c9b34
    }

    public function actionView($id)
    {
        if ($id) {
            $newsItem = News::getNewsItemById($id);
        }
        echo "<pre>";
        print_r($newsItem);
        echo "<pre>";
        echo 'actionView';
<<<<<<< HEAD
        return true;
=======
>>>>>>> 64aa5dd42a6bc3f80c07347fde3e9630639c9b34
    }
}