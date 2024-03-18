
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welkom bij onze reservering formulier van Indian Chillies">
    <meta name="author" content="Kishan">
    <meta name="keywords" content="Indian Chillies Restaurant, Indian cuisine, spicy food, Indian restaurant, dining experience, menu, food, chicken, chicken curry, vindaloo, samosa">
    <title>Reserveren formulier</title>
    <link rel="stylesheet" type="text/css" href="Css/styl.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet"> 
    <script src="lib/hamburger.js" defer></script>  
</head>
<body>
    <?php include 'header.php'; ?>
<main>
    <section class='container_formulier'>
        <article class="formulier">
        <h1>Maak een reservering</h1>
        <form action="reserveringcompleet.php" method="POST">
            <label for="voornaam">Voornaam:</label>
            <input type="text" id="voornaam" name="voornaam" placeholder="Voornaam" required>

            <label for="tussenvoegsel">Tussenvoegsel:</label>
            <input type="text" id="tussenvoegsel" name="tussenvoegsel" placeholder="Tussenvoegsel">

            <label for="achternaam">Achternaam:</label>
            <input type="text" id="achternaam" name="achternaam" placeholder="Achternaam" required>

            <label for="telefoonnummer">Telefoonnummer:</label>
            <input type="tel" id="telefoonnummer" name="telefoonnummer" placeholder="06-12345678"
            pattern="06-[0-9]{8}" required>


            <label for="aantal_personen">Aantal personen:</label>
            <input type="number" id="aantal_personen" name="aantal_personen" min="1" required>

            <label for="datum_reservering">Datum van reservering:</label>
            <input type="date" id="datum_reservering" name="datum_reservering" required>

            <label for="tijd_reservering">Tijd van reservering:</label>
            <select id="tijd_reservering" name="tijd_reservering" required>
                <option value="">Kies een uur</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
            </select>

            <button type="submit">Reserveren</button>
        </form>
     </article>
    </section>
</main>
<?php include 'footer.php'; ?>
</body>
</html>
