<head>
    <title>SudoHosting</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS only -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">

</head>

<nav class="navbar navbar-expand-lg">

    <div class="container">
        <a href="/">
            <img src="/src/img/logotipo2.png" style="width:10em" class="img" alt="Logo">
        </a>
        <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="row justify-content-end">
            <div class="collapse navbar-collapse" id="navbarSite">

                <ul class="navbar-nav">

                    <li class="nav-item text-center">
                        <a class="nav-link" style="font-size: 18pt; width: 5rem; color: #FFDFD4;"
                            href="/pages/vps.html">VPS</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" style="font-size: 18pt; width: 5rem; color: #FFDFD4;"
                            href="/pages/cloud.html">Cloud</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" style="font-size: 18pt; width: 10rem; color: #FFDFD4;"
                            href="/pages/hosting.html">Hospedagem</a>
                    </li>


                    <?php
                    if (!isset($_SESSION)) session_start();

                    // Verifica se não há a variável da sessão que identifica o usuário
                    if (!isset($_SESSION['UsuarioID'])) {

                        echo '
                        <div style="background-color: #FF0000;"> 
                        <li class="nav-item text-center">
                        <a class="nav-link" style="font-size: 18pt; width: 5rem; color: #FFDFD4;" href="/auth/login.php">Entrar</a>
                    </li>
                     </div>';
                    }else{
                        echo '
                        <div style="background-color: #FF0000;">
                        <li class="nav-item text-center">
                        <a class="nav-link" style="font-size: 18pt; width: 5rem; color: #FFDFD9;" href="/auth/user/profile.php">Painel</a>
                    </li>
                    </div>';
                    }
                    ?>




                </ul>
            </div>
        </div>
    </div>

</nav>