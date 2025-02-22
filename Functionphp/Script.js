document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        // Prevent default form submission
        event.preventDefault();

        // Serialize form data
        var formData = new FormData(this);

        // Send form data to server using fetch API
        fetch('../Functionphp/Login.php', {
            method: 'POST',
            body: formData
        })
        .then(function(response) {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // Return the response text
            return response.text();
        })
        .then(function(responseText) {
            console.log(responseText); // Log the response text to console
            // Now you can try to parse the responseText as JSON
            var data = JSON.parse(responseText);
            // Handle server response
            if (data.success) {
                if (data.is_admin) {
                    // Redirect to AdminHP.php for admin users
                    window.location.href = "../HTMLphp/AdLoad.html";
                } else {
                    // Redirect to Main.php for regular users
                    window.location.href = "../HTMLphp/Load.html";
                }
            } else {
                // Redirect back to login page if login fails
                window.location.href = "../HTMLphp/Login.html";
            }
        })
        .catch(function(error) {
            console.error('There was a problem with the fetch operation:', error);
        });
    });
});
// Handles the redirection of the user based on their input when clicking the submit button