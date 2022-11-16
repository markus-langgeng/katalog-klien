<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $data["judul"] ?></title>
        <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
        <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.min.css">
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container">

                    <a class="navbar-brand fw-bold" href="<?= BASEURL ?>">Katalog Klien</a>
                    <button class="navbar-toggler" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-grow-1">
                            <?php if ($data["judul"] != "Login"): ?>

                            <li class="nav-item">
                                <a class="nav-link active"
                                        aria-current="page"
                                        href="<?= BASEURL ?>">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="true"
                                        href="#">User</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item"
                                            href="<?= BASEURL ?>/user"
                                            role="button">Profil User</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="<?= BASEURL ?>/logout"
                                            role="button">Logout</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- <li class="nav-item ms-lg-auto"> -->
                            <!--     <a class="nav-link btn btn-light text-dark" -->
                            <!--         role="button" -->
                            <!--         href="<?//= BASEURL ?>/logout">Logout</a> -->
                            <!-- </li> -->

                            <?php endif; ?>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>
