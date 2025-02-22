<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guidance</title>
    <link rel="stylesheet" href="../CSS/MStyle.css"> 
    <link rel="stylesheet" href="../CSS/BStyle.css"> 
    <link rel="stylesheet" href="../CSS/FStyle.css"> 
    <link rel="stylesheet" href="../CSS/RStyle.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.12/htmx.min.js"></script>
</head>

<body>

    <header>
        <div class="LContainer">
            <a id="logoLink" href="../HTMLphp/Redirect.html" onclick="return false;">
                <img src="../CSS/2.png" alt="Logo" class="Logo">
            </a>
            <div class="LText">
                <h4 class="LsText">Guidance</h4>
                <p class="pLText">AU Jose Rizal Campus</p>
            </div>
            <div>
                <h2 class="CurrentPage">Main</h2>
            </div>
        </div>
    </header>

    <?php include '../Functionphp/display_info.php'; ?>

    <main class="CBody">
        <div class="Info">
            <p>Student No: <?php echo $student_no ?? 'N/A'; ?></p>
            <p>LRN: <?php echo $lrn ?? 'N/A'; ?></p>
        </div>

        <div class="button-container">
            <ul class="button-list">
                <li><a href="HOME.php"><button>HOME</button></a></li>
                <li><a href="news.php"><button>News & Resources</button></a></li>
                <li><a href="resources.php"><button>Student Services</button></a></li>
                <li><a href="Report.php"><button>My Report</button></a></li>
            </ul>
        </div>
    </main>

    <div class="Bg">
        <img src="../IMG/au-malabon-rizal.jpg" alt="Background Image">
    </div>

    <article class="AUart">
        <div class="AUcont">
            <div style="display: flex; align-items: center; background: rgb(48, 59, 178); width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <img src="../CSS/LogoAU.png" alt="Logo" style="width: 120px; height: auto; margin-right: 15px;">
                <h2 style="color: white; margin: 0; font-size: 3.5em; font-family: 'Times New Roman', serif; font-weight: bold; letter-spacing: 1px;">
                    Guidance Office of AU JRC
                </h2>

                
            </div>

            <div class="container">
    <div class="content">
        <h1>Student Support & Development</h1>
        <div class="divider"></div>
        <p>The Guidance Office and Student Services play a vital role in supporting students’ academic, personal, and emotional well-being. Through a variety of programs and counseling services, the office ensures that students receive the necessary guidance to navigate challenges and make informed decisions about their future. Using modern technology, students can access resources, seek professional advice, and engage in meaningful conversations with counselors who are committed to their growth and success.</p>

        <!-- Add Image Here -->
        <img src="../Pics/shsguidance.jpeg" alt="SHS Guidance" class="support-image">
        <p>To further enhance accessibility, the Guidance System serves as a centralized platform where students can easily find important information, book counseling appointments, and access self-help resources anytime, anywhere. The website provides a secure and convenient way for students to connect with professionals, ensuring that support is always within reach, even beyond school hours.
    </div>



    <div class="sidebar">
    <h2>Excellence in Action</h2>
    <p class="services-description">
    School clubs play a crucial role in providing a space for students to explore their interests, build relationships, and gain experience that prepares them for the future. By aligning with the mission of the Guidance Office, they create a holistic support system that prepares students for personal success.
    </p>

    <div class="service-box" onclick="toggleDropdown('stem-desc', this)">
        <a href="https://www.facebook.com/AUJRCSHSPrideOfSTEM" target="_blank">
            <img src="../Pics/stem.jpeg" alt="Pride of STEM">
        </a>
        <p>Pride of STEM</p>
        <span class="dropdown-icon">▼</span>
    </div>
    <div class="dropdown-content" id="stem-desc">
        A student organization dedicated to excellence in Science, Technology, Engineering, and Mathematics.
    </div>

    <div class="service-box" onclick="toggleDropdown('academes-desc', this)">
        <a href="https://www.facebook.com/AUJRCSHSTheAcademes" target="_blank">
            <img src="../Pics/gas.jpeg" alt="Gas">
        </a>
        <p>The Academes</p>
        <span class="dropdown-icon">▼</span>
    </div>
    <div class="dropdown-content" id="academes-desc">
        The Academes group fosters academic excellence and lifelong learning among students.
    </div>

    <div class="service-box" onclick="toggleDropdown('humss-desc', this)">
        <a href="https://www.facebook.com/AUJRCSHSHUMSSSociety" target="_blank">
            <img src="../Pics/humss.jpeg" alt="Humss Society">
        </a>
        <p>Humss Society</p>
        <span class="dropdown-icon">▼</span>
    </div>
    <div class="dropdown-content" id="humss-desc">
        A community that encourages discussions on humanities, social sciences, and leadership development.
    </div>

    <div class="service-box" onclick="toggleDropdown('usts-desc', this)">
        <a href="https://www.facebook.com/AUJRCSHSUnifiedSocietyofTechVocStudents" target="_blank">
            <img src="../Pics/usets.jpeg" alt="Unified Society of Technical Students">
        </a>
        <p>Unified Society of Technical Students</p>
        <span class="dropdown-icon">▼</span>
    </div>
    <div class="dropdown-content" id="usts-desc">
        A group for students passionate about technical education, innovation, and practical applications.
    </div>

    <div class="service-box" onclick="toggleDropdown('syeb-desc', this)">
        <a href="https://www.facebook.com/SYEBM.JRC" target="_blank">
            <img src="../Pics/abm.jpeg" alt="Society of Young Entrepreneurship and Businessmen">
        </a>
        <p>Society of Young Entrepreneurship and Businessmen</p>
        <span class="dropdown-icon">▼</span>
    </div>
    <div class="dropdown-content" id="syeb-desc">
        A society focused on business strategies, entrepreneurship, and leadership skills development.
    </div>
