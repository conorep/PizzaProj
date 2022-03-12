<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/../pdo-config.php';

    class DataLayer
    {
        //add field to store the db connection object
        private $_dbh;

        //define default constructor
        //TODO: add doc blocks
        public function __construct()
        {
            try {
                //instantiate a PDO database object
                $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
                echo "\nSuccessful.";
            } catch (PDOException $e) {
                echo "\nError connecting to DB " . $e->getMessage();
            }
        }

        /**
         * saveOrder accepts an Order object and inserts it into DB
         * @param $order object
         * @return string the order_id of the inserted row
         */
        function saveOrder($order)
        {
            //1. define the query
            $sql = "INSERT INTO diner_order(item, meal, condiments)
                    VALUES(:food, :meal, :condiments)";

            //2. prepare the statement
            $statement = $this->_dbh->prepare($sql);

            //3. bind the parameters
            $statement->bindParam(':food', $order->getFood());
            $statement->bindParam(':meal', $order->getMeal());
            $statement->bindParam(':condiments', $order->getCondiments());

            //4. execute the query
            $statement->execute();

            //5. process the results
            $id = $this->_dbh->lastInsertId();
            return $id;
        }

        /**
        * saveOrder accepts an Order object and inserts it into DB
        * @param $order Order object
        * @return string the order_id of the inserted row
        */
        function getOrders()
        {
            //1. define the query
            $sql = "SELECT * FROM diner_order";

            //2. prepare the statement
            $statement = $this->_dbh->prepare($sql);

            //3. bind the parameters
            // n/a

            //4. execute the query
            $statement->execute();

            //5. process the results
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }


        /**
         * return an array of condiments
         * @return string[]
         */
        static function getCondiments()
        {
            return array('ketchup', 'mustard', 'sriracha', 'mayo', 'salsa');
        }

        /**
         * return an array of meal options
         * @return string[]
         */
        static function getMeal()
        {
            return array('breakfast', 'lunch', 'dinner');
        }

        /**
         * return an array of drinks
         * @return string[]
         */
        static function getDrinks()
        {
            return array('sprite', 'coke', 'mtn dew');
        }
    }
