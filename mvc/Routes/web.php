<?php
use lib\Route;

use app\controllers\HomeController;

use app\controllers\DatosController;

Route::get("/",[HomeController::class,"index"]);
Route::get("/Home",[HomeController::class,"index"]);

Route::post("/Datos",[DatosController::class,"index"]);
Route::dispatch();
?>

