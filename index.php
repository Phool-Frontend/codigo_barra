<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/barcode-all.js"></script>
    <!--<script type="text/javascript" src="js/barcode.js"></script>-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo de barra</title>
</head>
    <style>
        table, th, td {
            border: 1px solid black;
            color: white;
            width: 100%;
            font-weight: bold;
            text-transform: uppercase;
        }
        body{
            background-image: linear-gradient(to right,#355C7D,#6C5B7B,#C06C84);
        }
        .btn-gene{
            padding:7px;
            margin: 0 auto;
            width:40%;
        }
        .fm-facu{
            border:solid 3px gold;
            margin:0 auto;
            width:70%;
            display:flex;
            justify-content:center;
            flex-direction: column;
            padding:30px;
            border-radius:10px;
        }
        .fm-facu input{
            width:100%;
            padding:7px;
        }
        .fm-facu label{
            color:white;
            font-size: 2.5vh;
        }
    </style>
<body>

<center><h1>Generar codigo de barras dinamico</h1></center>
<form class="fm-facu" action="php/insertar.php" method="post">
    <label for="">Nombre</label>
    <input type="text" name="codigo" id="" placeholder="Ingrese codigo"><br>
    <button type="submit" class="btn-gene">Generar codigo de barra</button><br><br>

</form><br><br><br><hr>

<div>
        <?php
            require_once "tabla.php";
        ?>
</div>

</body>



</html>