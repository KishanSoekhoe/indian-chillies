<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welkom bij onze menu pagina Indian Chillies">
    <meta name="author" content="Kishan">
    <meta name="keywords" content="Indian Chillies Restaurant, Indian cuisine, spicy food, Indian restaurant, dining experience, menu, food, chicken, chicken curry, vindaloo, samosa">
    <title>Review</title>
    <link rel="stylesheet" type="text/css" href="Css/styl.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">  
    <script src="lib/hamburger.js" defer></script> 
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
    <section class="review-container">
    <article class="reviewe">
            <h2>Maak een review</h2>
            <form action="" method="POST">
                <label for="name">jouw naam:</label>
                <input type="text" class="review-input" name="name" required>
                <label for="rating">Rating (1-5):</label><br>
                <input type="number" class="review-input" name="rating" min="1" max="5" required>
                <label for="comment">Jouw Review:</label>
                <textarea id="comment" class="review-input" name="comment" rows="4" required></textarea>
                <input type="submit" class="button-submit" name="submit" value="Review plaatsen">
            </form>
            
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
                $name = $_POST["name"];
                $rating = $_POST["rating"];
                $comment = $_POST["comment"];
                
                echo "<article class='review'>";
                echo "<p>Name: $name<p>";
                echo "<p>Rating: $rating</p>";
                echo "<p>Review: $comment</p>";
                echo "</article>";
            } else {
                echo "Geen reviews nog.";
            }
            ?>
            </article>
            </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
