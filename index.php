<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Schronisko</title>
    <link href="https://fonts.googleapis.com/css?family=Rammetto+One&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="reset.css" media="all">
    <script src="js.js"></script>
    <style>
        * {
            font-family: 'Rammetto One', cursive;
        }

        body {
            background-color: bisque;
        }

        .header {
            text-align: center;
            color: crimson;
            font-weight: 700;
        }
        
        .info{
            text-align: right;
            margin: 0 30px 0 0;
        }

        input {
            margin: 0 0 30px 15px;
            padding: 10px;
        }
    </style>


</head>

<body onload="zwierzaki()">
    <p class="header">WITAMY W SCHRONISKU</p>
    <p class="info"></p>
    <form>
        <input type="button" value="Przyjmij zwierzaka" id="dod" onclick="dodawanie()">
        <input type="button" value="Oddaj zwierzaka" id="dod" onclick="oddaj()">
    </form>
    <div style="text-align: center"><img src="grumpy-cat.jpg" alt="kotek"></div>
</body>
</html>