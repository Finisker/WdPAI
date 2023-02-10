<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('main', 'DefaultController');
Router::get('main_admin', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');
Router::get('account', 'DefaultController');
Router::get('dice', 'DefaultController');
Router::post('play', 'DefaultController');
Router::get('hope', 'DefaultController');
Router::post('players', 'DefaultController');
Router::get('register_b', 'DefaultController');
Router::get('login_b', 'DefaultController');
Router::get('logout', 'SecurityController');

Router::run($path);