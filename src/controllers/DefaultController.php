<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
    }

    public function main()
    {
        $this->render('main');
    }

    public function account()
    {
        $this->render('account');
    }

    public function dice()
    {
        $this->render('dice');
    }

    public function play()
    {
        $this->render('play');
    }

    public function hope()
    {
        $this->render('hope');
    }

    public function players()
    {
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
}