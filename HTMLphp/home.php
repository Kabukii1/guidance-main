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

        <!-- ✅ Import Swiper CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.12/htmx.min.js"></script>

        <style>
            .swiper {
                width: 100%;
                height: 300px;
                margin-top: 20px;
            }
            .swiper-slide {
                display: flex;
                align-items: center;
                justify-content: center;
                background: #f4f4f4;
            }
            .swiper-slide img {
                width: 100%;
                height: auto;
                object-fit: cover;
            }
            .swiper-pagination-bullet {
            width: 15px; /* Mas malaki ang bilog */
            height: 15px;
            background: #ffc107;
            }

           .swiper-pagination-bullet-active {
            width: 20px; /* Mas malaki ang active bullet */
            height: 20px;
            background: #ffa500;
    
            }
             /* ✅ Centering the "School Information" section */
             #school-info {
             width: 100%;
             max-width: 100%;
             margin: 0 auto;
             padding: 0 20px;
             box-sizing: border-box;
            }

            #school-info h2 {
            text-align: center; /* Gitna ang title */
            font-size: 2em; /* Mas malaking font */
            font-weight: bold; /* Mas matapang ang text */
            color: #303BB2; /* Kulay (optional) */
            margin-top: 20px; /* Dagdag na space sa itaas */

            }

            #school-info p {
            text-align: justify; /* Para pantay sa magkabilang gilid */
            margin-bottom: 15px; /* Magdagdag ng space sa baba ng bawat paragraph */
            line-height: 1.3; /* Para may tamang pagitan ang bawat linya */
            max-width: 850px; /* Kontrolin ang lapad ng paragraph */
            }

           /* Centering the Request Section */
           .request-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
    align-items: stretch; /* Ensures boxes have equal height */
}
           /* Styling for the request boxes */
           .request-box {
    background: white;
    padding: 18px;
    width: 400px;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start; /* Keeps text aligned at the top */
    min-height: 100%; /* Ensures boxes stretch to the same height */
}
          /* Subheading Style */
        .subheading {
        font-size: 14px;
        font-weight: bold;
        color: #555;
        text-transform: uppercase;
        }

         /* Title (Main Heading) */
        .title {
        font-size: 22px;
        color: #1a3c80;
        font-weight: bold;
        margin-bottom: 10px;
        }

        /* Paragraph Styling */
        .request-box p {
        font-size: 16px;
        color: #333;
        line-height: 1.5; /* Improve readability */
        }

        /* Link Styling */
        .request-box a {
         color: #1a3c80;
         font-weight: bold;
         text-decoration: none;
         }

        /* Hover Effect for Link */
        .request-box a:hover {
        text-decoration: underline;
        }
    
 
/* 3 desc */

body {
    font-family: Arial, sans-serif;
    text-align: center;
}

.awards-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
    margin-top: 50px;
    
}

.award-item {
    text-align: center;
    margin: 0 35px;
    
}

.award-item img {
    width: 150px;
    margin-top: -30px; /* Bawasan ito para umakyat ang image */
    padding-bottom: 5px;


   
}
.award-item p {
    font-weight: bold;
    color:  #1a3c80;
    font-size: 17px;
    margin-top: -15px;

}
/* Paragraph styling para mas lumaki */
.paragraph {
    font-size: 18px; /* Palakihin ang text */
    line-height: 1.5; /* Para madaling basahin */
    text-align: justify; /* Mas magandang alignment */
    max-width: 95%; /* Hindi masyadong mahaba */
    margin: 20px auto; /* Para sentro */
}
/* obj */
.objectives-section {
            width: 70%;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.7);
        }

        .objectives-section h2 {
            font-size: 28px;
            color: #1a3c80;
            margin-bottom: 20px;
        }

        .objectives-section p {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
            text-align: justify;
        }

        .objectives-list {
            list-style: none;
            padding: 0;
            text-align: left;
            margin-left: 20px; /* Adjust indentation if needed */
        }

        .objectives-list li {
            font-size: 18px;
            margin: 10px 0;
            padding: 2px;
            background: transparent;
            color: #333;
            border-radius: 5px;
        }
 /* for icons */
 .ofcs-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
}

.ofcs-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 150px; /* Lagyan ng fixed width */
}

.ofcs-item img {
    width: 100px; /* Gawing pare-pareho ang laki */
    height: auto;
    transition: transform 0.2s ease-in-out;
}

.ofcs-item img:hover {
    transform: scale(1.1); /* Mag-zoom ng konti kapag hinover */
}

.academic-image img {
    width: 500px; /* Adjust as needed */
    height: auto;
    border-radius: 5px;
    position: relative;
    bottom: -50px;
    left: 10px; /* Move image further left */
}

