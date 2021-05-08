<?php
    require_once __DIR__."/Controller.php";
    require_once __DIR__."/../model/Connection.php";    

    class AdvertisementController extends Controller {
        private $con;

        public function __construct() {
            $this->con = new Connection();
        }

        /**
         * Create the advertisement view
         */
        public function index() {
            $this->title = "Advertisement page";
            $this->ads = $this->get_all_ads_with_users();
            require __DIR__."/../view/advertisementView.php";
        }

        /**
         * Return the advertisements and the users
         * @return Array
         */
        private function get_all_ads_with_users() {
            $ads = [];
            $query = "
                SELECT a.id, a.title, u.name 
                FROM advertisements a 
                INNER JOIN users u ON a.userid = u.id";
            if ($result = mysqli_query($this->con->get_connection(), $query)) {
                while($row = $result->fetch_assoc()) {
                    $ads[] = new AdvertisementUser(
                        $row['id'],
                        $row['title'],
                        $row['name']
                    );
                }
                $result->free_result();
            } else {
                die($this->con->error);
            }
            return $ads;
        }
    }
?>