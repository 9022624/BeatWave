
document.getElementById('reviewForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'submit_review.php', true);

    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            
            var response = xhr.responseText;
            document.getElementById('statusMessage').innerHTML = response;
            document.getElementById('reviewForm').reset(); 
        } else {
            
            console.error('Error:', xhr);
        }
    };

    
    xhr.onerror = function() {
        console.error('Request failed');
    };

    
    xhr.send(formData);
});
