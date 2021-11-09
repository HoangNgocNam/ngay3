<?php

class Fan
{
private $slow;
private $medium;
private $fast;
private $speed;
private $on;
private $radius;
private $color;

    public function __construct()
    {
        $this->slow = 1;
        $this->medium = 2;
        $this->fast = 3;
        $this->speed = "slow";
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
}

    /**
     * @return int
     */
    public function getSlow()
    {
        return $this->slow;
    }

    /**
     * @param int $slow
     * @return Fan
     */
    public function setSlow($slow)
    {
        $this->slow = $slow;
        return $this;
    }

    /**
     * @return int
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @param int $medium
     * @return Fan
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;
        return $this;
    }

    /**
     * @return int
     */
    public function getFast()
    {
        return $this->fast;
    }

    /**
     * @param int $fast
     * @return Fan
     */
    public function setFast($fast)
    {
        $this->fast = $fast;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param string $speed
     * @return Fan
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return false
     */
    public function getOn()
    {
        return $this->on;
    }

    /**
     * @param false $on
     * @return Fan
     */
    public function setOn($on)
    {
        $this->on = $on;
        return $this;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     * @return Fan
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
        return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Fan
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function toString()
    {
        if ($this->on){
            echo $this->speed . "," . $this->color. "," .$this->radius. "," ."fan is on";
        } else {
            echo $this->color . "," . $this->radius . "," . "fan is off";
        }
}

}