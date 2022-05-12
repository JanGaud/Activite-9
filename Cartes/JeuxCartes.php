<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cartes_nombres = [2, 3, 4, 5, 6, 7, 8, 9, 10, 'Valet', 'Dame', 'Roi', 'As'];
        $cartes_figures = ["&#9830", "&#9827", "&#9829", "&#9824"];
        $jeu_complet = [];
        $paquet1 = [];
        $paquet2 = [];
        $paquet_brasse = [];

        foreach ($cartes_figures as $figure){

            foreach ($cartes_nombres as $nombre ){
                $jeu_complet[] .= $nombre . " ".  $figure;
            }
        
        }
        $paquet1 = array_slice($jeu_complet,0, 26);
        $paquet2 = array_slice($jeu_complet,26, 51);

        for($i = 0; $i <= count($paquet1)-1; $i++)
        {
                $paquet_brasse[] .= $paquet1[$i];
                $paquet_brasse[] .= $paquet2[$i];

        }

        echo "<table border=1>";
        echo"<tr>";
        for ($j = 0; $j < 13; $j++)
        {

            echo"<th>$paquet_brasse[$j]</th>";
            
        }
        echo"</tr>";
        echo"<tr>";
        for ($k = 13; $k < 26; $k++)
        {

            echo"<th>$paquet_brasse[$k]</th>";
            
        }
        echo"</tr>";
        echo"<tr>";
        for ($l = 26; $l < 39; $l++)
        {

            echo"<th>$paquet_brasse[$l]</th>";
            
        }
        echo"</tr>";
        echo"<tr>";
        for ($m = 39; $m <= 51; $m++)
        {

            echo"<th>$paquet_brasse[$m]</th>";
            
        }
        echo"</tr>";
        echo "</table>";
        ?>
</body>
</html>