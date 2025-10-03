<?php

namespace app\controllers;

class DatosController
{

    public function index()
    {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $dui = $_POST["dui"];

        $capitalPrestamo = floatval($_POST["capitalPrestamo"]);
        $interesMensual = floatval($_POST["interesMensual"]);
        $numeroCuotas = floatval($_POST["numeroCuotas"]);


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
