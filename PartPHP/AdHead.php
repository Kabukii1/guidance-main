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
                <p>Student Admin: <?php echo $student_no; ?></p>
            </div>
            <div class="button-container">
                <ul class="button-list">
                    <li><a href="../HTMLphp/ACC.php"><button>Current Cases</button></a></li>
                    <li><a href="../HTMLphp/TP.php"><button disabled>Turn Over</button></a></li>
                    <li><a href="../HTMLphp/COOR.php"><button disabled>Coordination Panel</button></a></li>
                </ul>
            </div>
        </main>

    </head>

    <body>
        <div class="Bg">
            <img src="../IMG/au-malabon-rizal.jpg" alt="Background Image">
            <img src="../IMG/aarticle.PNG" alt="Background Image">
            <img src="../IMG/article.PNG" alt="Background Image">
            <img src="../IMG/articlee-rizal.PNG" alt="Background Image">
            <img src="../IMG/articleee.PNG" alt="Background Image">
        </div>

        <article class="AUart">
            <div class="AUcont">
            <h2 class="AUText">Guidance Office of AU JRC</h2>
                <p class="AUpText">The Guidance System is created to be a safe space for all. Rules are designed not to limit everyone but to ensure a fair and respectful experience for both the student and administrator. Additionally, these guidelines guard the rights and safety of everyone involved. As we are committed to keeping this website free from negativity, we are encouraging you to take note of the following details before submitting a report. By proceeding, it means you agree to adhere to the following guidelines. Non-compliance may result in disciplinary actions such as warnings and sanctions.<br><br>
                
                <strong>Respect is a must</strong><br>
                Discussions must remain formal. Use proper language and avoid informal expressions. As you write your report, keep your tone neutral and professional. We encourage everyone to focus on respectful exchanges of information and refrain from doing actions that could be seen as starting arguments with fellow students. We do not encourage you to start unhealthy arguments, file a report based on unsolicited opinions regarding private issues, or violate the privacy of others.<br><br>
                
                <strong>Confidentiality</strong><br>
                What is said here, stays here. We request everyone to remain confidential about shared information in this space. Keep personal information private to establish a sense of trust and honesty between the guidance personnel and students.<br><br>
                
                <strong>Provide all information</strong><br>
                Focus on essential details about your report. Rely on facts rather than opinions. Add all relevant details, including the date and the name of the person or people involved. For easier comprehension, you can alternatively arrange your report using bullet points or numbered lists. Adhere to the guidelines established by the Guidance System in terms of sending a report. Select the appropriate report category and provide proof to back up your claims. Avoid sending extraneous documents and make sure the evidence is relevant to the topic at hand. For clarity, rename and arrange every piece of evidence.<br><br>
                
                <img src="../Pics/St.png" alt="Report" class="ArticleIMG">
                <video width="650" height="366" src="../Vid/Report.mp4" controls loop muted class="Video"></video>

                <strong>No Spamming</strong><br>
                Sending repetitive, unnecessary, and irrelevant reports creates an unprofessional expression to the guidance office. Multiple messages require more time to read, whereas a single well-crafted report allows for a more efficient response. Anyone seen engaging in the aforementioned behavior will immediately receive a warning or punishment.

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus veritatis sint repellendus magnam placeat provident maxime quae eum vitae alias nulla porro distinctio, laudantium eos cum! Ab cupiditate tenetur quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime expedita, tempora magni, odit hic nesciunt, porro beatae asperiores voluptate at numquam qui quam molestias et assumenda neque consequuntur minus a? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio in voluptate, repellat et vitae consectetur quasi, dolor est adipisci praesentium qui modi neque? Tempore nulla enim doloremque assumenda, deleniti unde. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ex omnis, accusamus veritatis nam placeat, commodi tenetur corrupti suscipit dignissimos quod? Assumenda, officiis commodi cupiditate maiores nostrum quo sunt accusantium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae velit sunt deserunt consectetur fugiat, vitae totam voluptatum, dolor maiores consequuntur reprehenderit? Nemo, adipisci obcaecati ipsam sapiente optio magnam accusantium id! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, iusto est? Accusamus at id molestiae sed enim, sequi qui quis dicta aliquid exercitationem voluptatem tempore totam consequatur, quod commodi. Repellendus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, debitis, incidunt dolores sunt pariatur officiis iure expedita voluptates minima suscipit, nesciunt sed tempore? Eveniet consectetur et culpa omnis accusamus at!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus veritatis sint repellendus magnam placeat provident maxime quae eum vitae alias nulla porro distinctio, laudantium eos cum! Ab cupiditate tenetur quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime expedita, tempora magni, odit hic nesciunt, porro beatae asperiores voluptate at numquam qui quam molestias et assumenda neque consequuntur minus a? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio in voluptate, repellat et vitae consectetur quasi, dolor est adipisci praesentium qui modi neque? Tempore nulla enim doloremque assumenda, deleniti unde. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ex omnis, accusamus veritatis nam placeat, commodi tenetur corrupti suscipit dignissimos quod? Assumenda, officiis commodi cupiditate maiores nostrum quo sunt accusantium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae velit sunt deserunt consectetur fugiat, vitae totam voluptatum, dolor maiores consequuntur reprehenderit? Nemo, adipisci obcaecati ipsam sapiente optio magnam accusantium id! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, iusto est? Accusamus at id molestiae sed enim, sequi qui quis dicta aliquid exercitationem voluptatem tempore totam consequatur, quod commodi. Repellendus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, debitis, incidunt dolores sunt pariatur officiis iure expedita voluptates minima suscipit, nesciunt sed tempore? Eveniet consectetur et culpa omnis accusamus at!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus veritatis sint repellendus magnam placeat provident maxime quae eum vitae alias nulla porro distinctio, laudantium eos cum! Ab cupiditate tenetur quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime expedita, tempora magni, odit hic nesciunt, porro beatae asperiores voluptate at numquam qui quam molestias et assumenda neque consequuntur minus a? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio in voluptate, repellat et vitae consectetur quasi, dolor est adipisci praesentium qui modi neque? Tempore nulla enim doloremque assumenda, deleniti unde. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ex omnis, accusamus veritatis nam placeat, commodi tenetur corrupti suscipit dignissimos quod? Assumenda, officiis commodi cupiditate maiores nostrum quo sunt accusantium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae velit sunt deserunt consectetur fugiat, vitae totam voluptatum, dolor maiores consequuntur reprehenderit? Nemo, adipisci obcaecati ipsam sapiente optio magnam accusantium id! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, iusto est? Accusamus at id molestiae sed enim, sequi qui quis dicta aliquid exercitationem voluptatem tempore totam consequatur, quod commodi. Repellendus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, debitis, incidunt dolores sunt pariatur officiis iure expedita voluptates minima suscipit, nesciunt sed tempore? Eveniet consectetur et culpa omnis accusamus at!</p>
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
    </body>
</html>