<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link href="http://localhost/2021/tccfinal/public/css/style.css" rel="stylesheet" />
    <title>ONG APV</title>
</head>

<body>

    <header>
        <div class="center">
            <!--center-->
            <div class="logo">
                <!--logo-->
                <h2>ONG APV</h2>
            </div>
            <div class="menu">
                <!--menu-->
                <a href="<?php echo base_url('/PrincipalController/principal') ?>">
                    Home
                </a>
                <a href="<?php echo base_url('/PrincipalController/principal') ?>">
                    Quero ajudar
                </a>
                <a href="<?php echo base_url('/PrincipalController/principal') ?>">
                    Relatos
                </a>
                <a class="btn-menu" href="<?php echo base_url('/LoginController/login') ?>">
                    Login
                </a>
            </div>
            <div class="menu-mobile">
                <!--menu-mobile-->
                <i class="fas fa-bars menu-mobile-icon"></i>
                <div class="menu-items">
                    <!--menu-items-->
                    <a href="<?php echo base_url('/PrincipalController/principal') ?>">Home</a>
                    <a href="<?php echo base_url('/PrincipalController/principal') ?>">Quero ajudar</a>
                    <a href="<?php echo base_url('/PrincipalController/principal') ?>">Relatos</a>
                    <a href="<?php echo base_url('/LoginController/login') ?>">Login</a>
                </div>
            </div>
        </div>
    </header>