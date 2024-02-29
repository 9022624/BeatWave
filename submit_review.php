<?php
session_start();

$name = isset($_POST['name']) ? $_POST['name'] : ''; 
$rating = isset($_POST['rating']) ? $_POST['rating'] : ''; 
$review = isset($_POST['review']) ? $_POST['review'] : ''; 

$_SESSION['review'] = array(
    'name' => $name,
    'rating' => $rating,
    'review' => $review
);

echo "Thank you, $name, for your review! Your rating: $rating stars. We appreciate your feedback!";
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Submitted</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <header>
            <h1>Thank You for Your Review</h1>
        </header>

        <section>
            
            <p>Thank you, <?php echo $name; ?>, for your review!</p>
            <p>Your rating: <?php echo $rating; ?> stars</p>
            <p>Your review: <?php echo $review; ?></p>
            <p>We appreciate your feedback!</p>
        </section>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
