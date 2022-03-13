<?php
    /*
     * Conor O'Brien SDEV 328
     * premium-member.php
     * */

    /**
     * Premium Member class for paying users of dating site.
     */
    class PremiumMember extends Member
    {
        //premium member fields
        private $_inDoorInterests;
        private $_outDoorInterests;

        /**
         * Constructor for premium-member class
         */
        public function __construct()
        {
            parent::__construct();
        }

        /**
         * Get premium member's indoor interests.
         * @return string
         */
        public function getInDoorInterests()
        {
            return implode(", ", $this->_inDoorInterests);
        }

        /**
         * Set premium member's indoor interests.
         * @param array $inDoorInterests
         */
        public function setInDoorInterests($inDoorInterests)
        {
            $this->_inDoorInterests = $inDoorInterests;
        }

        /**
         * Get premium member's outdoor interests.
         * @return string
         */
        public function getOutDoorInterests()
        {
            return implode(", ", $this->_outDoorInterests);
        }

        /**
         * Set premium member's outdoor interests.
         * @param array $outDoorInterests
         */
        public function setOutDoorInterests($outDoorInterests)
        {
            $this->_outDoorInterests = $outDoorInterests;
        }

    }