</div>

<script>
        function toggleDropdown(id, element) {
            let dropdown = document.getElementById(id);
            let allDropdowns = document.querySelectorAll(".dropdown-content");
            let allBoxes = document.querySelectorAll(".service-box");

            allDropdowns.forEach(content => {
                if (content.id !== id) content.style.display = "none";
            });

            allBoxes.forEach(box => {
                if (box !== element) box.classList.remove("active");
            });

            if (dropdown.style.display === "block") {
                dropdown.style.display = "none";
                element.classList.remove("active");
            } else {
                dropdown.style.display = "block";
                element.classList.add("active");
            }
        }
    </script>

</div> <!-- Sarado na ang .container -->
<!-- Bagong Section - Labas na sa flexbox -->
<div class="new-section">
<div class="guidance-header">
    <h2>Guidance Services</h2>
    <div class="accordion-container">
        <button class="accordion">ORIENTATION PROGRAMS</button>
        <div class="panel">
            <p>These programs help new students adjust to the school environment by providing essential information about academic policies, available support services, and student expectations. Orientation sessions aim to foster a sense of belonging and equip students with the knowledge they need to succeed.</p>
        </div>

        <button class="accordion">INFORMATION SERVICES</button>
        <div class="panel">
            <p>This service provides students with vital information about mental health, academic resources, and personal development opportunities. It includes brochures, seminars, and online materials designed to help students make informed decisions about their well-being and academic journey.</p>
        </div>

        <button class="accordion">REFERRAL PROCESS</button>
        <div class="panel">
            <p>The referral process ensures that students who need additional support are connected to the right professionals or organizations. Whether for academic concerns, personal challenges, or mental health issues, this service helps guide students toward appropriate interventions.</p>
        </div>

        <button class="accordion">REPORTING PROCESS</button>
        <div class="panel">
            <p>This process allows students, faculty, and staff to report concerns or incidents that require attention from the guidance office. It promotes a safe and supportive school environment by addressing issues such as bullying, harassment, or other personal difficulties.</p>
        </div>

        <button class="accordion">COUNSELING</button>
        <div class="panel">
            <p>Counseling services offer students a confidential space to discuss personal, academic, or emotional challenges with a trained professional. These sessions, available individually or in groups, aim to help students develop coping strategies, improve self-awareness, and enhance their overall well-being.</p>
        </div>

    </div>

    <script src="script.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var acc = document.querySelectorAll(".accordion");

        acc.forEach(button => {
            button.addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        });
    });
