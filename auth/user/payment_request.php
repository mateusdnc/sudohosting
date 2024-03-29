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
    <script src="../src/script/datedropper/datedropper.pro.min.js"></script>

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
            <div class="col px-5">

                <h4 class="text-font m-4">
                    <p>
                        Ao clicar em solicitar será enviado para o seu email
                        um boleto para que você possa pagar da maneira
                        que preferir.
                    </p>
                    <p>
                        Após a confirmação do pagamento, o que pode
                        demorar até um pouco mais de um dia,
                        vai ser disponibilizado o serviço pelo qual você pagou.
                    </p>
                </h4>

                <div class="row justify-content-between m-4">
                    <button type="button" class="btn button-black">
                        <lead><strong class="text-font p-4" style="font-size: 15pt;">Voltar</strong></lead>
                    </button>
                    <button type="button" class="btn button-black">
                        <lead><strong class="text-font p-4" style="font-size: 15pt;">Solicitar</strong></lead>
                    </button>
                </div>

            </div>
        </div>

    </div>

    <!-- Footer -->
    <iframe src="/../common/footer.html"
        onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

</body>