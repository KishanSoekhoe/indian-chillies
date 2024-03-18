<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welkom bij onze reservering pagina Indian Chillies">
    <meta name="author" content="Kishan">
    <meta name="keywords" content="Indian Chillies Restaurant, Indian cuisine, spicy food, Indian restaurant, dining experience, menu, food, chicken, chicken curry, vindaloo, samosa">
    <title>Reserveren pagina</title>
    <link rel="stylesheet" type="text/css" href="Css/styl.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet"> 
    <script src="lib/hamburger.js" defer></script>  
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $voornaam = htmlspecialchars($_POST["voornaam"]);
            $tussenvoegsel = htmlspecialchars($_POST["tussenvoegsel"]);
            $achternaam = htmlspecialchars($_POST["achternaam"]);
            $telefoonnumeer = htmlspecialchars($_POST["telefoonnummer"]);
            $aantalpersonen = htmlspecialchars($_POST["aantal_personen"]);
            $datumreservering = htmlspecialchars($_POST["datum_reservering"]);
            $tijdreservering = htmlspecialchars($_POST["tijd_reservering"]);
            
            echo "<section class= 'container_compleet'>";
            echo "<article class='informatie_reserving'>";
            echo "<h1>Indian chillies reservering </h1>";
            echo "<h2>Bedankt voor je reservering $voornaam! je hebt een reservering gemaakt voor $datumreservering </h2>";
            echo "<h3>Klant details</h3>";
            echo "<br>";
            echo "<p>Voornaam: $voornaam</p>";
            echo "<br>";
            echo "<p>Tusenvoegsel: $tussenvoegsel</p>";
            echo "<br>";
            echo "<p>Achternaam: $achternaam</p>";
            echo "<br>";
            echo "<p>Telefoonnummer: $telefoonnumeer</p>";
            echo "<br>";
            echo "<p>Aantal personen: $aantalpersonen</p>";
            echo "<br>";
            echo "<p>Tijd reservering: $tijdreservering</p>";
            echo "</article>";
            echo "</section>";

        }
    

        ?>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>