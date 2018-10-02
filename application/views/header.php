<!DOCTYPE html>
<html lang="es">
    <head>
        <title>JobSearch - Back Office</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta charset="utf-8" />
        <link href="<?php echo base_url('node_modules/tether/dist/css/tether.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('vendor/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <header class="row">
                <nav class="col-12 navbar navbar-toggleable-md navbar-light bg-faded">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php if (!isset($user)): ?>
                    <a class="navbar-brand" href="<?php echo site_url('')?>">JobSearch</a>
                    <?php else: ?>
                    <a class="navbar-brand" href="<?php echo site_url('/home')?>">JobSearch</a>
                    <?php endif ?>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <?php if(isset($user)): ?>
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo site_url('freelancers'); ?>">Freelancers <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('companies'); ?>">Companies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('jobs'); ?>">Jobs</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Reports
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Report 1</a>
                                    <a class="dropdown-item" href="#">Report 2</a>
                                    <a class="dropdown-item" href="#">Report 3</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo ucwords($user->firstname); ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </div>
                            </li>
                        </ul>
                        <?php endif; ?>
                    </div>
                </nav>
            </header>
            
            <?php if(isset($title)): ?>
            <div class="row my-2">
                <div class="col-12">
                    <h1 class="page-header">
                    <?php echo $title ?? 'Titulo'; ?>
                    </h1>
                </div>
                <?php if(isset($breadcrumb)): ?>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="active"><?php echo $breadcrumb ?? 'breadcrumb'; ?></li>
                    </ol>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>