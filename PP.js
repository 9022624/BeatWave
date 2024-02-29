document.getElementById("numberOfPersons").addEventListener("change", function() {
    var numberOfPersons = parseInt(this.value);
    
    var artistFee = 5000; 
    var venueCost = 5000; 
    var profit = 2750; 

    var totalCost = artistFee + venueCost + profit;

    var totalPrice = totalCost * (numberOfPersons / 150);

    document.getElementById("totalPrice").textContent = "€" + totalPrice.toFixed(2);

    document.getElementById("questions").style.display = "block";
});

document.getElementById("personForm").addEventListener("submit", function(event) {
    event.preventDefault(); 
    

    var birthdate = new Date(document.getElementById("birthdate").value);
    var eighteenYearsAgo = new Date();
    eighteenYearsAgo.setFullYear(eighteenYearsAgo.getFullYear() - 18);
    
    if (birthdate > eighteenYearsAgo) {
        alert("Je moet minimaal 18 jaar oud zijn om tickets te bestellen.");
        return; 
    }
    
    document.getElementById("questions").style.display = "none";
    document.getElementById("confirmation").style.display = "block";
});
