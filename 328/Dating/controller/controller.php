<?php
    /*
     * Conor O'Brien SDEV 328
     * controller.php
     * */

    /**
     * Dating site Controller class.
     */
    class Controller
    {
        //f3 object field
        private $_f3;

        function __construct($f3)
        {
            $this->_f3 = $f3;
        }

        //home page
        function home()
        {
            $views = new Template();
            echo $views->render('views/home.html');
        }

        //info page
        function info()
        {
            //initialize empty vars for sticky stuff
            $fname = '';
            $lname = '';
            $age = '';
            $gender = '';
            $phonenum = '';
            $premCheck = '';

            //if the form has been posted
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $phonenum = DataValidation::stripPhone($_POST['phonenum']);
                $premCheck = $_POST['premiumCheck'];

                if (!DataValidation::validName($fname) || !DataValidation::validName($lname)) {
                    $this->_f3->set('errors["name"]', 'Please enter a valid name.');
                }

                if (!DataValidation::validAge($age)) {
                    $this->_f3->set('errors["age"]', 'Please enter a valid age (18+).');
                }

                if (!empty($gender) && !DataValidation::validGender($gender)) {
                    $this->_f3->set('errors["gender"]', 'Please do not spoof gender.');
                }

                if (!DataValidation::validPhone($phonenum)) {
                    $this->_f3->set('errors["phonenum"]', 'Please enter a valid ten-digit number.');
                }

                //if all good, create a member or premium member, set fields, and reroute
                if (empty($this->_f3->get('errors'))) {
                    if ($premCheck == 'yes') {
                        $_SESSION['datingMember'] = new PremiumMember();
                    } else {
                        $_SESSION['datingMember'] = new Member();
                    }

                    $_SESSION['datingMember']->setFname($fname);
                    $_SESSION['datingMember']->setLname($lname);
                    $_SESSION['datingMember']->setAge($age);
                    $_SESSION['datingMember']->setGender($gender);
                    $_SESSION['datingMember']->setPhone($phonenum);

                    //redirect user to next page
                    $this->_f3->reroute('profile');
                }
            }

            $this->_f3->set('genders', DataLayer::getGenders());

            //sticky sets
            $this->_f3->set('fname', $fname);
            $this->_f3->set('lname', $lname);
            $this->_f3->set('age', $age);
            $this->_f3->set('userGender', $gender);
            $this->_f3->set('phonenum', $phonenum);
            $this->_f3->set('premiumCheck', $premCheck);

            $views = new Template();
            echo $views->render('views/information.html');
        }

        //profile page
        function profile()
        {
            //initialize empty vars for sticky stuff
            $email = '';
            $state = '';
            $sought = '';
            $biography = '';

            //if the form has been posted
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $state = $_POST['state'];
                $sought = $_POST['sought'];
                $biography = stripslashes($_POST['biography']);

                if (!DataValidation::validEmail($email)) {
                    $this->_f3->set('errors["email"]', 'Please enter a valid email address.');
                }

                if (!DataValidation::validState($state)) {
                    $this->_f3->set('errors["state"]', 'Please do not spoof states.');
                }

                if (!empty($sought) && !DataValidation::validSeeking($sought)) {
                    $this->_f3->set('errors["sought"]', "Please do not spoof 'seeking'.");
                }

                //if all good, reroute!
                if (empty($this->_f3->get('errors'))) {
                    //save the valid choices to object, overwrite object in session
                    $_SESSION['datingMember']->setEmail($email);
                    $_SESSION['datingMember']->setState($state);
                    $_SESSION['datingMember']->setSeeking($sought);
                    $_SESSION['datingMember']->setBio($biography);

                    //redirect user to interests if premium member, otherwise straight to the summary
                    if ($_SESSION['datingMember'] instanceof PremiumMember) {
                        $this->_f3->reroute('interests');
                    } else {
                        $this->_f3->reroute('summary');
                    }
                }
            }
            //call them arrays
            $this->_f3->set('states', DataLayer::getStates());
            $this->_f3->set('seeking', DataLayer::getSeeking());

            $this->_f3->set('email', $email);
            $this->_f3->set('userState', $state);
            $this->_f3->set('userSought', $sought);
            $this->_f3->set('biography', $biography);

            $views = new Template();
            echo $views->render('views/profile.html');
        }

        //interests page
        function interests()
        {
            //if the form has been posted
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //check for spoofing of forms
                if (isset($_POST['outdoor']) && !DataValidation::validInterests($_POST['outdoor'], 0)) {
                    $this->_f3->set('errors["outdoor"]', ' Please do not spoof outdoor activities.');
                }
                if (isset($_POST['indoor']) && !DataValidation::validInterests($_POST['indoor'], 1)) {
                    $this->_f3->set('errors["indoor"]', ' Please do not spoof indoor activities.');
                }

                //if all good, reroute!
                if (empty($this->_f3->get('errors'))) {
                    if (isset($_POST['outdoor'])) {
                        $_SESSION['datingMember']->setOutDoorInterests(implode(", ", $_POST['outdoor']));
                    } else {
                        $_SESSION['datingMember']->setOutDoorInterests("No outdoor activities selected.");
                    }
                    if (isset($_POST['indoor'])) {
                        $_SESSION['datingMember']->setInDoorInterests(implode(", ", $_POST['indoor']));
                    } else {
                        $_SESSION['datingMember']->setInDoorInterests("No indoor activities selected.");
                    }

                    //redirect user to next page
                    $this->_f3->reroute('summary');
                }
            }

            $this->_f3->set('outdoor', DataLayer::getOutdoor());
            $this->_f3->set('indoor', DataLayer::getIndoor());

            $views = new Template();
            echo $views->render('views/interests.html');
        }

        //summary page
        function summary()
        {
            $views = new Template();
            echo $views->render('views/profile-summary.html');
        }

        //privacy policy page
        function privacy()
        {
            $views = new Template();
            echo $views->render('views/privacy-policy.html');
        }

    }

