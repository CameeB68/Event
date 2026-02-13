<!DOCTYPE html>
<html>
<head>
    <title>Event Results</title>
</head>
<body>

<h2>Registration Results</h2>

<?php

// Retrieve form data
$first = $_POST['first_name'];
$last = $_POST['last_name'];

// Check if events were selected
if (isset($_POST['events'])) {
    $events = $_POST['events'];
} else {
    $events = array();
}

// Display name
echo "<p>Thank you, $first $last.</p>";

// Display selected events
if (!empty($events)) {

    echo "<p>You registered for:</p>";
    echo "<ul>";

    foreach ($events as $value) {
        echo "<li>$value</li>";
    }

    echo "</ul>";

} else {

    echo "<p>No events were selected.</p>";

}

?>

</body>
</html>
