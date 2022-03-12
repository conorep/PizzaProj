<?php
    /*
     * Conor O'Brien SDEV 328
     * data-layer.php
     * */
    require_once $_SERVER['DOCUMENT_ROOT'] . '/../db-creds.php';

    /**
     * Class storing data for dating site.
     */
    class DataLayer
    {

        //add field to store the db connection object
        private $_dbh;

        //define default constructor
        public function __construct()
        {
            //oops make them constants
            try {
                //instantiate a PDO database object
                $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
                echo "\nSuccessful.";
            } catch (PDOException $e) {
                echo "\nError connecting to DB " . $e->getMessage();
            }
        }

        /**
         * Retrieves an array of genders.
         * @return string[] of genders
         */
        static function getGenders()
        {
            return array('Male', 'Female', 'Non-Binary');
        }

        /**
         * Retrieves an array of US states and territories.
         * @return string[]
         */
        static function getStates()
        {
            return array("Washington", "Alaska", "Alabama", "Arkansas", "American Samoa", "Arizona", "California", "Colorado",
                "Connecticut", "District of Columbia", "Delaware", "Florida", "Georgia", "Guam", "Hawaii", "Iowa", "Idaho",
                "Illinois", "Indiana", "Kansas", "Kentucky", "Louisiana", "Massachusetts", "Maryland", "Maine", "Michigan",
                "Minnesota", "Missouri", "Mississippi", "Montana", "North Carolina", "North Dakota", "Nebraska",
                "New Hampshire", "New Jersey", "New Mexico", "Nevada", "New York", "Ohio", "Oklahoma", "Oregon",
                "Pennsylvania", "Puerto Rico", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah",
                "Virginia", "Virgin Islands", "Vermont", "Wisconsin", "West Virginia", "Wyoming");
        }

        /**
         * Retrieves an array of sought mate types.
         * @return string[]
         */
        static function getSeeking()
        {
            return array("Male", "Female", "Any");
        }

        /**
         * Retrieves an array of outdoor activities.
         * @return string[]
         */
        static function getOutdoor()
        {
            return array('kayaking', 'running', 'reading', 'racing', 'gardening', 'camping', 'climbing',
                'tanning', 'soccer', 'fighting', 'volleyball', 'skating');
        }

        /**
         * Retrieves an array of indoor activities.
         * @return string[]
         */
        static function getIndoor()
        {
            return array('painting', 'music', 'writing', 'knitting', 'cooking', 'brewing', 'meditating',
                'games', 'coding', 'drawing', 'electronics', 'yoga');
        }
    }