<?php 
    class homeModel extends mySql
    {
        public function __construct()
        {
            echo "mensaje desde el modedlo home";
            parent::__construct();
        }
       
    }
?>