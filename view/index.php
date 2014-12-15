<?php
class Storage
    implements Countable, Iterator
{
    private $__data = array();
    public function __set($key, $val)
    {
        $this->__data[$key] = $val;
    }
    public function __get($key)
    {
        if (isset ($this->__data[$key]))
        {
            return $this->__data[$key];
        } else
        {
            echo 'Error';
        }
    }
    public function count()
    {
        return count($this->__data);
    }


    public function current()
    {
        // TODO: Implement current() method.
    }


    public function next()
    {
        // TODO: Implement next() method.
    }


    public function key()
    {
        // TODO: Implement key() method.
    }


    public function valid()
    {
        // TODO: Implement valid() method.
    }


    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
}

$sr = new Storage();
$st->foo = 'foo1';
$st->bar = 'bar1';
$st->baz = 'baz1';

echo count($st);

foreach ($st as $name => $value)
{
    echo $name . '=' .  $value;
    echo '<br />';
}


class View
{
    public function display($pash)
    {
        ob_start();
        include __DIR__ . '/' . $pash;
        $ret = ob_get_contents();
        ob_end_clean();
        return $ret;
    }

}
$view = new View();
$html = $view->display('index.html');

echo $html;