<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guidance</title>
        <link rel="stylesheet" href="../CSS/MStyle.css">
        <link rel="stylesheet" href="../CSS/BStyle.css">
        <link rel="stylesheet" href="../CSS/FStyle.css">
        <link rel="stylesheet" href="../CSS/RStyle.css">
        <link rel="stylesheet" href="../CSS/TIStyle.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.12/htmx.min.js"></script>
        <script src="../Functionphp/TicketHandling.js"></script>

        <style>
            /* Mas maliit na textboxes */
            #searchForm input,
            #searchForm select {
                width: 120px;
                height: 22px;
                font-size: 12px;
                padding: 2px;
            }
        </style>
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
                <p>Student No: <?php echo $student_no; ?></p>
                <p>LRN: <?php echo $lrn; ?></p>
            </div>
            <div class="button-container">
    <ul class="button-list">
    <li><a href="HOME.php"><button>HOME</button></a></li>
                    <li><a href="news.php"><button>News & Resources</button></a></li>
                    <li><a href="resources.php"><button>Student Services</button></a></li>
                    <li><a href="Report.php"><button>Report</button></a></li>
                    <li><a href="CC.php"><button>Current Cases</button></a></li>
                    <li><a href="Feedback.php"><button>Feedback</button></a></li>
    </ul>
</div>

        </main>

        <div class="Bg">
            <img src="../IMG/au-malabon-rizal.jpg" alt="Background Image">
        </div>

        <article class="AUart">
            <div class="AUcont-CC">
                <h2 class="AUText">Current Cases</h2>
            </div>

            <h3>Search and Filter Tickets</h3>
            <form id="searchForm">
                <label for="ticketNumber">Ticket Number:</label>
                <input type="text" id="ticketNumber" placeholder="Enter Ticket Number" autocomplete="off">
                
                <label for="natureSearch">Nature:</label>
                <select id="natureSearch">
                    <option value="">All</option>
                    <option value="Bullying">Bullying</option>
                    <option value="Harassment">Harassment</option>
                    <option value="Discrimination">Discrimination</option>
                    <option value="Mental Health Concerns">Mental Health Concerns</option>
                    <option value="Academic Struggles">Academic Struggles</option>
                    <option value="Relationship Issues">Relationship Issues</option>
                </select>
                
                <label for="officeSearch">Office:</label>
                <select id="officeSearch">
                    <option value="">All</option>
                    <option value="OSA">Office of Student Affairs</option>
                    <option value="GO">Guidance Office</option>
                    <option value="Pr">Prefect</option>
                </select>
                
                <label for="incidentDateSearch">Incident Date:</label>
                <input type="date" id="incidentDateSearch">
            </form>

            <div id="Ticket-Container"></div>
        </article>

        <main class="Footer">
    <div class="FContainer" style="display: flex; flex-direction: column; align-items: center; text-align: center; padding: 15px;">
        <div class="middle-section">
            <a id="logolink" href="https://www.arellano.edu.ph/" class="AUOS">
                <img src="../CSS/LogoAU.png" alt="Logo" class="AU" 
                     style="width: 120px; height: auto; display: block; margin: 0 auto;">
            </a>
        </div>
        <div class="contact-section" 
             style="font-size: 14px; margin-top: 10px; font-weight: normal; color: #FFFFFF;">
            <p>
                hs.joserizal@arellano.edu.ph &nbsp; | &nbsp;
                <a href="https://www.facebook.com/aujoserizal" target="_blank" 
                   style="color: #FFFFFF; text-decoration: none;">Facebook</a> &nbsp; | &nbsp;
                8-921-2744 (Principal's Office) &nbsp; | &nbsp;
                8-281-0025 (Registrar's Office)
            </p>
        </div>
    </div>
</main>


        <script src="../Lib/jquery-3.7.1.js"></script> 
        <script src="../Functionphp/Redirect.js"></script>
    </body>
</html>
