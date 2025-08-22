<?php $currentPage = 'inscricao'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/ifpr.png" rel="icon">
    <title>Inscrição</title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap-4.4.1/css/bootstrap.min.css" />
    <style type="text/css">
    img {
        max-width: 100%;
        height: auto;
    }
    </style>
</head>

<body>
    <?php require_once('includes/navbar.php'); ?>
    <div class="container mt-5">
        <div id="even3-widget-ticket" height="auto"></div>
        <!--<article>
            <h2 class="text">Faça sua inscrição</h2>
            <hr class="mt-2 mb-5">
            <a target="_blank" class="text-left" href="https://www.even3.com.br/setif-2022/">Clique aqui para se
                inscrever na SETIF 2022 e nas suas atividades</a>
            <br />
            <h2 class="text">Submissão</h2>
            <hr class="mt-2 mb-5">

            <a class="text-left" href="normasPublicacao.php">Para saber mais, acesse as Nomas de Publicação</a>
            <br />
        </article>-->
    </div>

    <script src="https://www.even3.com.br/widget/js?e=setif-2022&t=ticket&lang=pt"></script>
    <?php require_once('includes/jsImports.php'); ?>
</body>

</html>