<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guidance</title>
        <link rel="stylesheet" href="../CSS/MStyle.css"> <!--Main Style Sheet for the Website-->
        <link rel="stylesheet" href="../CSS/ALStyle.css"> <!--Admin List Style Sheet for the Website-->
        <link rel="stylesheet" href="../CSS/BStyle.css"> <!--Button Style Sheet for the Website-->
        <link rel="stylesheet" href="../CSS/FStyle.css"> <!--Footer Style Sheet for the Website-->
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
                    <p>Student Admin: <?php echo $student_no; ?></p>
                </div>
                <div class="button-container">
                    <ul class="button-list">
                        <li><a href="Report.php"><button>Report</button></a></li>
                        <li><a href="CC.php"><button>Current Cases</button></a></li>
                        <li><a href="Feedback.php"><button>Feedback</button></a></li>
                        <li><a href="Testing.php"><button>Admin Search</button></a></li>
                    </ul>
                </div>
            </main>
    </head>

    <body>
        <article class="Heading">
            <div class="HContainer">
                <h1>Admin Search</h1>
            </div>
            <div class="SContainer">
                <h4>Search</h4>
                <form method="post">
                    <input type="text" class="Search" name="Search" autocomplete="off">
                    <input type="submit" class="SearchButton" name="SearchButton" value="Search" id="SBtn">
                    <label for="SBtn" class="CSBtn">Search</label>
                </form>
            </div>
            <div>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente reprehenderit fuga debitis totam voluptates ipsa! Voluptatum odit libero expedita vel tenetur minus! Sed quis distinctio illo numquam rem aspernatur.</h1>
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
    </body>

    <script src="../Lib/jquery-3.7.1.js"></script> 
    <script src="../Functionphp/Redirect.js"></script>
    <script src= "../Functionphp/AdminList.js"></script>
    
</html>