</script>
</body>
</html>
    </section>
</div>
       </div> <!-- Sarado na ang .container -->
     <!-- Bagong Section - Labas na sa flexbox -->
     <div class="new-section2">
    <div class="header-container">
        <!-- Radio buttons inside the section -->
        <input type="radio" name="background" id="bg1" checked>
        <input type="radio" name="background" id="bg2">
        <input type="radio" name="background" id="bg3">

        <!-- Background section -->
        <section class="header-section">
    <div class="header-content">
        <h1>Guidance Events</h1>
       
        <div class="new-container">
            
        <!-- Button to redirect to another page -->
        <a href="https://docs.google.com/document/d/1bISiIHg3NOxKQHJHfEsemESDSKGos1KQ/edit" class="btn-redirect" target="_blank">Event Gallery</a>

    </div>

    <!-- Left and Right Buttons -->
    <label for="bg1" class="btn-left">&#10094;</label>
    <label for="bg2" class="btn-right">&#10095;</label>
</section>

<div class="new-content">
    <h5>WHAT DO WE DO<h5>
    <div class="divider"></div>
    <p>The Guidance Office aims to provide students with the tools, knowledge, and support they need to succeed academically, socially, and emotionally. They continually work to create programs that promote personal growth, well-being, and community involvement.
    </div>
</div>

