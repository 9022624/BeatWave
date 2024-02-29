<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="fullcalendar/main.css">
</head>
<body>
<?php include 'menu.php'; ?>
    <div class="container">
        <header>
            <h1>Tickets</h1>
        </header>
        
        
        <section id="artistSelection">
    
            <form action="tickets.php" method="post" id="artistForm">
                <label for="location">Kies een locatie:</label>
                <select name="location" id="location">
                    <option value="JAN_LIGTHARTSTRAAT">JAN LIGTHARTSTRAAT 250, 3083 AM ROTTERDAM</option>
                   
                </select>
                <br>
                <label for="artist">Kies een artiest:</label>
<select name="artist" id="artist">
    <option value="" selected>Kies uit</option> 
    <option value="Taylor Swift">Taylor Swift</option>
    <option value="Kendrick Lamar">Kendrick Lamar</option>
    <option value="Beyoncé">Beyoncé</option>
</select>

                <br>
                <label for="date">Kies een datum:</label>
                <select id="date" name="date">
                
                </select>
                <br>
                <label for="time">Kies een tijd:</label>
                <select id="time" name="time">
                    
                </select>
                <br>
               
            </form>
            <form action="PP.php" method="post">
    
    <button type="submit">Volgende</button>
</form>

        </section>
        
        <section id="priceSection" style="display: none;">
            <h2>Prijs</h2>
            <div id="price"></div>
            <label for="numberOfPersons" id="numberOfPersonsLabel" style="display: none;">Aantal personen:</label>
<input type="number" id="numberOfPersons" name="numberOfPersons" min="1" max="10" style="display: none;">

        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="fullcalendar/main.js"></script>
    <script src="ticket.js"></script>
    
    <?php include 'footer.php'; ?>
</body>
</html>
