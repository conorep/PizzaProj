<?php

    class Cat extends Pet
    {
        function scratch()
        {
            echo"<p>" .$this->getName() . " is scratching.</p>";
        }

        /*@Override*/
        function fetch()
        {
            echo "<p>" . $this->getName() . " does not fetch.</p>";
        }
    }