.academic-info {
    max-width: 500px; /* Keeps text width manageable */
    text-align: justify;
    font-size: 19px;
    line-height: 1.5;
    position: relative;
    left: -20px; /* Move text to the left */
    top: 10px; /* Adjust if needed */
    margin-top: -100px; /* Add space above the container */
    margin-bottom: -50px; /* Add space below the container */

}


.academic-container {
    display: flex;
    align-items: center; /* Aligns image and text */
    gap: 50px; /* Increases space between the image and text */
    justify-content: flex-start;
}

       .track-columns {
       display: flex;
        gap: 20px;
       }

       .school-map {
            width: 500px; /* Adjust the initial size as needed */
            height: auto;
            transition: transform 0.3s ease; /* Smooth transition for scaling */
            cursor: pointer; /* Change cursor to pointer to indicate it's clickable */
        }

        .school-map:active {
            transform: scale(1.5); /* Scale the image when clicked */
        }

        .content-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 900px;
            margin: auto;
        }

        .map-and-description {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }

         .titleoffice {
            position: relative;
            top: 120px; /* Itataas ang title. Pwede mong palitan ang value */
           color: #1a3c80;
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
                    <li><a href="HOME.php"><button>Home</button></a></li>
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
            <div style="display: flex; align-items: center; background: rgb(48, 59, 178); width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <img src="../CSS/LogoAU.png" alt="Logo" style="width: 120px; height: auto; margin-right: 15px;">
                <h2 style="color: white; margin: 0; font-size: 3.5em; font-family: 'Times New Roman', serif; font-weight: bold; letter-spacing: 1px;">
                    Guidance Office of AU JRC
                </h2>
            </div>

            <section id="school-info">
                <h2>School Information</h2>

                <p style="font-size: 1.2em; line-height: 1.3;">
                The late Florentino Cayco, Sr., first Filipino Undersecretary of Public Instruction and illustrious educator, conceptualized the birth and administered the growth of Arellano University.</p>
                <p style="font-size: 1.2em; line-height: 1.3;">
                This prestigious institution of learning opened in 1938 as the Arellano Law College, named after Cayetano Arellano, first Filipino chief justice. It closed in December 1941 until March 1945 under the Japanese occupation of the Philippines during World War II. At the end of the war, this educational institution reopened in April, 1945 and was renamed as Arellano Colleges offering a two-year preparatory law course and the regular four-year law course, as well as a complete secondary education curriculum.
                <p style="font-size: 1.2em; line-height: 1.3;">
                Its incessant expansion in all areas and locations has evolved into a network of campuses, the better to serve Metro Manila by going closer to the people. At present, the Arellano University System boasts of seven campuses, as follows:

            </section>
                  <!-- Swiper Banner Section -->
                <section class="swiper">
              <div class="swiper-wrapper">
                  <!-- Slide 1 -->
              <div class="swiper-slide">
            <img src="../Pics/juansumulong.jpg" alt="Juan Sumulong">
              </div>
                <!-- Slide 2 -->
              <div class="swiper-slide">
            <img src="../Pics/joseabad.jpg" alt="Jose Abad">
             </div>
                <!-- Slide 3 -->
              <div class="swiper-slide">
            <img src="../Pics/apolinario.jpg" alt="Apolinario">
            </div>
                <!-- Slide 4 -->
             <div class="swiper-slide">
            <img src="../Pics/andres.jpg" alt="Andres">
             </div>
               <!-- Slide 5 -->
             <div class="swiper-slide">
            <img src="../Pics/plaridel.jpg" alt="Plaridel">
            </div>
              <!-- Slide 6 -->
             <div class="swiper-slide">
            <img src="../Pics/esguerra.jpg" alt="Esguerra">
         </div>
              <!-- Slide 7 -->
           <div class="swiper-slide">
            <img src="../Pics/joserizal.jpg" alt="Jose Rizal">
           </div>
         </div>
                <!-- Dots Pagination -->
                <div class="swiper-pagination"></div>
            </section>
                <!-- New Heading Below Swiper -->
                <h2 style="text-align: center; margin-top: 20px; font-size: 2em; font-weight: bold; color: #303BB2;">
                 For God and Country     
            </h2>
                <p style="text-align: center; max-width: 800px; margin: 10px auto; font-size: 1.2em; line-height: 1.6;">
                The Arellano University Jose Rizal Campus aims to provide quality education and services that will help maintain the discipline among students. In coordination with the Office of Student Affairs and Prefect of Discipline, the Guidance office continues to extend their services and programs that will fulfill the institution's valuable mission and vision.
            </p>

            <!-- Request Sections -->
           <section class="request-container">
          <!-- First Box -->
         <div class="request-box">
          <p class="subheading">GUIDANCE OFFICE</p>
        <h2 class="title">Vision</h2>
        <p style="font-size: 1.2em;">
            To be a center that promotes the over-all growth and development of the students.
        </p>
      </div>

        <!-- Second Box -->
        <div class="request-box">
        <p class="subheading">GUIDANCE OFFICE</p>
        <h2 class="title">Mission</h2>
        <p style="font-size: 1.2em;">
           To provide well-rounder guidance and counseling services to help students become physically, intellectually, emotionally, socially, and spiritually sound individuals.
        </p>
    </div>
</section>
<div class="awards-container">
    <div class="award-item">
        <img src="../Pics/shaping.png" alt="Shaping">
        <p><strong>Guiding Students, Shaping Futures</strong></p>
    </div>
    <div class="award-item">
        <img src="../Pics/beyond.png" alt="Beyond">
        <p><strong>Beyond Academics: We Care</strong></p>
    </div>
    <div class="award-item">
        <img src="../Pics/guidance.png" alt="Guidance">
        <p><strong>Guidance at the Heart of Education</strong></p>
    </div>
</div>

<p class="paragraph">
Arellano University Jose Rizal Campus is committed to nurturing not only the academic growth of students but also their personal and emotional well-being. "Guiding Students, Shaping Futures" reflects our dedication to equipping learners with the necessary skills and values to thrive in life. We go "Beyond Academics: We Care," ensuring that every student feels supported through counseling, mentorship, and a strong sense of community. With "Guidance at the Heart of Education," we emphasize the crucial role of guidance services in fostering holistic development, helping students navigate challenges and make informed decisions for a brighter future.
</p>

<div class="objectives-section">
    <h2>Objectives</h2>
    <p> The following are the primary objectives of the Guidance System, which aims to support students in their personal, academic, and emotional growth. It is also designed to foster holistic development and provides students with easy access to resources.
<ul class="objectives-list">
    <li>• To render seamless communication and information exchange between students and guidance personnel. </li>
    <li>• To ensure continuous improvement of the university by empowering and widening the students' support system</li>
    <li>• To enhance the accessibility of the Guidance office making students receive help even in remote settings and challenging times.</li>
    <li>• To implement a new innovation that is responsive and relevant to the changes of the society. </li>
    <li>• To allow students confidentially report incidents and concerns, in a specific and organized manner avoiding redundant information. </li>
</ul>    
</p>
</div>
    </div>

    <div class="ofcs-container">
    <div class="ofcs-item">
        <a href="https://www.topservelms.com/" target="_blank">
            <img src="../Pics/lms.png" alt="Learning Management System">
        </a>
        <p>Learning Management System</p>
    </div>
    <div class="ofcs-item">
        <a href="https://www.arellano.edu.ph/office-for-student-affairs/about/" target="_blank">
            <img src="../Pics/osa.png" alt="OSA">
        </a>
        <p>Office of the Student Affairs</p>
    </div>
    <div class="ofcs-item">
        <a href="https://www.facebook.com/profile.php?id=100063928547569" target="_blank">
            <img src="../Pics/pd.png" alt="PD">
        </a>
        <p>Prefect and Guidance</p>
    </div>
    <div class="ofcs-item">
        <a href="https://www.facebook.com/AUSSC.JRC" target="_blank">
            <img src="../Pics/studentcouncil.png" alt="Student Council">
        </a>
        <p>AUSSC - JRC</p>
    </div>
    <div class="ofcs-item">
        <a href="https://www.facebook.com/AUJRCTheStandard" target="_blank">
            <img src="../Pics/standard.png" alt="Standard">
        </a>
        <p>The Standard - JRC</p>
    </div>
<section class="academic-track">
    <div class="academic-container">
        <div class="academic-image">
           <a href="http://localhost/GuidanceSystem/Pics/loc.jpg" target="_blank">
           <img src="../Pics/loc.jpg" alt="Loc">
        </a>
        </div>
        <div class="academic-info">
    <div class="track-columns">
        <div class="track">
            <h2 class="titleoffice">Office Location</h2>
            <p style="text-align: left; padding-top: 100px;">
                The Guidance Office is located inside the Central Building. It is positioned within the main structure of the campus, providing easy access for students seeking counseling and support services. The office is strategically placed to be accessible while maintaining a quiet and private environment for consultations.
    </div>
</div>
</section>
</div>
    </section>
</article>

        <main class="Footer">
            <div class="FContainer" style="display: flex; flex-direction: column; align-items: center; text-align: center; padding: 1px;">
                <div class="middle-section">
                    <a id="logolink" href="https://www.arellano.edu.ph/" class="AUOS">
                        <img src="../CSS/LogoAU.png" alt="Logo" class="AU" style="width: 100px; height: auto; display: block; margin: 0 auto;">
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

        <!-- ✅ Import Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true, // Allows the dots to be clickable
                },
            });
        </script>
    </body>
</html>
