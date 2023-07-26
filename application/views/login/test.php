<!DOCTYPE html>
<html>
<head>
    <title>User Location</title>
</head>
<body>
  
    <input type="text" name="submitted_latitude" id="submitted_latitude" class="form-control" style="opacity: 0;">
    <input type="text" name="submitted_longitude" id="submitted_longitude" class="form-control" style="opacity: 0;">
    <button id="getLocationBtn" style="display: none;">Get Location</button> <!-- Hide the button initially -->

    <script>
        // Function to show the popup asking the user to enable location
        function showLocationPopup() {
            var popup = confirm("To use this feature, please enable location access in your browser settings.");
            if (popup) {
                // Redirect the user to the browser settings page to enable location
                window.location.href = "chrome://settings/content/location";
            }
        }

        // Function to get the user's location
        function getUserLocation() {
            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        var latitude = position.coords.latitude;
                        var longitude = position.coords.longitude;

                   
                        // Set the values of the input fields with the retrieved latitude and longitude
                        document.getElementById('submitted_latitude').value = latitude;
                        document.getElementById('submitted_longitude').value = longitude;

                        // Show the button after successfully obtaining the user's location
                        document.getElementById('getLocationBtn').style.display = "block";
                    },
                    function(error) {
                        // Handle error if geolocation is not available or user denied permission
                        console.error('Error getting user location:', error.message);

                        // If user denied or blocked location access, show the popup
                        if (error.code === error.PERMISSION_DENIED || error.code === error.POSITION_UNAVAILABLE) {
                            showLocationPopup();
                        }
                    }
                );
            } else {
                console.error('Geolocation is not available in this browser.');
                // If geolocation is not available, show the popup
                showLocationPopup();
            }
        }

        // Call the function when the page is fully loaded
        window.onload = function() {
            getUserLocation();
        };
    </script>
</body>
</html>
