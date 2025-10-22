<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Reseptilaskuri</title>
    <link rel="stylesheet" href="Kakkuresepti.css">
</head>
<body>

    <h2>Reseptilaskuri</h2>

    <form method="post">
        <label>Valitse annoskoko:</label>
        <select name="annoskoko">
            <option value="1">Perusannos</option>
            <option value="2">Tupla-annos</option>
            <option value="0.5">Puolikas annos</option>
        </select>
        <br><br>

        <label>Kirjoita ohjeet:</label><br>
        <textarea name="ohjeet" rows="10" cols="40"></textarea>
        <br><br>

        <input type="submit" value="Laske resepti">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $kerroin =$_POST["annoskoko"];

        
        echo "<h3>Ainekset:</h3>";
        echo "<p>";
        echo ($kerroin * 1) . " litra jauhoja<br>";
        echo ($kerroin * 3) . " munaa<br>";
        echo ($kerroin * 0.5) . " litra maitoa<br>";
        echo ($kerroin * 1) . " desi sokeria<br>";
        echo ($kerroin * 100) . " g rasvaa<br>";
        echo ($kerroin * 0.5) . " tl suolaa<br>";
        echo ($kerroin * 2) . " tl hiivaa<br>";
        echo "</p>";

       
        if (!empty($_POST["ohjeet"])) {
            echo "<h3>Ohjeet:</h3>";
            echo "<p>" .$_POST["ohjeet"] . "</p>";
        }
    }
    ?>

</body>
</html>
