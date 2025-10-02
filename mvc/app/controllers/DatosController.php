<?php

namespace app\controllers;

class DatosController
{

    public function index()
    {
        $email = $_POST["email"];
        $dui = $_POST["dui"];
        $capitalPrestamo = $_POST["capitalPrestamo"];
        $interesMensual = $_POST["interesMensual"];
        $numeroCuotas = ["numeroCuotas"];
        $nombre = $_POST["nombre"];

        $capitalPrestamo = $_POST["capitalPrestamo"];


        return $this->view("DatosView", ["title" => "Home", "nombre" => $nombre, "email"=>$email,"dui"=>$dui,"capitalPrestamo"=>$capitalPrestamo, "interesMensual"=>$interesMensual,"numeroCuotas"=>$numeroCuotas,"capitalPrestamo"=>$capitalPrestamo]);
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

    
}
