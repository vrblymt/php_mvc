<?php
    class User {
        private $id;
        private $name;

        /**
         * Create User model
         * @param Integer $id
         * @param String $name
         */
        public function __construct($id, $name) {
            $this->id = $id;
            $this->name = $name;
        }

        /**
         * Return user id
         * @return Integer
         */
        public function get_id() {
            return $this->id;
        }

        /**
         * Return user name
         * @return String
         */
        public function get_name() {
            return $this->name;
        }
    }
?>