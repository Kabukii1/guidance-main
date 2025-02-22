<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Student Profiling</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            background-color: #f4f4f4;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #1e1e2d;
            color: white;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar img {
            display: block;
            margin: 10px auto;
            width: 100px;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 20px;
            margin-top: 10px;
        }

        .sidebar ul {
            list-style: none;
            padding: 10px;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            transition: 0.3s;
        }

        .sidebar ul li a:hover {
            background: #ffcc00;
            color: black;
            border-radius: 5px;
        }

        .sidebar ul li.active a {
            background-color: #ffcc00;
            color: black;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }

        .content h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .filters {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .filters select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
        }

        .referral-list {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .referral-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: calc(33.33% - 15px);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .referral-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .referral-item p {
            margin: 5px 0;
            color: #555;
        }

        .pending {
            border-left: 5px solid red;
        }

        .in-progress {
            border-left: 5px solid yellow;
        }

        .resolved {
            border-left: 5px solid green;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            position: relative;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: #000;
        }

        button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <img src="../CSS/LogoAU.png" alt="Logo">
        <h2>Guidance System</h2>
        <ul>
        <li><a href="adminn.php"><i class="fas fa-home"></i> Dashboard</a></li>
        <li><a href="referra.php"><i class="fas fa-user-plus"></i> Referral List</a></li>
        <li><a href="profiling.php"><i class="fas fa-users"></i> Student Profiling</a></li>
        <li><a href="counseling.php"><i class="fas fa-comments"></i> Counseling</a></li>
        <li><a href="record.php"><i class="fas fa-clipboard"></i> Records</a></li>
        </ul>
    </div>

    <div class="content">
        <h1>Referral List</h1>

        <div class="filters">
            <select id="sourceFilter">
                <option value="all">All Sources</option>
                <option value="teacher">Teacher</option>
                <option value="prefect">Prefect</option>
            </select>

            <select id="statusFilter">
                <option value="all">All Statuses</option>
                <option value="pending">Pending</option>
                <option value="in-progress">In Progress</option>
                <option value="resolved">Resolved</option>
            </select>

            <select id="urgencyFilter">
                <option value="all">All Urgencies</option>
                <option value="high">High</option>
                <option value="medium">Medium</option>
                <option value="low">Low</option>
            </select>
        </div>

        <div class="referral-list">
            <!-- Referral items will be dynamically inserted here -->
        </div>
    </div>

    <!-- Modal for viewing details -->
    <div id="detailsModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Referral Details</h2>
            <p><strong>Student:</strong> <span id="detailStudent"></span></p>
            <p><strong>Source:</strong> <span id="detailSource"></span></p>
            <p><strong>Reason:</strong> <span id="detailReason"></span></p>
            <p><strong>Status:</strong> <span id="detailStatus"></span></p>
            <button id="scheduleCounseling" style="display:none;">Schedule Counseling</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const referralList = document.querySelector('.referral-list');
            const detailsModal = document.getElementById('detailsModal');
            const closeModal = document.querySelector('.close');
            const detailStudent = document.getElementById('detailStudent');
            const detailSource = document.getElementById('detailSource');
            const detailReason = document.getElementById('detailReason');
            const detailStatus = document.getElementById('detailStatus');
            const scheduleCounselingBtn = document.getElementById('scheduleCounseling');
            const statusFilter = document.getElementById('statusFilter');

            const referrals = [
                { student: 'John Doe', source: 'teacher', reason: 'Disruptive behavior', status: 'pending', urgency: 'high' },
                { student: 'Jane Smith', source: 'prefect', reason: 'Late to class', status: 'in-progress', urgency: 'medium' },
                { student: 'Alice Johnson', source: 'teacher', reason: 'Bullying', status: 'resolved', urgency: 'low' }
            ];

            function renderReferrals(filteredReferrals) {
                referralList.innerHTML = '';
                filteredReferrals.forEach(referral => {
                    const item = document.createElement('div');
                    item.className = `referral-item ${referral.status.replace(' ', '-')}`;
                    item.innerHTML = `
                        <p><strong>Student:</strong> ${referral.student}</p>
                        <p><strong>Source:</strong> ${referral.source}</p>
                        <p><strong>Urgency:</strong> ${referral.urgency}</p>
                        <p><strong>Status:</strong> ${referral.status}</p>
                    `;
                    item.addEventListener('click', () => openModal(referral));
                    referralList.appendChild(item);
                });
            }

            function openModal(referral) {
                detailStudent.textContent = referral.student;
                detailSource.textContent = referral.source;
                detailReason.textContent = referral.reason;
                detailStatus.textContent = referral.status;

                // Show Schedule Counseling button only for Pending status
                scheduleCounselingBtn.style.display = referral.status === 'pending' ? 'inline-block' : 'none';

                detailsModal.style.display = 'block';
            }

            closeModal.addEventListener('click', function() {
                detailsModal.style.display = 'none';
            });

            window.onclick = function(event) {
                if (event.target === detailsModal) {
                    detailsModal.style.display = 'none';
                }
            };

            statusFilter.addEventListener('change', function() {
                const selectedStatus = statusFilter.value;
                let filteredReferrals;

                if (selectedStatus === 'all') {
                    filteredReferrals = referrals;
                } else {
                    filteredReferrals = referrals.filter(referral => referral.status === selectedStatus);
                }

                renderReferrals(filteredReferrals);
            });

            // Initial render of all referrals
            renderReferrals(referrals);
        });


        
    </script>
</body>
</html>


