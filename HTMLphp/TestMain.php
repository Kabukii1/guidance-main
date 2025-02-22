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
                    <li><a href="Report.php"><button>Report</button></a></li>
                    <li><a href="CC.php"><button>Current Cases</button></a></li>
                    <li><a href="Feedback.php"><button>Feedback</button></a></li>
                </ul>
            </div>
        </main>

    </head>

    <body>

        <div class="Bg">
            <img src="../IMG/au-malabon-rizal.jpg" alt="Background Image">
        </div>

        <article class="AUart">
            <div class="AUcont">
            <h2 class="AUText">Guidance Office of AU JRC</h2>
            <h3>Tests for Identifying Possible Neurological, Psychological, or Pathological Problems</h3>
            <div class="TestsBox">
                <button class="test-btn">Depression Test</button>
                <div class="test-content">
                    <p>This test helps assess symptoms of depression and provides guidance on possible next steps.</p>
                    <a href="https://www.example.com/depression-test" target="_blank">Take the test</a>
                </div>

                <button class="test-btn">Anxiety Test</button>
                <div class="test-content">
                    <p>This test evaluates levels of anxiety and helps determine if professional help may be needed.</p>
                    <a href="https://www.example.com/anxiety-test" target="_blank">Take the test</a>
                </div>

                <button class="test-btn">ADHD Screening</button>
                <div class="test-content">
                    <p>A quick screening tool to assess symptoms of ADHD in both children and adults.</p>
                    <a href="https://www.example.com/adhd-test" target="_blank">Take the test</a>
                </div>
            </div>
        </article>

        <main class="Footer">
            <div class="FContainer">
                <div class="left-section">
                    <h3 class="About">About Us</h3>
                    <p class="AboutTxt">This website is designed to provide guidance and support to students in Arellano University Jose Rizal Campus </p>
                </div>
                <div class="middle-section">
                    <a id="logolink" href="https://www.arellano.edu.ph/" class="AUOS">
                        <img src="../CSS/LogoAU.png" alt="Logo" class="AU">
                    </a>
                </div>
                <div class="right-section">
                    <h3 class="Contact">Contact Us</h3>
                    <p class="Pcontact">Contact information goes here</p>
                </div>
            </div>
        </main>
        <script src="../Lib/jquery-3.7.1.js"></script> 
        <script src="../Functionphp/Redirect.js"></script>
        <!-- jQuery for Toggle Effect -->
        <script>
            $(document).ready(function() {
                $(".test-content").hide(); // Hide all test descriptions initially
                $(".test-btn").click(function() {
                    $(this).next(".test-content").slideToggle(); // Toggle corresponding content
                });
            });
        </script>
    </body>
</html>