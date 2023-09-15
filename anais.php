<?php

include_once("./includes/navbar.php");

?>


<!doctype html>
<html lang="pt-BR">

<head>
    <title>Navbar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/estilo.css" rel="stylesheet">
    <link href="bibliotecas/bootstrap-5.3.0/css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/" type="image/png">

</head>

<body>
    <div class="container px-auto py-5 mx-auto">
   

        <a href="./anais/anais2022.php" class="mx-4 botao-estilo fs-2 btn rounded-4 btn-primary mx-10 w-45 h-45 text-center py-3 p-5">Anais
            2022</a>
        <a href="./anais/anais2021.php" class="mx-4 botao-estilo2 fs-2 btn rounded-4 btn-primary mx-10 w-45 h-45 text-center py-3 p-5">Anais
            2021</a>
        <a href="./anais/anais2020.php" class="mx-4 botao-estilo3 fs-2 btn rounded-4 btn-primary mx-10 w-45 h-45 text-center py-3 p-5">Anais
            2020</a>
        <a href="./anais/anais2019.php" class="mx-4 botao-estilo4 fs-2 btn rounded-4 btn-primary mx-10 w-45 h-45 text-center py-3 p-5">Anais
            2019</a>
        <br>
        <br>
        <a href="./anais/anais2018.php" class=" botao-estilo5 fs-2 btn rounded-4 btn-primary mx-10 w-45 h-45 text-center py-3 p-5">Anais
            2018</a>
        <a href="./anais/anais2017.php" class="mx-4 botao-estilo6 fs-2 btn rounded-4 btn-primary mx-10 w-45 h-45 text-center py-3 p-5">Anais
            2017</a>
        <a href="./anais/anais2016.php" class="mx-4 botao-estilo7 fs-2 btn rounded-4 btn-primary mx-10 w-45 h-45 text-center py-3 p-5">Anais
            2016</a>

         <?php
             require_once 'admin/includes/init.php'; 
             include_once LIB_CONTROLLER.DS.'AnaisController.class.php';
         
             $controller = new AnaisController();
             $anos = $controller->getAnosDasEdicoesAnteriores();
            print_r($anos);
         ?>
        <style>    

        .botao-estilo{
    background-color: #183276;
    margin-left: 50px;
}
.botao-estilo:hover {
    background-color: #A6B9EB;
    
}
.botao-estilo2{
    background-color: #223B7B;
   
}
.botao-estilo2:hover {
    background-color: #A6B9EB;
}
.botao-estilo3{
    background-color: #354F92;
 
}
.botao-estilo3:hover {
    background-color: #A6B9EB;
}
.botao-estilo4{
    background-color: #435C9D;
   
}
.botao-estilo4:hover {
    background-color: #A6B9EB;
}
.botao-estilo5{
    background-color: #6279B8;  
    margin-left: 200px;
}
.botao-estilo5:hover {
    background-color: #A6B9EB;
}
.botao-estilo6{
    background-color: #748AC6;  
    
}
.botao-estilo6:hover {
    background-color: #A6B9EB;
}
.botao-estilo7{
    background-color: #A6B9EB;  
    
}
.botao-estilo7:hover {
    background-color: #DAE0EF;
}
</style>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>