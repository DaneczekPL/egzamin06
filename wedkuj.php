<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wędkujemy</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        #upper{
            background-color: #4682B4;
            color: white;
            padding: 20px;
            font-size: 120%;
            text-align: center;
        }
        #left{
            background-color: #40E0D0;
            width: 40%;
            height: 500px;
            float: left;
        }
        #right{
            background-color: #40E0D0;
            width: 60%;
            height: 500px;
            float: left;
        }
        #bottom{
            clear: both;
            width: 100%;
            background-color: #4682B4 ;

        }
    </style>
</head>
<body style="font-family: Verdana;">

    <div id=upper>
        <h1><b>Portal dla wędkarzy</b></h1>
    </div>
    <div id=left>
        <h3><b>Ryby drapieżne naszych wód</b></h3>
        <ul>
        <?php
        $db = new mysqli('localhost', 'root', '', 'wedkowanie');
        $sql = "SELECT nazwa, wystepowanie FROM `ryby` where styl_zycia = 1";
        $wynik = $db->query($sql);
        while($wiersz = $wynik->fetch_assoc()) {
            $nazwa = $wiersz['nazwa'];
            $wystepowanie = $wiersz['wystepowanie'];
            echo "<li>$nazwa, wystepowanie: $wystepowanie</li>";
        }
        $db->close();
        ?>

        </ul>
    </div>
    <div id=right>
        <img style="padding: 5px; margin: 10px; border: 1px solid;" src="https://4.bp.blogspot.com/-Rp_mnnLIiSk/XZFfXCku9_I/AAAAAAAAEAI/nKebrMZc_AYGur8QQ-uOWKXRwyjM19vZwCLcBGAsYHQ/s1600/ryba1.jpg">
    </div>
    <div style=" background-color: #40E0D0; text-align: center;">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id=bottom>
       <br>
       <p style="text-align: center; color: white;">Stronę wykonał: 02212400472</p><br>
    </div>
</body>
</html>