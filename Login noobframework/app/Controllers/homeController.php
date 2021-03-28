<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller {
    
    public function index() {

        $pageTitle = "WELCOME";
        $title = "Hello World!";

        $this->view('home', ['tituloPage' => $pageTitle, 'titulo' => $title]);
    }
}