<?php
// Set timezone
date_default_timezone_set('UTC'); // Change if needed

// Target date
$targetDate = "2025-10-25 00:00:00";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Countdown to October 25, 2025</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
            background-color: #f4f4f4;
        }
        #countdown {
            font-size: 2em;
            background-color: #fff;
            display: inline-block;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
        }
    </style>
</head>
<body>

<h1>Countdown to October 25, 2025</h1>
<div id="countdown">Loading...</div>

<script>
// Get the target date from PHP
let targetDate = new Date("<?php echo $targetDate; ?> UTC").getTime();

function updateCountdown() {
    let now = new Date().getTime();
    let diff = targetDate - now;

    if (diff <= 0) {
        document.getElementById("countdown").innerHTML = "The date has already passed!";
        return;
    }

    let days = Math.floor(diff / (1000 * 60 * 60 * 24));
    let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((diff % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML =
        `${days} days, ${hours} hours, ${minutes} minutes, ${seconds} seconds`;
}

// Update every second
setInterval(updateCountdown, 1000);
updateCountdown(); // Initial call
</script>

</body>
</html>
