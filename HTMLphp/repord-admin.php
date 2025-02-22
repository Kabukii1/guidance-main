<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Report System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        :root {
            --sidebar-width: 250px;
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --background-dark: #333;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background: #f5f6fa;
        }

        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--background-dark);
            color: white;
            padding-top: 20px;
            position: fixed;
            text-align: center;
        }

        .sidebar img {
            display: block;
            margin: 15px auto;
            width: 120px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 15px;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px 20px;
            transition: 0.3s;
            text-align: left;
        }

        .sidebar ul li a i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .sidebar ul li a:hover {
            background: #ffcc00;
            color: black;
            border-radius: 5px;
        }

        .log-out-btn {
            background: #ff4444;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
        }

        .log-out-btn:hover {
            background: #cc0000;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 30px;
            width: calc(100% - var(--sidebar-width));
        }

        .report-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .form-header {
            border-bottom: 2px solid #eee;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }

        .form-header h1 {
            margin: 0;
            font-size: 24px;
            color: var(--primary-color);
        }

        .form-header p {
            margin: 5px 0 0;
            color: #666;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .form-section {
            margin-bottom: 25px;
        }

        .form-section label {
            display: block;
            margin-bottom: 8px;
            color: var(--primary-color);
            font-weight: 600;
        }

        .form-input {
            width: 100%;
            padding: 12px;
            border: 2px solid #eee;
            border-radius: 8px;
            transition: border-color 0.3s ease;
        }

        .form-input:focus {
            border-color: var(--secondary-color);
            outline: none;
        }

        .counselor-dropdown {
            width: 100%;
            padding: 12px;
            border: 2px solid #eee;
            border-radius: 8px;
            background: white;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        .counselor-dropdown:focus {
            border-color: var(--secondary-color);
            outline: none;
        }

        .counselor-details {
            display: none;
            margin-top: 15px;
            padding: 15px;
            background: #f8f9ff;
            border-radius: 8px;
            border: 2px solid #eee;
        }

        .counselor-details.active {
            display: block;
        }

        .counselor-info {
            display: flex;
            align-items: center;
        }

        .counselor-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
        }

        .counselor-info h3 {
            margin: 0 0 5px 0;
            color: var(--primary-color);
        }

        .counselor-info p {
            margin: 5px 0;
            font-size: 0.9em;
            color: #666;
        }

        .expertise-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .tag {
            background: #eaf2ff;
            color: var(--secondary-color);
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 0.8em;
            font-weight: 500;
        }

        .file-upload {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .file-upload input[type="file"] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        .custom-file-upload {
            border: 2px dashed #ddd;
            padding: 15px 30px;
            border-radius: 8px;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        .custom-file-upload:hover {
            border-color: var(--secondary-color);
        }

        .submit-btn {
            background: var(--secondary-color);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .submit-btn:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
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
        </ul>
        <a href="/GuidanceSystem-main/updated/user-login.php">
            <button class="log-out-btn">Log Out</button>
        </a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="report-container">
            <div class="form-header">
                <h1>Create New Case Report</h1>
                <p>Complete all required fields to submit a new case</p>
            </div>

            <div class="form-grid">
                <!-- Left Column -->
                <div class="form-column">
                    <div class="form-section">
                        <label>Report Date</label>
                        <input type="date" class="form-input" required>
                    </div>

                    <div class="form-section">
                        <label>Nature of Report</label>
                        <select class="form-input" required>
                            <option value="Bullying">Bullying</option>
                            <option value="Harassment">Harassment</option>
                            <option value="Discrimination">Discrimination</option>
                            <option value="Mental Health">Mental Health</option>
                            <option value="Academic">Academic</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="form-section">
                        <label>Case Description</label>
                        <textarea class="form-input" rows="4" required></textarea>
                    </div>

                    <div class="form-section">
                        <label>Attach Evidence (Optional)</label>
                        <div class="file-upload">
                            <input type="file" id="actual-file">
                            <label for="actual-file" class="custom-file-upload">
                                <i class="fas fa-cloud-upload-alt"></i> Choose File
                            </label>
                            <span id="file-name"></span>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="form-column">
                    <div class="form-section">
                        <label>Assign Counselor</label>
                        <select class="counselor-dropdown" id="counselor-select">
                            <option value="">Select a Counselor</option>
                            <option value="counselor1">Dr. Sarah Johnson</option>
                            <option value="counselor2">Mr. Michael Chen</option>
                            <option value="counselor3">Ms. Angela Martin</option>
                        </select>

                        <!-- Counselor Details -->
                        <div class="counselor-details" id="counselor1-details">
                            <div class="counselor-info">
                                <img src="counselor1.jpg" alt="Counselor" class="counselor-image">
                                <div>
                                    <h3>Dr. Sarah Johnson</h3>
                                    <p>Licensed Clinical Psychologist</p>
                                    <div class="expertise-tags">
                                        <span class="tag">Mental Health</span>
                                        <span class="tag">Crisis Management</span>
                                        <span class="tag">Trauma Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="counselor-details" id="counselor2-details">
                            <div class="counselor-info">
                                <img src="counselor2.jpg" alt="Counselor" class="counselor-image">
                                <div>
                                    <h3>Mr. Michael Chen</h3>
                                    <p>Student Welfare Specialist</p>
                                    <div class="expertise-tags">
                                        <span class="tag">Bullying Prevention</span>
                                        <span class="tag">Conflict Resolution</span>
                                        <span class="tag">Peer Mediation</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="counselor-details" id="counselor3-details">
                            <div class="counselor-info">
                                <img src="counselor3.jpg" alt="Counselor" class="counselor-image">
                                <div>
                                    <h3>Ms. Angela Martin</h3>
                                    <p>Academic Support Coordinator</p>
                                    <div class="expertise-tags">
                                        <span class="tag">Academic Planning</span>
                                        <span class="tag">Study Skills</span>
                                        <span class="tag">Career Guidance</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="submit-btn">Submit Case Report</button>
        </div>
    </div>

    <script>
        // Counselor Dropdown Functionality
        const counselorSelect = document.getElementById('counselor-select');
        const counselorDetails = document.querySelectorAll('.counselor-details');

        counselorSelect.addEventListener('change', function() {
            counselorDetails.forEach(detail => detail.classList.remove('active'));
            if (this.value) {
                document.getElementById(`${this.value}-details`).classList.add('active');
            }
        });

        // File Upload Display
        document.getElementById('actual-file').addEventListener('change', function(e) {
            document.getElementById('file-name').textContent = e.target.files[0].name;
        });
    </script>
</body>
</html>
