// JavaScript to show/hide specific fields based on selected user type
document.getElementById('userType').addEventListener('change', function () {
    var userType = this.value;

    // Hide all extra fields
    document.getElementById('adminFields').style.display = 'none';
    document.getElementById('agencyFields').style.display = 'none';
    document.getElementById('userFields').style.display = 'none';

    // Show fields based on user type
    if (userType === 'admin') {
        document.getElementById('adminFields').style.display = 'block';
    } else if (userType === 'travelAgency') {
        document.getElementById('agencyFields').style.display = 'block';
    } else if (userType === 'user') {
        document.getElementById('userFields').style.display = 'block';
    }
});

