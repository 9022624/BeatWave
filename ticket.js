$(document).ready(function() {
    $("#time").change(function() {
        var location = $("#location").val();
        var artist = $("#artist").val();
        var selectedDate = $("#date").val();
        var selectedTime = $(this).val();
        
        loadAvailableTimes(location, artist, selectedDate);
        
        $("#numberOfPersonsLabel").show();
        $("#numberOfPersons").show();
    });
});
    $(document).ready(function() {
        var artists = {
            JAN_LIGTHARTSTRAAT: [
                { 
                    name: "Taylor Swift", 
                    performances: [
                        { date: "2024-03-15", time: "12:00" },
                        { date: "2024-03-17", time: "15:00" },
                        { date: "2024-03-17", time: "23:00" },
                        { date: "2024-03-27", time: "15:00" },
                        { date: "2024-03-29", time: "23:00" }
                    ] 
                },
                { 
                    name: "Kendrick Lamar", 
                    performances: [
                        { date: "2024-03-16", time: "14:00" },
                        { date: "2024-03-14", time: "15:00" },
                        { date: "2024-03-28", time: "15:00" },
                        { date: "2024-03-28", time: "19:00" }
                    ] 
                },
                { 
                    name: "Beyoncé", 
                    performances: [
                        { date: "2024-03-18", time: "16:00" },
                        { date: "2024-03-26", time: "16:00" },
                        { date: "2024-03-26", time: "19:00" },
                        { date: "2024-03-27", time: "21:30" }
                    ] 
                }
            ]
        };
        $(document).ready(function() {
    $("#time").change(function() {
        var selectedTime = $(this).val();
        
        if (selectedTime) {
            $("#numberOfPersonsLabel").show();
            $("#numberOfPersons").show();
            
                }
    });
});

        $("#artistForm").submit(function(event) {
            event.preventDefault();
            var location = $("#location").val();
            var artist = $("#artist").val(); 
            var date = $("#date").val(); 
            var time = $("#time").val(); 
            showCalendar(location, artist, date, time); 
        });

        
        function showArtists(location) {
            var artistOptions = "<label for='artist'>Kies een artiest:</label>" +
                "<select id='artist' name='artist'>";
            artists[location].forEach(function(artist) {
                artistOptions += "<option value='" + artist.name + "'>" + artist.name + "</option>";
            });
            artistOptions += "</select>" +
                "<button type='button' onclick='askForNumberOfPersons()'>Volgende</button>";
            $("#artistSelection").html(artistOptions);

            
            var selectedArtist = $("#artist").val();
            showPrice(location, selectedArtist);
        }

        
        function showCalendar(location, artist, date, time) {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                events: getEvents(location, artist)
            });
            calendar.render();
            $("#calendarSection").show();
        }

        function showPrice(location, artist) {
            var artistFee = 5000; 
            var venueCost = 5000; 
            var winst = 2750; 

            var totalCost = artistFee + venueCost + winst; 
            var zaalCapaciteit = 150; 
            var prijsPerPersoon = totalCost / zaalCapaciteit; 

            $("#price").html("Prijs per persoon: €" + prijsPerPersoon.toFixed(2));
            $("#priceSection").show(); 
        }

        
        function loadAvailableDates(location, artist) {
            var availableDates = artists[location].find(function(a) {
                return a.name === artist;
            });
            
            if (availableDates) {
                availableDates = availableDates.performances.map(function(p) {
                    return p.date;
                });
            } else {
                availableDates = [];
            }

            var currentDate = new Date();
            var currentDateString = currentDate.toISOString().split('T')[0];
            
            var dateOptions = "<option value=''>Kies een datum</option>";
            availableDates.forEach(function(date) {
                if (date >= currentDateString) {
                    dateOptions += "<option value='" + date + "'>" + date + "</option>";
                }
            });
            
            $("#date").html(dateOptions);
        }

        
        function loadAvailableTimes(location, artist, selectedDate) {
            var availableTimes = artists[location].find(function(a) {
                return a.name === artist && a.performances.some(function(p) {
                    return p.date === selectedDate;
                });
            }).performances.filter(function(p) {
                return p.date === selectedDate;
            }).map(function(p) {
                return p.time;
            });

            var timeOptions = "<option value=''>Kies een tijd</option>";
            availableTimes.forEach(function(time) {
                timeOptions += "<option value='" + time + "'>" + time + "</option>";
            });

            $("#time").html(timeOptions);
        }

        
        $("#location").change(function() {
            var location = $(this).val();
            showArtists(location);
        });

        
        $("#artist").change(function() {
            var location = $("#location").val();
            var artist = $(this).val();
            loadAvailableDates(location, artist);
            showPrice(location, artist); 
        });

        
        $("#date").change(function() {
            var location = $("#location").val();
            var artist = $("#artist").val();
            var selectedDate = $(this).val();
            loadAvailableTimes(location, artist, selectedDate);
        });

        
        var initialLocation = $("#location").val();
        var initialArtist = $("#artist").val();
        loadAvailableDates(initialLocation, initialArtist);
    });