<?php
    class defaultController{
        private $vista;

        public function index(){
            $vista="app/view/adminHomeView.php";
            session_start();
            if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                include_once("app/view/admin/plantillaView.php");
            }else{
                $vista="app/view/adminHomeView.php";
                include_once("app/view/admin/plantillaView2.php");
            }
        }
    }