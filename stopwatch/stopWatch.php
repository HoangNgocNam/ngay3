<?php

class stopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = 0;
        $this->endTime = 0;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     * @return stopWatch
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     * @return stopWatch
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function start()
    {
        $this->startTime = microtime(true);
    }

    public function stop()
    {
        $this->endTime = microtime(true);
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }

    function sum()
    {
        $sum = 0;
        for ($i = 0; $i < 1000; $i++) {
            $sum += $i;
        }
        echo $sum;
    }
}