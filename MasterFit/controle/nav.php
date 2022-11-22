<?php
include "controle/conexao.php";
$sql = "select * from plano";
$seleciona = mysqli_query($conexao, $sql);

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MasterFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/autocomplete.css">
    <link rel="shortcut icon" href="imgs/favicon/favicon.png" type="image/x-icon">
    <script src="javascript/script.js"></script>
</head>

<body>
    <!--Inicio do Navbar-->

    <nav class=" alert navbar navbar-expand-lg bg-warning p-5">
        <div class="container-fluid">
            <a class="navbar-brand nvbw" href="index.html" onmouseover="uScale(this)" onmouseout="dScale(this)">
                <img src="imgs/logo/logopreta.png" alt="MasterFit" class="nvblg">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item nvbw">
                        <a class="nav-link movingBox" href="login.html" onmouseover="uScale(this)" onmouseout="dScale(this)">Área do Cliente</a>
                    </li>
                    <li class="nav-item nvbw">
                        <a class="nav-link movingBox" href="promos.html" onmouseover="uScale(this)" onmouseout="dScale(this)">Conheça nossas promoções</a>
                    </li>
                    <li class="nav-item nvbw">
                        <a class="nav-link movingBox" href="maps.html" onmouseover="uScale(this)" onmouseout="dScale(this)">
                            Onde nos encontrar?
                        </a>
                    </li>

                </ul>
                
            </div>
        </div>
    </nav>
   
    <!--Fim do Navbar-->
    <!--Inicio do codigo de libras-->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <!--Fim do codigo de libras-->