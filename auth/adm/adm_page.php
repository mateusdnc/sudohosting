<?php require_once($_SERVER['DOCUMENT_ROOT'].'/controller/check/check_adm.php'); ?>

<html>

<head>
      <title>SudoHosting</title>
      <link rel="shortut icon" href="/src/img/favicon.ico" title="SudoHosting">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- CSS only -->
      <link rel="stylesheet" href="/../css/auth.css">
      <link rel="stylesheet" href="/../node_modules/bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="/../css/home.css">
        <!-- Scripts -->
        <script src="/../node_modules/jquery/dist/jquery.min.js"></script>
      <script src="/../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
   </head>

<body>
    <!-- Header -->
    <iframe src="/../common/header.php"
        onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

    <div class="container-fluid py-5" id="background">
    <div class="col mx-auto p-3" style="background-image: linear-gradient(#FF0000, #FF5232,#FF7B5A); border-radius:25px; max-width: 80vh">
            <h2 class="text-center text-font quicksand">Usuarios</h2>
            <div class="col px-5 text-center my-3">
                <div>
                    <table class="table table-striped my-3">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <form action="../../controller/logout.php" method="post">
                        <button type="submit" value="Logout" class="text-center my-4 btn button-black p-2">

                            <lead class="font-weight-bold p-3 text-font" style="font-size: 13pt;">Sair</lead>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!-- Footer -->
        <iframe src="/../common/footer.html"
            onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

</body>