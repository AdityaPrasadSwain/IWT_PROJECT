document.getElementById('userType').addEventListener('change', function () {
    var userType = this.value;

    // Hide all extra fields and password field by default
    document.getElementById('adminFields').style.display = 'none';
    document.getElementById('agencyFields').style.display = 'none';
    document.getElementById('usernameField').style.display = 'none'; // Hide username field
    document.getElementById('passwordField').style.display = 'none'; // Hide password field initially

    // Get the password field div
    var passwordField = document.getElementById('passwordField');

    // Show fields based on user type
    if (userType === 'admin') {
        document.getElementById('adminFields').style.display = 'block'; // Show admin-specific fields
        document.getElementById('adminFields').after(passwordField); // Move password field after admin-specific fields
        document.getElementById('passwordField').style.display = 'block'; // Show password field
    } else if (userType === 'travelAgency') {
        document.getElementById('agencyFields').style.display = 'block'; // Show travel agency-specific fields
        document.getElementById('agencyFields').after(passwordField); // Move password field after agency-specific fields
        document.getElementById('passwordField').style.display = 'block'; // Show password field
    } else if (userType === 'user') {
        document.getElementById('usernameField').style.display = 'block'; // Show username field for user
        document.getElementById('passwordField').style.display = 'block'; // Show password field after username field
    }
});
