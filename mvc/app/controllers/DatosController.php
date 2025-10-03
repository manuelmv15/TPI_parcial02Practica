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
        $numeroCuotas = intval($_POST["numeroCuotas"]);
        $mensaje = "Dato no valido";

        if (preg_match("/^\d+(\.\d{1,2})?$/", $capitalPrestamo)) {

            if (preg_match("/^\d+(\.\d{1,2})?$/", $interesMensual)) {
               
                if (preg_match("/^[0-9]+$/", $numeroCuotas)) {

                    if (preg_match("/^[\w\-\.]+@([\w-]+\.)+[\w-]{2,4}$/", $email)) {

                        if (preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/", $nombre)) {

                            if (preg_match('/^\d{8}-\d$/', $dui)) {
                               
                                return $this->view("DatosView", ["title" => "Datos", "nombre" => $nombre, "email" => $email, "dui" => $dui, "capitalPrestamo" => $capitalPrestamo, "interesMensual" => $interesMensual, "numeroCuotas" => $numeroCuotas, "capitalPrestamo" => $capitalPrestamo]);
                            
                            } else {
                                return $this->view("HomeView", ["title" => "Home", "msj" => $mensaje]);
                            }
                        } else {
                            return $this->view("HomeView", ["title" => "Home", "msj" => $mensaje]);
                        }
                    } else {
                        return $this->view("HomeView", ["title" => "Home", "msj" => $mensaje]);
                    }
                } else {
                    return $this->view("HomeView", ["title" => "Home", "msj" => $mensaje]);
                }
            } else {
                return $this->view("HomeView", ["title" => "Home", "msj" => $mensaje]);
            }
        } else {
            return $this->view("HomeView", ["title" => "Home", "msj" => $mensaje]);
        }
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
