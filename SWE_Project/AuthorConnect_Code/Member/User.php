<?php
    abstract class User
    {
        public int $userID;
        public String $username;
        public String $password;
        public String $image;
        public String $fname;
        public String $lname;
        protected String $email;
        protected int $phone_Num;
        public String $dob;



        //declaring function
        public function login($username, $password){
            $this->username = $username;
            $this->password = $password;
        }

        public function register(){

        }
    }
?>
