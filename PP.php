<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aantal Personen</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <header>
            <h1>Aantal Personen</h1>
        </header>
        
        <section id="personSelection">
            <form action="verwerk.php" method="post" id="personForm">
                <label for="numberOfPersons">Kies het aantal personen:</label>
                <select name="numberOfPersons" id="numberOfPersons">
                    <?php
                    for ($i = 0; $i <= 50; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
                <br>
                <label for="totalPrice">Totaalprijs:</label>
                <span id="totalPrice">€0.00</span>
                <br><br>
                <div id="questions" style="display: none;">
                    <label for="name">Naam*:</label>
                    <input type="text" id="name" name="name" required>
                    <br>
                    <label for="surname">Achternaam*:</label>
                    <input type="text" id="surname" name="surname" required>
                    <br>
                    <label for="middlename">Tussenvoegsel:</label>
                    <input type="text" id="middlename" name="middlename">
                    <br>
                    <label for="birthdate">Geboortedatum*:</label>
                    <input type="date" id="birthdate" name="birthdate" required>
                    <br>
                    <label for="phone">Telefoonnummer:</label>
                    <input type="tel" id="phone" name="phone" pattern="06[0-9]{8}" required>
                    <br>
                    <label for="email">E-mail (verplicht):</label>
                    <input type="email" id="email" name="email" required>
                    <br><br>
                    <button type="submit" id="nextButton">Volgende</button>
                </div>
            </form>
            <div id="confirmation" style="display: none;">
                <p>Bedankt voor je bestelling! Binnen 1 uur ontvang je een e-mail met informatie over de betaling. Zodra de betaling is ontvangen, sturen we je de tickets toe.</p>
            </div>
        </section>
    </div>
    <?php include 'footer.php'; ?>

    <script src="PP.js"></script>
</body>
</html>
