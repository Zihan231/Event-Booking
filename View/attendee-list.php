<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('location: login.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendee List</title>
    <link rel="stylesheet" href="../Asset/CSS/attendee-list.css">
   
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-left">
                <a href="DashBoard.php" aria-label="Go back to homepage">
                    <svg class="back-icon" viewBox="0 0 24 24">
                        <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <h2>Attendees List</h2>
            </div>
            <div>
                <input type="text" class="search-bar" placeholder="Search">
                <select class="filter">
                    <option value="all">All Data</option>
                    <option value="checked">Checked In</option>
                    <option value="not-checked">Not Checked</option>
                </select>
            </div>
        </div>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Check In</th>
                <th>Status</th>
                <th>Event Name</th>
                <th>Event ID</th>
            </tr>
            <tr>
                <td><img src="https://images.pexels.com/photos/4584461/pexels-photo-4584461.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Profile" class="profile-img">Amelia</td>
                <td>Amelia123@email.com</td>
                <td><span class="status checked-in">Checked In</span></td>
                <td><span class="status confirmed">Confirmed</span></td>
                <td><span class="">Jazz Night Live</span></td>
                <td><span class="">Startup Pitch Day</span></td>
            </tr>
            <tr>
                <td><img src="https://images.pexels.com/photos/4420634/pexels-photo-4420634.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Profile" class="profile-img">Raisha jarin</td>
                <td>Raisha87@email.com</td>
                <td><span class="status checked-in">Checked In</span></td>
                <td><span class="status confirmed">Confirmed</span></td>
                <td><span class="">Jazz Night Live</span></td>
                <td><span class="">Startup Pitch Day</span></td>
            </tr>
            <tr>
                <td><img src="https://images.pexels.com/photos/5378700/pexels-photo-5378700.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Profile" class="profile-img"> MD:Lamim</td>
                <td>Lamim345@email.com</td>
                <td><span class="status not-checked">Not Checked</span></td>
                <td><span class="status cancelled">Cancelled</span></td>
                <td><span class="">Jazz Night Live</span></td>
                <td><span class="">Startup Pitch Day</span></td>
            </tr>
            <tr>
                <td><img src="https://images.pexels.com/photos/6976943/pexels-photo-6976943.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Profile" class="profile-img">songita Rani</td>
                <td>songita76@example.com</td>
                <td><span class="status checked-in">Checked In</span></td>
                <td><span class="status confirmed">Confirmed</span></td>
                <td><span class="">Jazz Night Live</span></td>
                <td><span class="">Startup Pitch Day</span></td>
            </tr>
            <tr>
                <td><img src="https://images.pexels.com/photos/5384445/pexels-photo-5384445.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Profile" class="profile-img">Arup dev</td>
                <td>Arup6381@example.com</td>
                <td><span class="status not-checked">Not Checked</span></td>
                <td><span class="status pending">Pending</span></td>
                <td><span class="">Jazz Night Live</span></td>
                <td><span class="">Startup Pitch Day</span></td>
            </tr>
            <tr>
                <td><img src="https://images.pexels.com/photos/573299/pexels-photo-573299.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Profile" class="profile-img">Susmita das</td>
                <td>Susmita84@example.com</td>
                <td><span class="status not-checked">Not Checked</span></td>
                <td><span class="status cancelled">Cancelled</span></td>
                <td><span class="">Jazz Night Live</span></td>
                <td><span class="">Startup Pitch Day</span></td>
            </tr>
        </table>
    </div>
    <div class="summary">
        <div class="header">Attendee Summary</div>
        <div class="summary-item">
            <div class="summary-value">200</div>
            <div class="total-registered">Total Registered</div>
        </div>
        <div class="summary-item">
            <div class="status-indicator">
                <span class="status-dot warning"></span>
                <span class="status-label">Warning</span>
            </div>
        </div>
        <div class="summary-item">
            <div class="status-indicator">
                <span class="status-dot error"></span>
                <span class="status-label">Error</span>
            </div>
        </div>
    </div>

    <script src="../Asset/js/attendee-list.js"></script>
</body>
</html>