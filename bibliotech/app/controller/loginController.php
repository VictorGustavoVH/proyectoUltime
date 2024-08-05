<?php
    include_once("app/model/loginModel.php");
    class loginController{
        private $loginmodel;
        public function CallLogin(){
            $vista = "app/view/admin/usuarios/login.php";
            include_once("app/view/admin/plantillaView2.php");
        }
        public function login(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $this->loginmodel=new loginModel();
                $respuesta=$this->loginmodel->get_credentials($user,$pass);
                include_once('app/controller/defaultController.php');
                $def=new defaultController();
                if($respuesta){
                    session_start();
                    $_SESSION['logedin']=true;
                    $_SESSION['username']=$user;
                    $_SESSION['nombre']=$respuesta['nombre']. " " . $respuesta['apellido'];
                    $def->index(); 
                }else{
                    $vista = "app/view/admin/usuarios/errorLoginView.php";
                    include_once("app/view/admin/plantillaView2.php");
                }
            }
        }
        public function loged_out(){
            session_start();
            $_SESSION['logedin']=false;
            header("location:http://localhost/bibliotech");
        }
    }