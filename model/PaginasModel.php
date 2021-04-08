<?php 
    class PaginasModel{
        public function mostrarPaginaM($nombre){
            if($nombre=="#home"||$nombre=="#about"||$nombre=="#service"||$nombre=="#experiencie"||$nombre=="#portfolio"||$nombre=="#price"||$nombre=="#review"||$nombre=="#team"||$nombre=="#blog"||$nombre=="#contact"){
                $page="views/modules/".$nombre.".php";
            }
            else{
                $page="views/modules/home.php";
            }
            return $page;
        }
    }
?>