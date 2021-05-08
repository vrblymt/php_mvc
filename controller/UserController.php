<?php
    require_once __DIR__."/Controller.php";
    require_once __DIR__."/../model/Connection.php";    

    class UserController extends Controller {
        private $db;

        public function __construct() {
            $this->db = new Connection();
        }

        //create the user view
        public function index() {
            $this->title = "Users page";
            $this->users = $this->get_all_users();
            require __DIR__."/../view/userView.php";
        }

        /**
         * Return all user from database
         * @return Arrray
         */
        private function get_all_users() {
            $users = [];
            $query = "SELECT id, name FROM users";
            if ($result = mysqli_query($this->db->get_connection(), $query)) {
                while($row = $result->fetch_assoc()) {
                    $users[] = new User(
                        $row['id'],
                        $row['name']
                    );
                }
                $result->free_result();
            } else {
                die($this->db->error);
            }
            return $users;
        }
    }
?>