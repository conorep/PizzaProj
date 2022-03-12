<?php
    /*
     * Conor O'Brien SDEV 328
     * data-validation.php
     * */

    /**
     * Class storing methods to validate data from forms in dating site.
     */
    class DataValidation
    {
        /**
         * check that string is all alphabetic
         * @param $name person's name to verify
         * @return bool true if valid, otherwise false
         */
        static function validName($name)
        {
            $name = str_replace("'", '', $name);
            return (ctype_alpha($name));
        }

        /**
         * check that age is between 18 and 118
         * @param $age person's age number
         * @return bool true if valid, otherwise false
         */
        static function validAge($age)
        {
            return ($age >= 18 && $age <= 118);
        }

        /**
         * check that genders are within gender array - no spoofing
         * @param $gender String of gender to check for spoofing
         * @return bool true if valid, otherwise false
         */
        static function validGender($gender)
        {
            return in_array($gender, DataLayer::getGenders());
        }

        /**
         * break phone num down to numbers only and return it
         * @param $phoneNum String of phone num to break down
         * @return string phone number with only nums
         */
        static function stripPhone($phoneNum)
        {
            $phoneNumeric = preg_replace('/[^0-9]/', '', $phoneNum);

            return $phoneNumeric;
        }

        /**
         * check for valid us number
         * @param $phonenum String of numbers to check for 10 characters and numberic
         * @return bool true if valid, otherwise false
         */
        static function validPhone($phonenum)
        {
            //needs to be 10 numbers long. nothing else.
            if (strlen($phonenum) != 10 || !is_numeric($phonenum)) {
                return false;
            }
            return true;
        }

        /**
         * check for valid email
         * @param $email String input to check
         * @return mixed returning true or false if it's a real email address or not
         */
        static function validEmail($email)
        {
            return (filter_var($email, FILTER_VALIDATE_EMAIL));
        }

        /**
         * check for non-spoofed state
         * @param $state String values to check
         * @return bool true if valid, otherwise false
         */
        static function validState($state)
        {
            return in_array($state, DataLayer::getStates());
        }

        /**
         * check for non-spoofed seeking
         * @param $seeking String value of selected sought parties
         * @return bool true if valid, otherwise false
         */
        static function validSeeking($seeking)
        {
            return in_array($seeking, DataLayer::getSeeking());
        }

        /**
         * validate outdoor and indoor activities
         * @param $activity String[] variable
         * @param $num Number to see if in or outdoor
         * @return bool true if valid, otherwise false
         */
        static function validInterests($activity, $num)
        {
            if ($num == 1) {
                $getActivity = DataLayer::getIndoor();
            } else {
                $getActivity = DataLayer::getOutdoor();
            }

            if (!empty($activity)) {
                foreach ($activity as $acts) {
                    if (!in_array($acts, $getActivity)) {
                        return false;
                    }
                }
            }
            return true;
        }
    }