<h2 class="section-title">Meet your Counselors & Staff</h2>
<div class="divider"></div>
    <div class="counselor-container">
        <!-- Profile 1 -->
        <div class="counselor">
            <img src="../Pics/hello.jpeg">
            <h3>Ms. Ludivina A. Alonzo, RGC, RPm<h3>
            <strong>Supervising Guidance Counselor</strong>
            <p>EMAIL: <a href="mailto:example@example.com">example@example.com</a></p>
        </div>

        <!-- Profile 2 -->
        <div class="counselor">   
            <img src="../Pics/hi.jpeg">
            <h3> Ms.Alyssa Marie Jumaquio, RPm <h3>
            <strong>Elementary Guidance Assistant </strong>
            <p>EMAIL: <a href="mailto:smariamonte3355@mc-knoller.edu.ph">example@example.com</a></p>
        </div>

        <!-- Profile 3 -->
        <div class="counselor">
            <img src="../Pics/ren.jpeg">
            <h3>Ms. Nerlyn R. Sister, RPm <h3>
            <strong>Junior High School Guidance Assistant</strong>
            <p>EMAIL: <a href="mailto:elugo0658@mc-knoller.edu.ph">example@example.com</a></p>
        </div>

        <!-- Profile 4 -->
        <div class="counselor">
            <img src="../Pics/nam.jpeg">
            <h3>Mr. John Jhoboy Rosillo, RPm<h3>
            <strong>Senior High School Guidance Assistant </strong>
            <p>EMAIL: <a href="mailto:jdreyes@mc.edu.ph">example@example.com</a></p>
            </div>
            </div> <!-- This is an extra closing div -->


        <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 40px;
            color: #333;
            
        }
        .container {/* bodysa pinakataas*/
            display: flex;
            flex-wrap: wrap; /* Para bumaba ang susunod na section */
            max-width: 1000px;
            margin: auto;
            gap: 20px;
            border: none;
            box-shadow: none;   
            color: black;
            font-size:20px;
        }
        .content {
            flex: 2;
        }
        .sidebar {
            flex: 1;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            
        }
        h1 {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: #1a3c80;
        }
        .divider {
            width: 50px;
            height: 3px;
            background: #1a3c80;
            margin: 10px auto;
            
        }
        .support-image {
            display: block;
            max-width: 100%;
            height: auto;
            margin: 20px auto;
            border-radius: 10px;
        }
        h3 {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: #1a3c80;
        }

        .sidebar h2 {
            font-size: 20px;
            color: #1a3c80;
        }
        .sidebar p {
            margin: 10px 0;
        color:  black;
            
        }
        .icon {
            margin-right: 10px;
            margin-left:50px;
        }
        .service-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            text-decoration: none;
            color: #333;
            background: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        

        }

        .service-box:hover {
            transform: scale(1.05);
            box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.2);
            
            
            
        }

        .service-box img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .service-box p {
            flex-grow: 1;
            font-size: 16px;
            font-weight: bold;
            gap: 20px;
            margin-right:20px;
            color: black;
            
        }

        .dropdown-icon {
            font-size: 16px;
            color: black;
            
            
        }

        .dropdown-content {
            display: none;
            background: #f4f4f4;
            padding: 10px;
            margin-top: -5px;
            border-radius: 5px;
            font-size: 17px;
            color: #444;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .new-section {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-top: 50px; /* Para may space mula sa itaas */
        }
        .guidance-header {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: navy gray; /* Para kita ang text */
            background-position: center;
            padding: 20px; /* Para may space sa loob */
            display: inline-block; /* Para kasya lang sa text */
            position: relative;
            top:-120px;
            right: 170px;
        
            
        }

        .guidance-section {
            padding-top: 0px !important; /* Bawasan ang space sa taas */
            margin-top: -10px !important; /* Ilapit ang section sa header */
        }

        .offered-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 columns */
            gap: 20px;
            text-align: center;
            padding: 20px;
        }

        .offered-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .offered-box:hover {
            transform: translateY(-5px);
        }

        .icon {
            font-size: 40px;
            display: block;
            margin-bottom: 10px;
        }

        h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        /*sa guidance services */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            
            
        }

        .accordion-container {
            width: 50%;
            margin: auto;
            background: transparent !important;
            max-width: 100%; /* Remove any max width restrictions */
            padding: 0; /* Remove extra padding */


        }
        .accordion-container .panel p {
            color: black;
            font-size: 16px; /* Adjust font size if needed */
            line-height: 1.6; /* Add line height for readability */

        }
        .accordion {
            background: transparent !important;
            border: none;
            cursor: pointer;
            padding: 10px;
            width: 100%;
            text-align: left;
            font-size: 20px;
            color: #4a5568;
            display: flex;
            align-items: center;
            border-bottom: none; /* Remove bottom border */
            outline: none;
            transition: background 0.3s ease;
            font-weight:bold;
        }

        .accordion:hover {
            background: transparent !important;
            
        }

        .accordion::before {
            content: '\25B6'; /* Right arrow */
            font-size: 12px;
            margin-right: 10px;
            transition: transform 0.3s ease;
            
        }

        .active::before {
            transform: rotate(90deg); /* Rotate arrow when active */
            
        }

        .panel { /* desc ng services */
            display: none;
            padding: 10px;
            background: transparent;
            border: none; /* Removed the left border */
            margin-bottom: 5px;
            text-align: left; /* Align text to the left */
            font-weight: normal;
            width: 100%;
            font:18px;

            
        }
        /* events */
        .new-section2 {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-top: 50px;
        }

        /* Header section */
        .header-section {
            background-image: url('../Pics/bgservice.jpg'); /* Default background */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border: 5px solid;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            height: 150px; 
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 20px;
            position: relative; /* Added position relative to the section for positioning buttons */
            margin-top: -150px;
        }
        /* Hide radio buttons */
        input[type="radio"] {
            display: none;
        }

        /* Button styles */
        label {
            position: absolute;
            top: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            font-size: 24px;
            padding: 10px;
            cursor: pointer;
            z-index: 10;
            transform: translateY(-50%);
        }

        label:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .btn-left {
            left: 20px;
        }

        .btn-right {
            right: 20px;
        }

        /* Change background images when the radio buttons are checked */
        #bg1:checked ~ .header-section {
            background-image: url('../Pics/bgservice.jpeg');
        }

        #bg2:checked ~ .header-section {
            background-image: url('../Pics/joserizal.jpeg');
        }

        #bg3:checked ~ .header-section {
            background-image: url('../Pics/bgservice3.jpg');
        }

        /* Style the header content */
        .header-content {
            max-width: 800px;
            
        }

        .header-section h1 {
            font-size: 36px;
            margin-bottom: 15px;
            color: white;
        }

        .header-section p {
            font-size: 18px;
            margin-top: -20px;
        }
        /* Style for the redirect button */
        .btn-redirect {
            display: inline-block;
            background-color: gray;/* Green background */
            color: white;
            padding: 5px 15px;
            font-size: 16px;
            text-decoration: none; /* Remove underline */
            border-radius: 5px;
            margin-top: -10px; /* Space between the paragraph and the button */
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .btn-redirect:hover {
            background-color: #1a3c80; /* Darker green when hovered */
        }

        /* Style for the header */
        .new-content h5 {
            font-size: 28px;
            font-weight: bold; /* Make the text bold */
            color: #1a3c80; 
            text-align: center; /* Center align the header */
            margin-bottom: 15px; /* Space below the header */   
        }

        /* Style for the divider */
        .new-content .divider {
            width: 50px;
                    height: 3px;
                    background: #1a3c80;
                    margin: 20px auto;
                    top:-100px;
                    
        }

        /* Style for the new paragraph */
        .new-content p {
            font-size:20px; /*Set the font size for the paragraph */
            line-height: 1.6; /* Line height for better readability */
            color: black;
            text-align: center; /* Center the paragraph text */
            padding: 0 20px; /* Add some padding to the sides */
            font-family: Arial, sans-serif; /* Set the font family */
            font-weight: normal; /* Ensure paragraph text is not bold */
            
        }

        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: none;
            
        }

        /* Section Title */
        .section-title {
            font-size: 28px;
            font-weight: bold;
            color: #1a3c80;
            margin-bottom: 20px;
        }

        /* Counselor Container */
        .counselor-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px;
            max-width: 1100px; /* Ensure enough space for 3 cards */
            margin: auto;
            border: 5px 


        }

        /* Individual Counselor Card */
        .counselor {
            background-color: white;
            padding: 15px;
            width: calc(33.33% - 40px); /* Exactly 3 per row */
            border-radius: 8px;
            text-align: center;
            min-width: 280px; /* Prevents shrinking too much */
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        /* Counselor Images */
        .counselor img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: none;
        }

        /* Name and Role */
        .counselor h3 {
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }

        .counselor strong {
            display: block;
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }

        /* Email Links */
        .counselor a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .counselor a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .counselor {
                width: calc(50% - 40px); /* 2 per row on tablets */
            }
        }

        @media (max-width: 600px) {
            .counselor {
                width: 100%; /* 1 per row on small screens */
            }
        }
    </style>    
    </article>
    <main class="Footer">
            <div class="FContainer" style="display: flex; flex-direction: column; align-items: center; text-align: center; padding: 1px;">
                <div class="middle-section">
                    <a id="logolink" href="https://www.arellano.edu.ph/" class="AUOS">
                        <img src="../CSS/LogoAU.png" alt="Logo" class="AU" 
                            style="width: 100px; height: auto; display: block; margin: 0 auto;">
                    </a>
                </div>
                <div class="contact-section" style="font-size: 14px; margin-top: 8px; font-weight: normal; color: #FFFFFF;">
                    <p>
                        <i class="fa-solid fa-location-dot" style="font-size: 16px;"></i> Concepcion, Malabon City &nbsp; | &nbsp;
                        <i class="fa-brands fa-facebook" style="font-size: 16px;"></i> 
                        <a href="https://www.facebook.com/aujoserizal" target="_blank" style="color: #FFFFFF; text-decoration: none;">Facebook</a> &nbsp; | &nbsp;
                        <i class="fa-solid fa-phone" style="font-size: 16px;"></i> 8-921-2744 (Principal's Office) &nbsp; | &nbsp;
                        <i class="fa-solid fa-envelope" style="font-size: 16px;"></i> hs.joserizal@arellano.edu.ph
                    </p>
                </div>
            </div>
        </main>

        <!-- ✅ Include Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <script src="../Lib/jquery-3.7.1.js"></script> 
        <script src="../Functionphp/Redirect.js"></script>
    </body>
</html>