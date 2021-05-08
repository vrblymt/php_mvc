<?php    
    require_once __DIR__."/../model/User.php";
    require_once __DIR__."/../model/Advertisement.php";
    require_once __DIR__."/../model/AdvertisementUser.php";
    class Controller {
        /**
         * Template for the controllers
         */
        public function index() {}
        
        /**
         * Returns the page routes with the corresponding names
         * @return Array
         */
        public function get_route_links() {
            return [
                [
                    "name" => "Users page", 
                    "route" => "/users"
                ],
                [
                    "name" => "Advertisements page", 
                    "route" => "/advertisements"
                ]
            ];
        }
    }
?>