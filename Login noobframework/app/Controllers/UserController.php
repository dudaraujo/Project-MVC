<?php

namespace App\Controllers;

use Core\Controller;

class UserController extends Controller {
    
    public function login() {
        $this->view('login');
    }

    public function cadastro() {
        $this->view('cadastro');
    }
}
