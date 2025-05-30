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
                        <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <h2>Attendees List</h2>
            </div>
            <div>
                <input type="text" class="search-bar" id="search-bar" placeholder="Search by name or email">
                <select class="filter" id="filter">
                    <option value="all">All Data</option>
                    <option value="checked">Checked In</option>
                    <option value="not-checked">Not Checked</option>
                </select>
            </div>
        </div>

        <!-- Alerts for Success/Error -->
        <?php if (isset($_GET['success'])): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($_GET['success']); ?></div>
        <?php elseif (isset($_GET['error'])): ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>

        <button onclick="getAttendees()">Load Attendees</button>
        <div id="attendee-data"></div>

        <h3>Add New Attendee</h3>
        <form action="../Controller/add_attendee.php" method="POST">
            <input type="text" id="name" name="a_name" placeholder="Name" required>
            <input type="email" id="email"name="a_email" placeholder="Email" required>
            <select name="a_Check" required>
                <option value="Checked">Checked</option>
                <option value="Unchecked">Unchecked</option>
            </select>
            <input type="text" name="a_Status" id="status" placeholder="Status" required>
            <input type="text" name="a_Event_Name" placeholder="Event Name" required>
            <input type="number" name="a_EventID" placeholder="Event ID" required>
            <button type="submit">Add Attendee</button>
        </form>

        <div class="summary">
            <div class="header">Attendee Summary</div>
            <div class="summary-item">
                <div class="summary-value">
                    <?php
                    include('../Model/DataBase.php');
                    $sql = "SELECT COUNT(*) as total FROM attendance";
                    $result = $conn->query($sql);
                    $total = $result ? $result->fetch_assoc()['total'] : 0;
                    $conn->close();
                    echo $total;
                    ?>
                </div>
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
    </div>

    <script>

        function getAttendees() {
            const filter = document.getElementById('filter').value;
            const search = document.getElementById('search-bar').value.trim();
            const xhttp = new XMLHttpRequest();
            xhttp.open("POST", "../Controller/get_attendees.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            const json = { request: filter };
            xhttp.send("json=" + JSON.stringify(json));

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    const attendees = JSON.parse(this.responseText);
                    const tbody = document.createElement('tbody');
                    const table = document.createElement('table');
                    table.setAttribute('border', '1');
                    table.innerHTML = '<tr><th>Name</th><th>Email</th><th>Check</th><th>Status</th><th>Event Name</th><th>Event ID</th></tr>';

                    if (attendees.error) {
                        const row = document.createElement('tr');
                        const cell = document.createElement('td');
                        cell.setAttribute('colspan', '6');
                        cell.textContent = attendees.error;
                        row.appendChild(cell);
                        tbody.appendChild(row);
                    } else if (attendees.length === 0) {
                        const row = document.createElement('tr');
                        const cell = document.createElement('td');
                        cell.setAttribute('colspan', '6');
                        cell.textContent = 'No data found';
                        row.appendChild(cell);
                        tbody.appendChild(row);
                    } else {
                        attendees.filter(attendee => {
                            return search === '' ||
                                attendee.a_name.toLowerCase().includes(search.toLowerCase()) ||
                                attendee.a_email.toLowerCase().includes(search.toLowerCase());
                        }).forEach(attendee => {
                            const row = document.createElement('tr');
                            const fields = ['a_name', 'a_email', 'a_Check', 'a_Status', 'a_Event_Name', 'a_EventID'];
                            fields.forEach(field => {
                                const cell = document.createElement('td');
                                if (field === 'a_Check' || field === 'a_Status') {
                                    const span = document.createElement('span');
                                    span.className = `status ${field === 'a_Check' ? attendee[field].toLowerCase().replace(' ', '-') : ''}`;
                                    span.textContent = attendee[field];
                                    cell.appendChild(span);
                                } else {
                                    cell.textContent = attendee[field];
                                }
                                row.appendChild(cell);
                            });
                            tbody.appendChild(row);
                        });
                    }

                    table.appendChild(tbody);
                    document.getElementById("attendee-data").innerHTML = '';
                    document.getElementById("attendee-data").appendChild(table);
                }
            };
        }

        // Event listeners for filter and search
        document.getElementById('filter').addEventListener('change', getAttendees);
        document.getElementById('search-bar').addEventListener('input', getAttendees);

        // Load attendees on page load
        getAttendees();
    </script>
</body>
</html>