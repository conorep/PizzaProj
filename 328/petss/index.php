<?php

    require 'pet.php';
    require 'dog.php';
    require 'cat.php';

    $pet1 = new Pet("George", "Beige");
    $pet2 = new Pet("Jefe");
    $pet3 = new Pet();


    $pet1-> eat();
    var_dump($pet1);
    $pet1-> talk();
    $pet1-> sleep();
    echo $pet1-> getColor();

/*    $pet2-> eat();
    $pet2-> color();*/

    $pet3-> eat();
    echo $pet3-> getColor();

    $pet3->setName('Rufus De Dog');
    echo $pet3->getName();

    $pet1->setColor("MassiveBlue");
    echo $pet1->getColor();


    $pet4 = new Dog("Doug");
    $pet4->fetch();
    $pet4->eat();


    $pet5 = new Cat("Nick");
    $pet5->scratch();
    $pet5->eat();
    $pet5->fetch();


    if ($pet3 instanceof Dog){
        $pet3->fetch();
    } else {
        echo "<p>pet3 is not a dog</p>";
    }

    if (gettype($pet3) == 'Dog'){
        $pet3->fetch();
    } else {
        echo "<p>pet 3 is not a dog</p";
    }

