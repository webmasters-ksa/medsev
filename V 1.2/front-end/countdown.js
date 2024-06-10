document.addEventListener("DOMContentLoaded", function() {
    var timerElement = document.getElementById('timer');

    function updateTimer() {
        var currentTime = new Date();
        var endTime = new Date(currentTime);
        endTime.setMinutes(endTime.getMinutes() + 30); // 30 minutes from current time

        var timeDiff = endTime.getTime() - currentTime.getTime();

        var minutes = Math.floor((timeDiff / (1000 * 60)) % 60);
        var seconds = Math.floor((timeDiff / 1000) % 60);

        timerElement.textContent = "المتبقي: " + minutes + " دقيقة و " + seconds + " ثانية";

        if (timeDiff <= 0) {
            clearInterval(timerInterval);
            window.location.href = "expired.php"; // Redirect to expired page
        }
    }

    updateTimer(); // Initial call to display timer immediately

    var timerInterval = setInterval(updateTimer, 1000); // Update timer every second
});
