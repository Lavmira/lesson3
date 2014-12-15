<?php

interface IModel
{
    public  function getAll();
    public  function getOne($id);
}
interface IHasAuthor
{
    public  function getAuthor();
}

class NewsModel
implements IModel, IHasAuthor
{

    public function getAll()
    {
        echo 'Get all news';
    }

    public function getOne($id)
    {
        echo 'Get one article #' . $id . '!' ;
    }

    public function getAuthor()
    {
      echo 'Лев Толстой';
    }
}

$model = new  NewsModel();
$model->getAll();
$model->getOne();
$model->getAuthor();