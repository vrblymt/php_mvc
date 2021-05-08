<?php
    class Connection
    {
        /**
         * connection parameters
         */
        private $connectionParam = [
            'host' => 'db',
            'port' => '3306',
            'user' => 'root',
            'password' => 'password',
            'conname' => 'project'
        ];

        /**
         * connection
         */
        private $con;

        public function __construct()
        {
            $this->con = $this->connect();

            if (\mysqli_connect_errno()) {
                throw new \Exception(\sprintf("Connect failed: %s\n", \mysqli_connect_error()));
            }
        }

        /**
         * Connect to db
         * @return mysqli
         */
        private function connect()
        {
            $this->con = new \mysqli(
                $this->connectionParam['host'],
                $this->connectionParam['user'],
                $this->connectionParam['password'],
                $this->connectionParam['conname']
            );
            return $this->con;
        }

        /**
         * Returns the connection
         * @return mysqli
         */
        public function get_connection()
        {
            return $this->con;
        }
    }
?>