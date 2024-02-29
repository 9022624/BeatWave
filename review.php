<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeatWave Festival - <?php echo ($lang == 'nl') ? 'Recensie Achterlaten' : 'Leave a Review'; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <header>
            <h1><?php echo ($lang == 'nl') ? 'Recensie Achterlaten' : 'Leave a Review'; ?></h1>
        </header>

        <section>
            <form id="reviewForm">
                <label for="name"><?php echo ($lang == 'nl') ? 'Naam:' : 'Name:'; ?></label><br>
                <input type="text" id="name" name="name" required><br><br>

                <label for="rating"><?php echo ($lang == 'nl') ? 'Beoordeling:' : 'Rating:'; ?></label><br>
                <select id="rating" name="rating">
                    <option value="5">5 stars</option>
                    <option value="4">4 stars</option>
                    <option value="3">3 stars</option>
                    <option value="2">2 stars</option>
                    <option value="1">1 star</option>
                </select><br><br>

                <label for="review"><?php echo ($lang == 'nl') ? 'Recensie:' : 'Review:'; ?></label><br>
                <textarea id="reviewText" name="review" rows="4" cols="50" required></textarea><br><br>

                <button type="submit"><?php echo ($lang == 'nl') ? 'Indienen' : 'Submit'; ?></button>
            </form>
            <div id="statusMessage"></div>
        </section>
    </div>

    <script src="review.js"></script>

    <?php include 'footer.php'; ?>
</body>
</html>
