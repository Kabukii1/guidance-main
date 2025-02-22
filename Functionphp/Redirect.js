// redirect.js

document.getElementById('logoLink').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behavior
    
    // AJAX request to check admin status
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../Functionphp/CheckAdmin.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Check admin status
            var isAdmin = JSON.parse(xhr.responseText).is_admin;
            if (isAdmin) {
                window.location.href = 'AdLoad.html'; // Redirect to admin page
            } else {
                window.location.href = 'Load.html'; // Redirect to normal page
            }
        }
    };
    xhr.send();
});
