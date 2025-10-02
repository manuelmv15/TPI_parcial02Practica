<?php

namespace app\controllers;

class HomeController{

    public function index(){
     return $this->view("HomeView",["title"=> "Home"]);
    }

    public function view($vista, $data = [])
    {
        extract($data);
        if (file_exists("../app/views/$vista.php")) {
            ob_start();
            include "../app/views/$vista.php";
            $content = ob_get_clean();
            return $content;
        } else {
            echo "Vista no encontrada ../app/views/$vista.php";
        }
    }


   public function cuotaMensual  (){

    }


}
?>