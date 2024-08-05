<?php
    include_once("app/model/bookModel.php");
    class bookController{
        private $bookmodel;
        public function CallInsert(){
            $vista = "app/view/admin/libros/bookregister.php";
            session_start();
            if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                include_once("app/view/admin/plantillaView.php");
            }else{
                $vista ="app/view/admin/usuarios/login.php";
                include_once("app/view/admin/plantillaView2.php");
            }
        }
        public function CallIndex(){
            $this->bookmodel=new bookModel();
            $libros=$this->bookmodel->get_all();
            $vista = "app/view/admin/libros/Indexbook.php";
            session_start();
            if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                include_once("app/view/admin/plantillaView.php");
            }else{
                $vista ="app/view/admin/usuarios/login.php";
                include_once("app/view/admin/plantillaView2.php");
            }
        }     
        public function insert(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $book=array(
                    'isbn'=>$_POST['isbn'],
                    'title'=>$_POST['title'],
                    'author'=>$_POST['author'],
                    'edit'=>$_POST['edit'],
                    'cat'=>$_POST['cat'],
                    'apublic'=>$_POST['apublic'],
                    'cant'=>$_POST['cant']
                );
                $bookmodel= new bookModel();
                $resultado=$bookmodel->insertB($book);
                if($resultado){
                    header("location:http://localhost/bibliotech?C=bookController&M=CallIndex");
                }else{
                    header("location:http://localhost/bibliotech");
                }
            }
        }
        public function delete(){
            if($_SERVER['REQUEST_METHOD']=='GET'){
                $isbn=$_GET['id'];
                $this->bookmodel=new bookModel();
                $respuesta=$this->bookmodel->deleteB($isbn);
                if($respuesta){
                    header("location:http://localhost/bibliotech?C=bookController&M=CallIndex");
                }else{
                    header("location:http://localhost/bibliotech");
                }
            }
        }
        public function callEdit(){
            if($_SERVER['REQUEST_METHOD']=='GET'){
                $isbn=$_GET['id'];
                $this->bookmodel=new bookModel();
                $datos=$this->bookmodel->getById($isbn);
                $vista="app/view/admin/libros/editForm.php";
                session_start();
                if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                    include_once("app/view/admin/plantillaView.php");
                }else{
                    $vista ="app/view/admin/usuarios/login.php";
                    include_once("app/view/admin/plantillaView2.php");
                }
            }
        }
        public function edit(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                //creamos el arreglo
                $book= array(
                    'isbn'=>$_POST['isbn'],
                    'title'=>$_POST['title'],
                    'author'=>$_POST['author'],
                    'edit'=>$_POST['edit'],
                    'cat'=>$_POST['cat'],
                    'apublic'=>$_POST['apublic'],
                    'cant'=>$_POST['cant']
                );
                $this->bookmodel= new bookModel();
                $respuesta=$this->bookmodel->edit($book);
                if($respuesta){
                    header("location:http://localhost/bibliotech/?C=bookController&M=CallIndex");
                }else{
                    header("location:http://localhost/bibliotech");
                }
            }
        }
    }