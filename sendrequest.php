<?php
    session_start();
    if (isset($_SESSION['currentEmail'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $to = "vedica.kandoi39@nmims.edu.in";
            $from = $_SESSION['currentEmail'];
            $occasion = $_POST['occasion'];
            $date = $_POST['date'];
            $location = $_POST['location'];
            $theme = $_POST['theme'];
            $specifics = $_POST['specifics'];
            echo "To: $to<br>From: $from<br><br>";
            echo "Subject: Request Event Decoration<br><br>";
            echo nl2br("Occasion: $occasion\nDate: $date\nLocation: $location\nTheme: $theme\n\nSpecific Requirements:\n$specifics");
            // mail($to,"Request Event Decoration", $content);
            echo "<br><br>Request Sent!";
        }
    } else {
        header('location:account.php');
    }
?>