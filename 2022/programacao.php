<?php $currentPage = 'programacao'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/ifpr.png" rel="icon">
    <title>Programação</title>
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
    
    <p class="mt-5 text-center">
    	<a href="https://docs.google.com/document/d/e/2PACX-1vSqjrO257UjNRMqVDJ7NlpO6S3V6wsOYLVKRWwqY6_5sGyvqlO23heYvg4Q2CyQHQsAsxfQukZiEno6/pub">Mostra de Trabalhos - Sessões</a>
    </p>
    
    <p>
    	<br>
    	<hr>
    	<br>
    	<center>Programação</center>
    </p>
    
    <div class="container mt-5">
        <div id="even3-widget-session" height="auto"></div>

        <!--<article style="margin-top: 40px;">

            <table class="tg">
                <thead>
                    <tr>
                        <th class="tg-amwm" colspan="3">Segunda-feira
                            (07/11/2022)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tg-1wig">Período
                        </td>
                        <td class="tg-1wig">Horário
                        </td>
                        <td class="tg-1wig">Atividade</td>
                    </tr>
                    <tr>
                        <td class="tg-1wig" rowspan="4">Matutino</td>
                        <td class="tg-0lax">08h00 às
                            08h30</td>
                        <td class="tg-0lax">Abertura</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">08h30 às
                            10h00</td>
                        <td class="tg-0lax">Palestra "E-lixo - O que precisamos saber? O que fazer?", com a profª Evanise Araujo Caldas Ruiz</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">10h00 às
                            10h30</td>
                        <td class="tg-0lax">Intervalo</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">10h30 às
                            12h00</td>
                        <td class="tg-0lax">Palestra "Machine Learning: Pode uma máquina pensar?", com a profª Késsia Rita da Costa Marchi</td>
                    </tr>
                    <tr>
                        <td class="tg-1wig" rowspan="4">Noturno</td>
                        <td class="tg-0lax">19h30 às
                            19h45</td>
                        <td class="tg-0lax">Abertura</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">19h45 às
                            21h00</td>
                        <td class="tg-0lax">Palestra “Boas práticas de
                            Engenharia de Software”, com o Willian Nalepa Oizumi, <br /> Desenvolvedor de Software na GoTo</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">21h00 às
                            22h00</td>
                        <td class="tg-0lax">Fórum com Desenvolvedores de
                            Software da empresa GoTo</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">22h
                        </td>
                        <td class="tg-0lax">Encerramento</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax" colspan="3"> &nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="tg-amwm" colspan="3">Terça-feira
                            (08/11/2022)</td>
                    </tr>
                    <tr>
                        <td class="tg-1wig" rowspan="4">Matutino</td>
                        <td class="tg-0lax">08h00 às
                            08h30</td>
                        <td class="tg-0lax">Concurso de Cosplayer -
                            Credenciamento</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">08h30 às
                            10h00</td>
                        <td class="tg-0lax">Concurso de Cosplayer -
                            Apresentação</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">10h00 às
                            10h20</td>
                        <td class="tg-0lax">Intervalo</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">10h20 às
                            12h10</td>
                        <td class="tg-0lax">Gincana do Conhecimento em
                            TI e Premiação do Concurso de Cosplayer</td>
                    </tr>
                    <tr>
                        <td class="tg-1wig" rowspan="3">Noturno</td>
                        <td class="tg-0lax">19h30 às
                            21h00</td>
                        <td class="tg-0lax">Mostrade Trabalhos
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">21h00 às
                            21h10</td>
                        <td class="tg-0lax">Intervalo</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">21h10 às
                            22h30</td>
                        <td class="tg-0lax">Mostrade Trabalhos
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax" colspan="3"> &nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="tg-amwm" colspan="3">Quarta-feira
                            (09/11/2022)</td>
                    </tr>
                    <tr>
                        <td class="tg-1wig">Matutino</td>
                        <td class="tg-0lax">08h00 às
                            12h00</td>
                        <td class="tg-0lax">IFTECH
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-1wig">Vespertino</td>
                        <td class="tg-0lax">14h00 às
                            17h00</td>
                        <td class="tg-0lax">IFTECH
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-1wig">Noturno</td>
                        <td class="tg-0lax">19h00 às
                            21h30</td>
                        <td class="tg-0lax">IFTECH
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-0lax" colspan="3"> &nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="tg-amwm" colspan="3">Quinta-feira
                            (10/11/2022)</td>
                    </tr>
                    <tr>
                        <td class="tg-1wig" rowspan="3">Matutino</td>
                        <td class="tg-0lax">08h00 às
                            10h00</td>
                        <td class="tg-0lax">Minicursos</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">10h00 às
                            10h20</td>
                        <td class="tg-0lax">Intervalo</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">10h20
                            às12h10</td>
                        <td class="tg-0lax">Minicursos</td>
                    </tr>
                    <tr>
                        <td class="tg-1wig">Noturno</td>
                        <td class="tg-0lax">19h00 às
                            22h50</td>
                        <td class="tg-0lax">Festival de Talentos na
                            UNESPAR</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax" colspan="3"> &nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="tg-amwm" colspan="3">Sexta-feira
                            (11/11/2022)</td>
                    </tr>
                    <tr>
                        <td class="tg-1wig">Matutino</td>
                        <td class="tg-0lax">08h00 às
                            12h10</td>
                        <td class="tg-0lax">Jogos da Tecnologia da
                            Informação</td>
                    </tr>
                    <tr>
                        <td class="tg-1wig" rowspan="3">Noturno</td>
                        <td class="tg-0lax">19h30 às
                            21h00</td>
                        <td class="tg-0lax">Minicursos</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">21h00 às
                            21h10</td>
                        <td class="tg-0lax">Intervalo</td>
                    </tr>
                    <tr>
                        <td class="tg-0lax">21h10 às
                            22h30</td>
                        <td class="tg-0lax">Minicursos</td>
                    </tr>
                </tbody>
            </table>
        </article>-->
    </div>
    <script src="https://www.even3.com.br/widget/js?e=setif-2022&t=session&lang=pt"></script>
    <?php require_once('includes/jsImports.php'); ?>
</body>

</html>
