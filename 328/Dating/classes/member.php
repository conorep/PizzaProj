<?php
    /*
     * Conor O'Brien SDEV 328
     * member.php
     * */

    /**
     * Member class for standard users of dating site.
     */
    class Member
    {
        //member fields
        private $_fname;
        private $_lname;
        private $_age;
        private $_gender;
        private $_phone;
        private $_email;
        private $_state;
        private $_seeking;
        private $_bio;

        /**
         * Constructor for member class.
         */
        public function __construct()
        {
        }

        /**
         * Get member's first name.
         * @return string
         */
        public function getFname()
        {
            return $this->_fname;
        }

        /**
         * Set member's first name.
         * @param string $fname
         */
        public function setFname($fname)
        {
            $this->_fname = $fname;
        }

        /**
         * Get member's last name.
         * @return string
         */
        public function getLname()
        {
            return $this->_lname;
        }

        /**
         * Set member's last name.
         * @param string $lname
         */
        public function setLname($lname)
        {
            $this->_lname = $lname;
        }

        /**
         * Get member's age.
         * @return number member's age
         */
        public function getAge()
        {
            return $this->_age;
        }

        /**
         * Set member's age.
         * @param number $age of member
         */
        public function setAge($age)
        {
            $this->_age = $age;
        }

        /**
         * Get member's gender.
         * @return string
         */
        public function getGender()
        {
            return $this->_gender;
        }

        /**
         * Set member's gender.
         * @param string $gender
         */
        public function setGender($gender)
        {
            $this->_gender = $gender;
        }

        /**
         * Get member's phone number.
         * @return string
         */
        public function getPhone()
        {
            return $this->_phone;
        }

        /**
         * Set member's phone number.
         * @param string $phone
         */
        public function setPhone($phone)
        {
            $this->_phone = $phone;
        }

        /**
         * Get member's email.
         * @return string
         */
        public function getEmail()
        {
            return $this->_email;
        }

        /**
         * Set member's email.
         * @param string $email
         */
        public function setEmail($email)
        {
            $this->_email = $email;
        }

        /**
         * Get member's home state.
         * @return string
         */
        public function getState()
        {
            return $this->_state;
        }

        /**
         * Set member's home state.
         * @param string $state
         */
        public function setState($state)
        {
            $this->_state = $state;
        }

        /**
         * Get member's sought-after gender.
         * @return string
         */
        public function getSeeking()
        {
            return $this->_seeking;
        }

        /**
         * Set member's sought-after gender.
         * @param string $seeking
         */
        public function setSeeking($seeking)
        {
            $this->_seeking = $seeking;
        }

        /**
         * Get member's bio info.
         * @return string
         */
        public function getBio()
        {
            return $this->_bio;
        }

        /**
         * Set member's bio info.
         * @param string $bio
         */
        public function setBio($bio)
        {
            $this->_bio = $bio;
        }

    }
