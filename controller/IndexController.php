<?php
    require_once __DIR__."/Controller.php";
    require_once __DIR__."/../model/Connection.php";    

    class IndexController extends Controller {
        private $db;

        public function __construct() {
            $this->db = new Connection();
        }

        /**
         * Create the index view
         */
        public function index() {
            $this->title = "Index page";
            $this->links = $this->get_route_links();
            require __DIR__."/../view/indexView.php";
        }
    }
?>