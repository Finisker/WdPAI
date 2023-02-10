<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
    }

    public function main()
    {
        if(!$this->isLogged()){
            $this->render('login');
            return;
        }
        $this->render('main');
    }

    public function main_admin()
    {
        if(!$this->isLogged()){
            $this->render('login');
            return;
        }
        $this->render('main_admin');
    }

    public function account()
    {
        if(!$this->isLogged()){
            $this->render('login');
            return;
        }
        $this->render('account');
    }

    public function dice()
    {
        if(!$this->isLogged()){
            $this->render('login');
            return;
        }
        $this->render('dice');
    }

    public function play()
    {
        if(!$this->isLogged()){
            $this->render('login');
            return;
        }
        $this->render('play');
    }

    public function hope()
    {
        if(!$this->isLogged()){
            $this->render('login');
            return;
        }
        $this->render('hope');
    }

    public function players()
    {
        if(!$this->isLogged()){
            $this->render('login');
            return;
        }
        $this->render('scoreboard');
    }

    public function register_b()
    {
        $this->render('register');
    }

    public function login_b()
    {
        $this->render('login');
    }

    private function isLogged(): bool
    {
        session_start();
        return isset($_SESSION['id']);
    }

}