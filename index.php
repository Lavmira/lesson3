<?php
class Article {
    public  $title;
    public  $text;

    public function __construct($title, $text=''){
        $this->title =$title;
        $this->text = $text;
    }
}

    public function getTitle()
{
    return $this->title;

}


class NewsArticle
    extends  Article
{
    public $source;
}

$art = new NewsArticle('заголовок', 'текст');




class RepostArticle
    extends  Article
{
    public $source;

    public function __construct($title, $text; $source)
    {

        $this->source = $source;
        parent::__construct($title, $text);
    }
}

$art = new RepostArticle('заголовок', 'текст', 'откуда новость');


?>
<article>
    <header><?=$art->getTitle(); ?></header>
    <div><?=$art->text; ?></div>
    <div>Источник<?=$art->source; ?></div>
</article>




//$art->title = 'заголовок';
//$art->text = 'текст';
//$art->view();
/*public function view() {
    echo '<h1>' . $this->title . '</h1>';
    echo '<p>' . $this->text . '</p>';
}*/

