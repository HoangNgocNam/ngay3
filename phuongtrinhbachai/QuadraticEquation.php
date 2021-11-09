<?php

class QuadraticEquation
{
    /**
     * @var
     */
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this ->a;
    }

    public function setA($a)
    {
        $this -> a = $a;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param mixed $b
     * @return QuadraticEquation
     */
    public function setB($b)
    {
        $this->b = $b;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * @param mixed $c
     * @return QuadraticEquation
     */
    public function setC($c)
    {
        $this->c = $c;
        return $this;
    }

    public function getDiscriminant()
    {
        return $denta = ($this->b * $this->b) - (4*$this->a * $this->c);
    }

    public function getRoot()
    {
        $denta = $this->getDiscriminant();
        if ($denta < 0){
            echo "The equation has no roots";
        } elseif ($denta == 0){
           echo ((-$this->b)/(2*$this->a));
        }else {
            echo ((-$this->b + sqrt($denta))/2*$this->a) ." and ". ((-$this->b - sqrt($denta))/2*$this->a);
        }
    }
}