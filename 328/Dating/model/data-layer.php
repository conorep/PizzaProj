<?php
    /*
     * Conor O'Brien SDEV 328
     * data-layer.php
     * */
    require_once $_SERVER['DOCUMENT_ROOT'] . '/../datingconfig.php';

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
            try {
                //instantiate a PDO database object
                $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            } catch (PDOException $e) {
                echo "\nError connecting to DB " . $e->getMessage();
            }
        }

        //TODO: add picture functions to site

        /**
         * Add a user row when a new user is created. Take in member object, go from there.
         * @param $memberObj object
         * @return void
         */
        function insertMember($memberObj)
        {
            $sql = 'INSERT INTO member (fname, lname, age, gender, phone, email, state, seeking, biography, premium, interests)
                    VALUES(:fname, :lname, :age, :gender, :phone, :email, :userstate, :seeking, :biography, :premium, :interests)';
            $statement = $this->_dbh->prepare($sql);

            $memberType = $memberObj instanceof PremiumMember ? 1 : 0;
            if ($memberObj instanceof PremiumMember) {
                $memberInterests = $memberObj->getOutDoorInterests();
                $memberInterests .= ", " . $memberObj->getInDoorInterests();
            } else {
                $memberInterests = null;
            }
            /*$memberPic = $memberObj instanceof PremiumMember ? $memberObj->getPic() : null;*/

            $statement->bindParam(':fname', $memberObj->getFname());
            $statement->bindParam(':lname', $memberObj->getLname());
            $statement->bindParam(':age', $memberObj->getAge());
            $statement->bindParam(':gender', $memberObj->getGender());
            $statement->bindParam(':phone', $memberObj->getPhone());
            $statement->bindParam(':email', $memberObj->getEmail());
            $statement->bindParam(':userstate', $memberObj->getState());
            $statement->bindParam(':seeking', $memberObj->getSeeking());
            $statement->bindParam(':biography', $memberObj->getBio());
            $statement->bindParam(':premium', $memberType);
            $statement->bindParam(':interests', $memberInterests);
            /*$statement->bindParam(':image', $memberPic);*/

            $statement->execute();
        }

        /**
         * Get all members in the database and return.
         * @return array of member data
         */
        function getMembers()
        {
            $sql = 'SELECT * FROM member ORDER BY lname';
            $statement = $this->_dbh->prepare($sql);
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        /**
         * Get a specific member from DB. Input userID, output all details.
         * @param $memberId string ID of member to return
         * @return array of member data, or empty ("")if not found
         */
        function getMember($memberId)
        {
            $sql = 'SELECT * FROM member WHERE member_id = :memberID';
            $statement = $this->_dbh->prepare($sql);
            $statement->bindParam(':memberID', $memberId);
            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
        }

        /**
         * Return all interests of member.
         * @param $memberId string ID of member
         * @return array of member data, or empty ("")if not found
         */
        function getInterests($memberId)
        {
            $sql = 'SELECT interests FROM member WHERE member_id = :memberID';
            $statement = $this->_dbh->prepare($sql);
            $statement->bindParam(':memberID', $memberId);
            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
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