<?php 
    class usermodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }

        public function insertRegister($user, $data){
            return $this->db->insert($user, $data);
        }

        public function login($user, $username, $password){
            $sql = "SELECT * FROM $user WHERE user_name =? AND user_password =? ";
           return $this->db->affectedRows( $sql, $username, $password );
        }

        public function getLogin($user, $username, $password){
            $sql = "SELECT * FROM $user WHERE user_name =? AND user_password =? ";
           return $this->db->selectUser( $sql, $username, $password );
        }
    }
?>