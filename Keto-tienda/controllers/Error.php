<?php 
    class Errors extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function notFound()
        {
            $this->view->getview($this, "error");
            
        }
    
    }
    $notFound = new Errors();
    $notFound->notFound();
 ?>