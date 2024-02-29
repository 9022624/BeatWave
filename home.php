<?php
session_start();

if (isset($_POST['language'])) {
    $_SESSION['language'] = ($_POST['language'] == 'nl') ? 'nl' : 'en';
}

if (!isset($_SESSION['language'])) {
    $_SESSION['language'] = 'en';
}


$lang = $_SESSION['language'];


$welcomeText = ($lang == 'nl') ? "Welkom bij BeatWave Festival" : "Welcome to BeatWave Festival";
$aboutText = ($lang == 'nl') ? "Over het Festival" : "About the Festival";

$artists = array(
    "Taylor Swift" => ($lang == 'nl') ? "Taylor Swift is een multi-bekroonde singer-songwriter bekend om haar pakkende popmuziek en spetterende optredens." : "Taylor Swift is a multi-award-winning singer-songwriter known for her catchy pop tunes and electrifying performances.",
    "Kendrick Lamar" => ($lang == 'nl') ? "Kendrick Lamar is een veelgeprezen rapper en tekstschrijver wiens intrigerende muziek hem veel lof heeft opgeleverd." : "Kendrick Lamar is a critically acclaimed rapper and lyricist whose thought-provoking music has earned him widespread acclaim.",
    "Beyoncé" => ($lang == 'nl') ? "Beyoncé is een iconische zangeres, liedjesschrijver en performer bekend om haar krachtige vocalen en baanbrekende optredens." : "Beyoncé is an iconic singer, songwriter, and performer known for her powerful vocals and groundbreaking stage shows."
);

?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeatWave Festival</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <header>
            <h1><?php echo $welcomeText; ?></h1>
        </header>

        <section>
            <h2><?php echo $aboutText; ?></h2>
            <?php
            echo "<p>";
            echo ($lang == 'nl') ? "Welkom bij BeatWave Festival, het ultieme feest van muziek, kunst en cultuur!" : "Welcome to BeatWave Festival, the ultimate celebration of music, art, and culture!";
            echo "</p>";
            ?>
            
        </section>

        <section>
            <h2><?php echo ($lang == 'nl') ? "Uitgelichte Artiesten" : "Featured Artists"; ?></h2>
            <?php
            foreach ($artists as $name => $info) {
                echo "<div class='artist'>";
                echo "<h3>$name</h3>";
                echo "<p>$info</p>";
                echo "</div>";
            }
            ?>
        </section>

        <section>
            <h2><?php echo ($lang == 'nl') ? "Recente Review" : "Recent Review"; ?></h2>
            <?php
            if (isset($_SESSION['review'])) {
                $review = $_SESSION['review'];
                echo "<div class='review'>";
                echo "<p>Name: {$review['name']}</p>";
                echo "<p>Rating: {$review['rating']} stars</p>";
                echo "<p>Review: {$review['review']}</p>";
                echo "</div>";
            } else {
                echo "<p>No recent reviews.</p>";
            }
            ?>
        </section>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
