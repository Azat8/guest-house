<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url()?>/public/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url()?>/public/css/admin_custom.css">
    <link rel="stylesheet" href="<?= base_url()?>/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/public/css/datepicker3.css">
    <title>Admin</title>
</head>
<body>
<div class="header">
    <div class="nav-section">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header hidden-lg hidden-md">
                    <button type="button" class="collapsed navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-8" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <!--<a href="#" class="navbar-brand">Brand</a>-->
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>/admin/logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
