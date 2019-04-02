<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div id="titulo">
            <div id="imag"></div>
            <h2>Mi sitio</h2>
        </div>
        <div id="menu"><?php include('../menu.php'); ?></div>
        <div id="contenido">
            <h2>Titulo pagina</h2>
            <p>
                contenido
            </p>
        </div>

    </body>

    <script>
        $("#minrgesos").on("click", function (event) {
            if (($("[id*=iproductos]").css("display") != "none")) {
                $("[id*=iproductos]").css("display", "none");
                $("[id*=iventas]").css("display", "none");
                $("[id*=ibodega]").css("display", "none");
            } else {
                $("[id*=iproductos]").show();
                $("[id*=iproductos]").css("display", "block");
                $("[id*=iventas]").show();
                $("[id*=iventas]").css("display", "block");
                $("[id*=ibodega]").show();
                $("[id*=ibodega]").css("display", "block");
            }
        });
        $("#minformes").on("click", function (event) {
            if (($("[id*=infventas]").css("display") != "none")) {
                $("[id*=infventas]").css("display", "none");
            } else {
                $("[id*=infventas]").show();
                $("[id*=infventas]").css("display", "block");
            }
        });
        $("#mconsultas").on("click", function (event) {
            if (($("[id*=cproductos]").css("display") != "none")) {
                $("[id*=cproductos]").css("display", "none");
            } else {
                $("[id*=cproductos]").show();
                $("[id*=cproductos]").css("display", "block");
            }
        });

        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>
