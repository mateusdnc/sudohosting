<?php require_once($_SERVER['DOCUMENT_ROOT'].'/controller/check.php'); ?>

<html>

<head>
    <title>SudoHosting</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="/../src/script/datedropper/datedropper.pro.min.js"></script>

    <!-- CSS only -->
    <link rel="stylesheet" href="/../css/auth.css">
    <link rel="stylesheet" href="/../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/../css/home.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Header -->
    <iframe src="/../common/header.html"
        onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

    <div class="container-fluid py-5" id="background">
        <div class="container py-5" id="login-container">
            <h2 class="text-center text-font quicksand">Altere sua conta</h2>
            <div class="col px-5 text-center">

                <!-- Nome -->
                <div class="row my-4">
                    <div class="col-2">
                        <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">Nome</p>
                    </div>
                    <div class="col">
                        <div class="container login-campo">
                            <input class="form-control" style="border-width: 0px; height: 33px;">
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="row my-4">
                    <div class="col-2">
                        <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">Email</p>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="container login-campo">
                            <input class="form-control" style="border-width: 0px; height: 33px;">

                        </div>
                    </div>
                </div>

                <!-- Senha -->
                <div class="row my-4">
                    <div class="col-2">
                        <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">Senha</p>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="container login-campo">
                            <input type="password" class="form-control" style="border-width: 0px; height: 33px;">
                        </div>
                    </div>
                </div>

                <!-- Aluno etec -->
                <div class="row justify-content-between my-4">
                    <div class="col-">
                        <p class="font-weight-bold text-nowrap" style="font-size: 15pt;margin-left: 15px;">
                            Aluno da ETEC</p>
                    </div>
                    <div class="col-sm">
                        <div class="container login-campo">
                            <input class="form-control" style="border-width: 0px; height: 33px;">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="button" class="btn button-black">
                        <lead><strong class="text-font p-4" style="font-size: 15pt;">Salvar</strong></lead>
                    </button>
                   
                </div>

            </div>
        </div>

    </div>

    <!-- Footer -->
    <iframe src="/../common/footer.html"
        onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

</body>