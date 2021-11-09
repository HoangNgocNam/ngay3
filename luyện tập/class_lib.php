<?php
class Person{
    public $name;

    function setName ($newName)
    {
        $this ->name = $newName;
    }
    function getName()
    {
        return $this -> name;
    }
}
?>