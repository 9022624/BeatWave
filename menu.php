<?php
$lang = isset($_POST['language']) && ($_POST['language'] == 'nl') ? 'nl' : 'en';

?>

<nav>
    <ul>
        <li><a href="home.php"><?php echo ($lang == 'nl') ? 'Home' : 'Home'; ?></a></li>
        <li><a href="tickets.php"><?php echo ($lang == 'nl') ? 'Tickets' : 'Tickets'; ?></a></li>
        <li><a href="review.php"><?php echo ($lang == 'nl') ? 'Recensie achterlaten' : 'Leave a Review'; ?></a></li>
        <li><a href="contact.php"><?php echo ($lang == 'nl') ? 'Contact' : 'Contact'; ?></a></li>
    </ul>
</nav>


