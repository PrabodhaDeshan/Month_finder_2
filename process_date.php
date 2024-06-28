<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['birthdaytime'])) {
        $selectedDateTime = $_POST['birthdaytime'];

        $selectedDate = new DateTime($selectedDateTime);
        $dayOfMonth = $selectedDate->format('j');

        if ($dayOfMonth == 1) {
            header('Location: ./page1.php');
            exit;
        } else {
            header('Location: ./page2.php');
            exit;
        }
    }
} else {
    header('Location: ./error.php');
    exit;
}
?>
