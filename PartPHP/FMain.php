<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guidance</title>
        <link rel="stylesheet" href="../CSS/MStyle.css"> <!--Main Style Sheet for the Website-->
        <link rel="stylesheet" href="../CSS/BStyle.css"> <!--Button Style Sheet for the Website-->
        <link rel="stylesheet" href="../CSS/FStyle.css"> <!--Footer Style Sheet for the Website-->
        <link rel="stylesheet" href="../CSS/RStyle.css"> <!--Report Style Sheet for the Website-->
        <?php include '../Functionphp/TicketMaker.php'?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.12/htmx.min.js" integrity="sha512-JvpjarJlOl4sW26MnEb3IdSAcGdeTeOaAlu2gUZtfFrRgnChdzELOZKl0mN6ZvI0X+xiX5UMvxjK2Rx2z/fliw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
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
                    <h2 class="CurrentPage">Report</h2>
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

    </head>

    <body class="body">
        
        <div class="Bg">
            <img src="../IMG/au-malabon-rizal.jpg" alt="Background Image">
        </div>

        <div class="container">
            <h1 class="h1">Reporting System</h1>
            <p class="instruction">Please Fill Out This Form Carefully</p>
            
            <form method="post" enctype="multipart/form-data">
                <input type="text" class="report-textbox" name="report">
                <div class="Office">
                    <h3>Please select the office where your report might be concerned</h2>
                        <input type="radio" name="office" id="OSA" value="OSA">
                        <label for="OSA">Office of Student Affairs</label><br>
                        <input type="radio" name="office" id="GO" value="GO">
                        <label for="GO">Guidance Office</label><br>
                        <input type="radio" name="office" id="Pr" value="Pr">
                        <label for="Pr">Prefect</label><br>
                </div>
                <div class="Nature">
                    <h3>Please select the quality of the service</h2>
                        <input type="radio" name="Quality" id="One" value="1">
                        <label for="One">1</label><br>
                        <input type="radio" name="Quality" id="Two" value="2">
                        <label for="Two">2</label><br>
                        <input type="radio" name="Quality" id="Three" value="3">
                        <label for="Three">3</label><br>
                        <input type="radio" name="Quality" id="Four" value="4">
                        <label for="Four">4</label><br>
                        <input type="radio" name="Quality" id="Five" value="5">
                        <label for="Five">5</label><br>
                    </div>
                <button type="submit" class="submit-button" name="submit">Submit</button>
            </form>
        </div>
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
        <script src="../Functionphp/FileName.js"></script>
    </body>
</html>