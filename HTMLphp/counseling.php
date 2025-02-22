<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments - Guidance System</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
    <style>
        /* Original First Code Styles */
        body { 
            font-family: 'Roboto', sans-serif;
            background: #f0f2f5;
            margin: 0px;
        }
        .container { display: flex; }
        .sidebar { 
            width: 250px; 
            height: 100vh; 
            background: #1e1e2d;
            color: white; 
            padding-top: 20px; 
            position: fixed; 
        }
        .sidebar img { display: block; margin: 10px auto; width: 100px; }
        .sidebar ul { list-style: none; padding: 10px; }
        .sidebar ul li a { 
            color: white; 
            text-decoration: none; 
            display: block; 
            padding: 10px; 
            transition: 0.3s; 
        }
        .sidebar ul li a:hover { background:rgba(255, 238, 0, 0.95); color: white; border-radius: 5px; }
        .content { 
            flex-grow: 1; 
            margin-left: 270px; 
            padding: 20px; 
            min-height: 100vh; 
        }
        .appointment-container { 
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .top-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .calendar-container, .appointment-info { 
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            height: 500px;
        }
        .appointment-info {
            border-left: 4px solid #343a40;
            display: flex;
            flex-direction: column;
        }
        #calendar { 
            height: 450px;
            font-size: 14px;
        }
        .fc-day-today {
            background-color:rgba(255, 217, 4, 0.74) !important;
        }
        .fc-day-selected {
            background-color:rgba(87, 84, 78, 0.3) !important;
        }
        .appointment-details {
            flex-grow: 1;
            display: grid;
            grid-template-rows: auto auto 1fr;
        }
        .detail-item {
            margin: 15px 0;
            padding: 15px;
            background: #ffffff;
            border-radius: 8px;
            border: 1px solid #dee2e6;
        }
        .detail-item h4 {
            margin: 0 0 10px 0;
            color: #343a40;
            font-size: 18px;
        }
        .detail-item p {
            margin: 5px 0;
            font-size: 16px;
            color: #495057;
        }
        .session-list {
            margin-top: auto;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
        }

        /* Enhanced Reservation List Styles */
        .reservation-list {
            background: white;
            border: 1px solid #ced4da;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        .add-btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .add-btn:hover {
            background-color: #218838;
        }
        .reservation-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        .reservation-table th,
        .reservation-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }
        .reservation-table th {
            background: #f8f9fa;
            color: #343a40;
            font-weight: 600;
        }
        .reservation-table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        .input-field {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .status {
            padding: 5px;
            border-radius: 5px;
        }
        .approved {
            background-color: #28a745;
            color: white;
        }
        .ongoing {
            background-color: #ffc107;
            color: black;
        }
        .canceled {
            background-color: #dc3545;
            color: white;
        }
        .log-out-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            width: 100%;
            margin-top: 20px;
            text-align: center;
        }
        .log-out-btn:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }
        .log-out-btn:active {
            background-color: #a83226;
            transform: scale(0.98);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="sidebar">
        <img src="../CSS/LogoAU.png" alt="Profile">
        <h2>Guidance System</h2>
        <ul>
            <li class="active"><a href="adminn.php"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="counseling.php"><i class="fas fa-comments"></i> Counseling</a></li>
            <li><a href="record.php"><i class="fas fa-comments"></i> Record</a></li>
            <li><a href="repord-admin.php"><i class="fas fa-comments"></i> Report</a></li>
            <li><a href="consult.php"><i class="fas fa-comments"></i> Consult</a></li>
        </ul>
        <button class="log-out-btn">Log Out</button>
    </div>

    <div class="content">
        <h2 style="margin-bottom: 25px; color: #343a40;">Counseling & Appointments</h2>
        <div class="appointment-container">
            <div class="top-section">
                <div class="calendar-container">
                    <h3 style="margin-top: 0; color:rgb(60, 64, 52);">Calendar</h3>
                    <div id="calendar"></div>
                </div>
                <div class="appointment-info">
                    <h3 style="margin-top: 0; color: #343a40;">Appointment Details</h3>
                    <div class="appointment-details">
                        <div class="detail-item">
                            <h4>Selected Date</h4>
                            <p id="selected-date" style="font-size: 20px; font-weight: 600; color: #343a40;">None</p>
                        </div>
                        <div class="detail-item">
                            <h4>Availability</h4>
                            <p>Available Slots: <span id="slots" style="font-weight: 600;">10</span></p>
                            <p>Reservations: <span id="reserved" style="font-weight: 600;">0</span></p>
                        </div>
                        <div class="session-list">
                            <h4>Scheduled Sessions</h4>
                            <ul id="session-list" style="list-style: none; padding: 0;">
                                <li style="padding: 8px 0; border-bottom: 1px solid #eee;">No sessions scheduled</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Reservation List -->
            <div class="reservation-list">
                <h2>Reservation List</h2>
                <button class="add-btn" onclick="addReservation()">Add Reservation</button>
                <table class="reservation-table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Reason</th>
                            <th>Concern</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Meeting Link</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="reservationTable">
                    
                        <!-- Additional rows can be added dynamically -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    // Calendar Initialization
    document.addEventListener("DOMContentLoaded", function () {
        var calendarEl = document.getElementById("calendar");
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: "dayGridMonth",
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,dayGridWeek'
            },
            selectable: true,
            dateClick: function (info) {
                calendar.el.querySelectorAll('.fc-day-selected').forEach(el => el.classList.remove('fc-day-selected'));
                info.dayEl.classList.add('fc-day-selected');
                document.getElementById("selected-date").innerText = info.dateStr;
                document.getElementById("slots").innerText = Math.floor(Math.random() * 10) + 1;
                document.getElementById("reserved").innerText = Math.floor(Math.random() * 5);
                document.getElementById("session-list").innerHTML = `
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">
                        <strong>10:00 AM</strong> - Example Session
                    </li>`;
            }
        });
        calendar.render();
    });

    // Dynamic Reservation System
    function addReservation() {
        let table = document.getElementById("reservationTable");
        let row = table.insertRow();
        
        row.insertCell(0).innerHTML = '<input type="text" class="input-field" placeholder="Student Name">';
        row.insertCell(1).innerHTML = '<input type="text" class="input-field" placeholder="Referral Reason">';
        row.insertCell(2).innerHTML = '<input type="text" class="input-field" placeholder="Concern">';
        row.insertCell(3).innerHTML = '<input type="date" class="input-field">';
        row.insertCell(4).innerHTML = '<input type="time" class="input-field">';
        row.insertCell(5).innerHTML = '<input type="text" class="input-field" placeholder="Meeting Link">';
        row.insertCell(6).innerHTML = `
            <select class="input-field status" onchange="this.className=this.value">
                <option value="approved" class="approved">Approved</option>
                <option value="ongoing" class="ongoing">Ongoing</option>
                <option value="canceled" class="canceled">Canceled</option>
            </select>`;
    }
</script>

</body>
</html>