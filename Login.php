<?php
require_once 'class/session.php';
require_once 'class/post.php';
require_once 'users.php';

$session = new Session();
$post = new Post();
$Logged = false;

if($post->get('Email') != '' && $post->get('password') != '') {
    $email = $post->get('Email');
    $pass = $post->get('password');
    foreach ($_users as $user => $data) {
        if ($email == $data['email'] && $pass == $data['pass']) {
            $Logged = true;
            $session->set('email', $email);
            $session->set('pass', $pass);
            require_once 'form.php';
            break;
        }
    }
}else if ($session->get('email') != '') {
    foreach ($_users as $user => $data) {
        if ($session->get('email') == $data['email'] && $session->get('pass') == $data['pass']) {
            //$isLogged = true;
            require_once 'info.php';
            break;
        }
    }
}
if ($Logged == false) echo '<h1>Login Inválido. <a href="index.html">Página de Login</a></h1>';