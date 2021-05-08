<?php
    class AdvertisementUser {
        private $id;
        private $title;
        private $user_name;

        /**
         * Create Advertisement model
         * @param Integer $id
         * @param String $title
         * @param String $user_name
         */
        public function __construct($id, $title, $user_name) {
            $this->id = $id;
            $this->title = $title;
            $this->user_name = $user_name;
        }

        /**
         * Return advertisement id
         * @return Integer
         */
        public function get_id() {
            return $this->id;
        }

        /**
         * Return advertisement title
         * @return String
         */
        public function get_title() {
            return $this->title;
        }

        /**
         * Return advertisement user name
         * @return String
         */
        public function get_user_name() {
            return $this->user_name;
        }
    }
?>