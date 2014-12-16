<?php
class Storage
    implements Countable, Iterator
{
    private $__data = array();
    private $iterator;
    function __construct()
    {
        $this->__data = array();
    }
    function getResult()
    {
        $this->iterator = new ArrayIterator($this->data);
    }


    public function __set($id, $val)
    {
        $this->__data[$id] = $val;
    }
    public function __get($id)
    {
        if (isset ($this->__data[$id]))
        {
            return $this->__data[$id];
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
        return current($this->__data);
    }


    public function next()
    {
        return next($this->__data);
    }



    public function key()
    {
        $next = next($this->__data);
        $key = key($this->__data);
        if (isset($key)) {
            return $next[1];
        } else {
            $this->beyondLastField = true;
            return false;
    }
    }
    private $beyondLastField = false;

    public function valid()
    {
        return !$this->beyondLastField;
    }


    public function rewind()
    {
        $this->beyondLastField = false;
        return reset($this->__data);
    }
}

$sr = new Storage();
$st->foo = 'foo1';
$st->bar = 'bar1';
$st->baz = 'baz1';

echo count($st);
echo current($st);
echo next($st);
echo valid($st);
echo key($st);


class View
    extends Storage
{
    private $path;

    public function __construct($path)
    {

        parent::__construct();
        $this->template_path = $path;
    }
    

    public function display($templete)
    {
        foreach ($st as $name => $value)
        {
            echo $name . '=' .  $value;
            echo '<br />';
        }

        ob_start();
        include __DIR__ . '/' . $templete;
        $ret = ob_get_contents();
        ob_end_clean();
        return $ret;
    }

}
$view = new View();
$html = $view->display('view/viewnews.php');

echo $html;