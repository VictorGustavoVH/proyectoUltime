<?php
    include_once('app/model/accionesModel.php');
    class accionesController{
        private $accionesmodel;
        public function index(){
            include_once('app/controller/bookController.php');
            $this->accionesmodel=new accionesModel();
            $books=$this->accionesmodel->get_all();
            $vista = "app/view/admin/acciones/acciones.php";
            session_start();
            if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                include_once("app/view/admin/plantillaView.php");
            }else{
                $vista ="app/view/admin/usuarios/login.php";
                include_once("app/view/admin/plantillaView2.php");
            }
        }
        public function formDate(){
            $vista="app/view/admin/acciones/reservas.php";
            include_once("app/view/admin/plantillaView.php");
        }
        public function regPrest(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $Nprest=array(
                    'titulo'=>$_POST['titulo'],
                    'user'=>$_POST['user']
                );
                $accionesmodel= new accionesModel();
                $resultado=$accionesmodel->regPrestamo($Nprest);
                if($resultado){
                    header("Location: http://localhost/bibliotech/app/view/admin/acciones/prestamoExito.php");
                }else{
                    header("location: http://localhost/bibliotech");
                }
            }
        }
        public function regReserv(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $fechaReserva=$_POST['fReserva'];
                $fechaActual = date('Y-m-d');
                if ($fechaReserva <= $fechaActual) {
                    // Redirigir con mensaje de error
                    header("Location: http://localhost/bibliotech?C=accionesController&M=error&msg=Fecha+invalida");
                }else{
                    $NReserv=array(
                        'fReserva'=>$_POST['fReserva'],
                        'title'=>$_POST['title'],
                        'user'=>$_POST['user']
                    );
                }
                $accionesmodel= new accionesModel();
                $resultado=$accionesmodel->regReserva($NReserv);
                if($resultado){
                    header("Location: http://localhost/bibliotech/app/view/admin/acciones/reservaExito.php");
                }else{
                    header("location:  http://localhost/bibliotech/app/view/admin/acciones/error.php");
                }
            }
        }
        public function error(){
            $vista="app/view/admin/acciones/error.php";
            include_once("app/view/admin/plantillaView.php");
        }
    }