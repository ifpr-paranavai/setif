<?php $currentPage = 'minicursos'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/ifpr.png" rel="icon">
    <title>Minicursos</title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap-4.4.1/css/bootstrap.min.css" />
    <style type="text/css">
    img {
        max-width: 100%;
        height: auto;
    }

    .tg {
        margin: 0 auto;
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tg td {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg th {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg .tg-1wig {
        font-weight: bold;
        text-align: left;
        vertical-align: top
    }

    .tg .tg-amwm {
        font-weight: bold;
        text-align: center;
        background-color: #003493;
        color: white;
        vertical-align: top;
    }

    .tg .tg-0lax {
        text-align: left;
        vertical-align: top
    }
    </style>
</head>

<body>
    <?php require_once('includes/navbar.php'); ?>
    <div class="container mt-5">
        <p class="text-justify">Os minicursos acontecerão na manhã de quinta-feira (10/11/2022) com preferência para os
            estudantes do Ensino
            Médio e na noite de sexta-feira (11/11/2022) com proferência para estudantes do ensino superior</p>
        <p class="text-justify mb-5">Para visualizar os minicurso disponíveis acesse a aba <strong>qui, 10/11</strong>
            e a
            aba <strong>sex,
                11/11</strong></p>
        <div id="even3-widget-session" height="auto"></div>
        <!--<article class="mt-5">

            <table class="tg">
                <thead>
                    <tr>
                        <th class="tg-amwm" colspan="3">Manhã da Quinta-feira
                            (10/11/2022)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tg-1wig">Sala/Laboratório
                        </td>
                        <td class="tg-1wig">Minicurso
                        </td>
                        <td class="tg-1wig">Ministrante(s)</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">
                            Laboratório 1 <br /> (30 vagas)
                        </td>
                        <td class="tg-0lax">
                            Introdução ao Desenvolvimento com Flutter
                        </td>
                        <td class="tg-0lax">
                            - Eduardo D. Ferreira da Silva <br />
                            - Francisco Gabriel C. Candido <br />
                            - Gustavo Orelio <br />
                            - Matheus M. Urbano
                        </td>
                    <tr>
                        <td class="tg-0lax">
                            Laboratório 2 <br /> (20 vagas)
                        </td>
                        <td class="tg-0lax">
                            Virtualização de Sistemas Operacionais com Oracle VM Virtual Box
                        </td>
                        <td class="tg-0lax">
                            - Renato Augusto P. Guimarães Neto <br />
                            - André Ricardo Zavan
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">
                            Laboratório 3 <br /> (30 vagas)
                        </td>
                        <td class="tg-0lax">
                            Construindo uma aplicação em Java, Springboot, Swagger, consumindo uma REST API
                        </td>
                        <td class="tg-0lax">
                            - Andrey Silva Cordeiro <br />
                            - Igor Luigi de Oliveira<br />
                            - Isac Ponciano Bandeira
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">
                            Laboratório 4 <br /> (25 vagas)
                        </td>
                        <td class="tg-0lax">
                            Desenvolvimento de blog pessoal com o Framework NextJS
                        </td>
                        <td class="tg-0lax">
                            - Luan Matheus Marques
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">
                            Laboratório 5 <br /> (20 vagas)
                        </td>
                        <td class="tg-0lax">
                            Introdução à prática de eletrônica e programação com Arduino
                        </td>
                        <td class="tg-0lax">
                            - Thalles Sorrilha Meira Barros <br />
                            - Brayan Barros T. Cordeiro Silva
                        </td>
                    </tr>

                    <tr>
                        <td class="tg-0lax">
                            LABIEN I <br /> (15 vagas)
                        </td>
                        <td class="tg-0lax">
                            Preparing yourself for an interview
                        </td>
                        <td class="tg-0lax">
                            - Aline Yuka Noguti <br />
                            - Eduardo Albuquerque Ribeiro
                        </td>
                    </tr>

                    <tr>
                        <td class="tg-0lax">
                            LABIEN II <br /> (13 vagas)
                        </td>
                        <td class="tg-0lax">
                            Impressão 3D
                        </td>
                        <td class="tg-0lax">
                            - Pedro Aparecido Valério <br />
                            - Vitor Tavares de Oliveira <br />
                            - Eduardo Augusto Dias Marionucci
                        </td>
                    </tr>

                    <tr>
                        <td class="tg-0lax" colspan="3"> &nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="tg-amwm" colspan="3">Noite de Sexta-feira
                            (11/11/2022)</td>
                    </tr>
                    <tr>
                        <td class="tg-1wig">Sala/Laboratório
                        </td>
                        <td class="tg-1wig">Minicurso
                        </td>
                        <td class="tg-1wig">Ministrante(s)</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">
                            Laboratório 1 <br /> (30 vagas)
                        </td>
                        <td class="tg-0lax">
                            Introdução ao desenvolvimento de jogos com PyGame
                        </td>
                        <td class="tg-0lax">
                            - Kairo Vinicius Losano Amorim <br />
                            - João Gabriel Durante Marques de Lima <br />
                            - Rafael Matheus Bicario <br />
                            - Cristian Ceccon
                        </td>
                    <tr>
                        <td class="tg-0lax">
                            Laboratório 2 <br /> (20 vagas)
                        </td>
                        <td class="tg-0lax">
                            Introdução ao mundo dos microsserviços, teoria e pratica
                        </td>
                        <td class="tg-0lax">
                            - João Pedro Ferreira de Souza
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">
                            Laboratório 3 <br /> (30 vagas)
                        </td>
                        <td class="tg-0lax">
                            API REST utilizando NodeJS com Typescript
                        </td>
                        <td class="tg-0lax">
                            - Jonatas da Silva de Oliveira <br />
                            - Santyero Mesquita Borges dos Santos
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">
                            Laboratório 4 <br /> (25 vagas)
                        </td>
                        <td class="tg-0lax">
                            Compreendendo e implementando uma estrutura de dados primordial
                        </td>
                        <td class="tg-0lax">
                            - Flavio Lucas Fernandes <br />
                            - Henrique Gonçalves de Oliveira
                        </td>
                    </tr>
                </tbody>
            </table>
        </article>-->
    </div>
    <script src="https://www.even3.com.br/widget/js?e=setif-2022&t=session&lang=pt"></script>
    <?php require_once('includes/jsImports.php'); ?>
</body>

</html>