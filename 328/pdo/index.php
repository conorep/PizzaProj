<?php

    //turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Document</title>
</head>
<body>

    <?php
        /*CRED:
                Create = INSERT
                Read = SELECT
                Update = UPDATE
                Delete = DELETE
        */

        /*require '/home/cobrieng/pdo-config.php';*/
        /*echo $_SERVER['DOCUMENT_ROOT'];*/

        //here's a nice way to get home directories when several people are doing work on diff servers
        require $_SERVER['DOCUMENT_ROOT'].'/../pdo-config.php';

        try {
            //instantiate a PDO database object
            $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            echo "\nSuccessful.";
        } catch (PDOException $e) {
            echo "\nError connecting to DB " . $e->getMessage();
        }

        //Using a Prepared Statement:  INSERT

        //1. Define the query
        $sql = "INSERT INTO pets (name, type, color)
                VALUES(:name, :type, :color)";

        //VALUES ('Oliver', 'cat', 'black');

        //2. Prepare the statement
        $statement = $dbh->prepare($sql);

        //3. Bind the parameters (if there are any) - this has 3. name, type, color.
        $name = 'Joey';
        $type = 'kangaroo';
        $color = 'purple';

        $statement->bindParam(':name', $name);
        $statement->bindParam(':type', $type);
        $statement->bindParam(':color', $color);

        //4. Execute the statement
        $statement->execute();
        $id = $dbh->lastInsertId();
        echo "\n$name inserted with ID: $id";

        //3b. Bind the parameters (if there are any) - this has 3. name, type, color.
        $name = 'Polly';
        $type = 'parrot';
        $color = 'green';

        $statement->bindParam(':name', $name);
        $statement->bindParam(':type', $type);
        $statement->bindParam(':color', $color);

        //4b. Execute the statement
        $statement->execute();
        $id = $dbh->lastInsertId();
        echo "\n$name inserted with ID: $id";

        //5. Process the result (if there is one)
        // none here, just inserting


        //Using a Prepared Statement:  UPDATE

        //1. Define the query
        $sql = "UPDATE pets SET name = :name WHERE type = :type";

        //2. Prepare the statement
        $statement = $dbh->prepare($sql);

        //3. Bind the parameters (if there are any)
        $name = 'Fred';
        $type = 'kangaroo';

        $statement->bindParam(':name', $name);
        $statement->bindParam(':type', $type);

        //4. Execute the statement
        $statement->execute();

        //5. Process the result (if there is one)
        // none here, just inserting


        //Using a Prepared Statement:  DELETE

        //1. Define the query
        $sql = 'DELETE FROM pets WHERE id = :id';

        //2. Prepare the statement
        $statement = $dbh->prepare($sql);

        //3. Bind the parameters (if there are any)
        $id = 5;
        $statement->bindParam(':id', $id);

        //4. Execute the statement
        $statement->execute();
        echo "<p>Pet $id has been deleted.</p>";

        //5. Process the result (if there is one)


        //Using a Prepared Statement:  SELECT a single row

        //1. Define the query
        $sql = "SELECT * FROM pets WHERE id = :id";

        //2. Prepare the statement
        //always the same unless you want to change var names
        $statement = $dbh->prepare($sql);

        //3. Bind the parameters (if there are any)
        $id = 11;
        $statement->bindParam(':id', $id);

        //4. Execute the statement
        $statement->execute();

        //5. Process the result (if there is one)
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        echo $row['id']." ".$row['name']." ".$row['type'];

        //Using a Prepared Statement:  SELECT a group of rows
        //1. Define the query
        $sql = "SELECT * FROM pets WHERE type = :type";

        //2. Prepare the statement
        $statement = $dbh->prepare($sql);

        //3. Bind the parameters (if there are any)
        $type = 'kangaroo';
        $statement->bindParam(':type', $type);

        //4. Execute the statement
        $statement->execute();

        //5. Process the result (if there is one)
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $row) {
            echo "<p>".$row['id'] . " " . $row['name'] . " " . $row['type']."</p>";
        }

        //Using a Prepared Statement:  SELECT a group of rows
        //1. Define the query
        $sql = "SELECT * FROM pets WHERE id >= :id"; //LIKE 'W_' or LIKE 'W%'

        //2. Prepare the statement
        $statement = $dbh->prepare($sql);

        //3. Bind the parameters (if there are any)
        $id = 7;
        $statement->bindParam(':id', $id);

        //4. Execute the statement
        $statement->execute();

        //5. Process the result (if there is one)
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo "<p>HERE ARE THE IDS OVER OR EQUAL TO 7: </p>";
        foreach($result as $row) {
            echo "<p>".$row['id'] . " " . $row['name'] . " " . $row['type']."</p>";
        }
    ?>

</body>
</html>
