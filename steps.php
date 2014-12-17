<?php
class Steps {

    private $all;
    private $count;
    private $curr;

    public function __construct () {

        $this->count = 0;

    }

    public function add ($step) {

        $this->count++;
        $this->all[$this->count] = $step;

    }

    public function setCurrent ($step) {

        reset($this->all);
        for ($i=1; $i<=$this->count; $i++) {
            if ($this->all[$i]==$step) break;
            next($this->all);
        }
        $this->curr = current($this->all);

    }

    public function getCurrent () {

        return $this->curr;

    }

    public function getNext () {

        self::setCurrent($this->curr);
        return next($this->all);

    }

}

$steps = new Steps();
$steps->add('one');
$steps->add('two');
$steps->add('three');
$steps->setCurrent('one');
echo $steps->getCurrent()."<br />";
echo $steps->getNext()."<br />";
$steps->setCurrent('two');
echo $steps->getCurrent()."<br />";
echo $steps->getNext()."<br />";