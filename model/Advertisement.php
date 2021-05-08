<?php
    class Advertisement {
        private $id;
        private $userid;
        private $title;

        /**
         * Create Advertisement model
         * @param Integer $id
         * @param Integer $userid
         * @param String $title
         */
        public function __construct($id, $userid, $title) {
            $this->id = $id;
            $this->userid = $userid;
            $this->title = $title;
        }

        /**
         * Return advertisement id
         * @return Integer
         */
        public function get_id() {
            return $this->id;
        }

        /**
         * Return advertisement userid
         * @return Integer
         */
        public function get_userid() {
            return $this->userid;
        }

        /**
         * Return advertisement title
         * @return String
         */
        public function get_title() {
            return $this->title;
        }
    }
?>