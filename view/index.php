<?php

class Storage
{
    private $__data = array();
    public function __set($key, $val)
    {
        $this->__data[$key] = $val;
    }
}
var_dump($st);
$sr = new Storage();
$st->foo = 'foo1';
$st->bar = 'bar1';


/*
class View
{
    $view = new View;
    $view->foo = ‘bar’;
    $view->display(‘index.php’);

}

public function __set($key, $val)
 вызывается при попытке установить
недоступное свойство объекта
 $key – имя свойства
 $val – значение, которое мы пытаемся установить

public function __get($key)
 вызывается при
попытке прочитать недоступное свойство объекта
 $key – имя этого свойства
*/