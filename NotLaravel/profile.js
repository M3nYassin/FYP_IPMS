// profile.js

document.addEventListener('DOMContentLoaded', function() {
    // Get the logout button element
    var logoutBtn = document.getElementById('logout-btn');

    // Add click event listener to the logout button
    logoutBtn.addEventListener('click', function() {
        // Redirect to login.html when logout button is clicked
        window.location.href = 'login.html';
    });

    // Get the save changes button element
    var saveBtn = document.getElementById('save-btn');

    // Add click event listener to the save changes button
    saveBtn.addEventListener('click', function() {
        // Redirect to dashboard.html when save changes button is clicked
        window.location.href = 'dashboard.html';
    });
});
