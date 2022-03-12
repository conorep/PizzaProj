<?php

// 328/petss/pet.php

class Pet
{
    // instance variables. all copies of pet get these.
    private $_name;
    private $_color;

    //default constructor
    /**
     * @param $_name pet name
     * @param $_color pet color
     */
    function __construct($_name = "Anony", $_color = "Tan")
    {
        $this->_name = $_name;
        $this->_color = $_color;
    }

    /**
     * @return Pet|string $name pet's name
     */
    function getName()
    {
        return $this->_name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return pet color
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * @param $color
     */
    public function setColor($color)
    {
        $this->_color = $color;
    }

    // $this-> is the object that invoked the method
    /**
     * Say that a pet is eating.
     * @return void
     */
    function eat()
    {
        echo "<p>" . $this->_name . " is eating.</p>";
    }

    /**
     * Say that a pet is talking.
     * @return void
     */
    function talk()
    {
        echo "<p>Pet is talking.</p>";
    }

    /**
     * Say that a pet is sleeping.
     * @return void
     */
    function sleep()
    {
        echo "<p>Pet is sleeping.</p>";
    }

}