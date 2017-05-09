<?php

class News
{

<<<<<<< HEAD
    /**
     * @param $id
     * @return mixed
     */
=======
>>>>>>> 64aa5dd42a6bc3f80c07347fde3e9630639c9b34
    public static function getNewsItemById($id)
    {
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM news WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

<<<<<<< HEAD
            $newsItem = $result->fetch();
=======
            $newsItem =$result->fetch();
>>>>>>> 64aa5dd42a6bc3f80c07347fde3e9630639c9b34

            return $newsItem;
        }
    }

    public static function getNewsList()
    {
<<<<<<< HEAD
        $db = Db::getConnection();

        $newsList = array();

        $result = $db->query('SELECT id, title, date, short_content, preview '
=======
        $host = 'mvc';
        $dbname = 'first';
        $user = 'root';
        $password = '';
        $db = new PDO("mysql::host=$host;dbname=$dbname", $user, $password);
        
        $newsList = array();
        
        $result = $db->query('SELECT id, title, date, short_content '
>>>>>>> 64aa5dd42a6bc3f80c07347fde3e9630639c9b34
            . 'FROM news '
            . 'ORDER BY date DESC '
            . 'LIMIT 5');

<<<<<<< HEAD
        $i = 0;
=======
    $i = 0;
>>>>>>> 64aa5dd42a6bc3f80c07347fde3e9630639c9b34
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
<<<<<<< HEAD
            $newsList[$i]['preview'] = $row['preview'];
=======
>>>>>>> 64aa5dd42a6bc3f80c07347fde3e9630639c9b34
            $i++;
        }
        return $newsList;
    }
}