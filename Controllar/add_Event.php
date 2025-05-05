<?php
$EventName = $EventDate = $EventTime = $EventLocation = $EventDescription = $EventThumbnail = $EventCategory = $TicketPrice = $EventVenue = $Capacity = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $EventName = $_POST["eventName"] ?? "";
    $EventDate = $_POST["eventDate"] ?? "";
    $EventTime = $_POST["eventTime"] ?? "";
    $EventLocation = $_POST["eventLocation"] ?? "";
    $EventDescription = $_POST["eventDescription"] ?? "";
    $EventCategory = $_POST["eventCategory"] ?? "";
    $TicketPrice = $_POST["eventPrice"] ?? "";
    $EventVenue = $_POST["eventVenue"] ?? "";
    $Capacity = $_POST["eventCapacity"] ?? "";

    // Check if any of the required fields are empty BEFORE trying file upload
    if (
        empty($EventName) || empty($EventDate) || empty($EventTime) || empty($EventLocation) ||
        empty($EventDescription) || empty($EventCategory) ||
        empty($TicketPrice) || empty($EventVenue) || empty($Capacity) ||
        !isset($_FILES["eventImage"]) || $_FILES["eventImage"]["error"] !== 0
    ) {
        echo "Please fill in all fields.";
    } else {
        $EventThumbnail = $_FILES["eventImage"]["name"];
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $targetFile = $uploadDir . basename($EventThumbnail);
        move_uploaded_file($_FILES["eventImage"]["tmp_name"], $targetFile);

        echo "Event added successfully!";
    }
}
?>