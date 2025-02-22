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
    <li><a href="HOME.php"><button>Home</button></a></li>
                    <li><a href="news.php"><button>News & Resources</button></a></li>
                    <li><a href="resources.php"><button>Student Services</button></a></li>
                    <li><a href="Report.php"><button>Consultation</button></a></li>

    </ul>
</div>

        </main>

    </head>

    <body class="body">
        
        <div class="Bg">
            <img src="../IMG/au-malabon-rizal.jpg" alt="Background Image">
        </div>

        <article class="AUart">
            <div style="display: flex; align-items: center; background: rgb(48, 59, 178); width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <img src="../CSS/LogoAU.png" alt="Logo" style="width: 120px; height: auto; margin-right: 15px;">
                <h2 style="color: white; margin: 0; font-size: 3.2em; font-family: 'Poppins', sans-serif; font-weight: bold; letter-spacing: 1px;">
                    Guidance Office of AU JRC
                </h2>
            </div>


        <div class="container">
            <h1 class="h1">Student Consultation Form</h1>
            <p class="instruction">Please ensure that all information provided in this consultation form is accurate and complete. Your responses will remain confidential and will only be used to assist you in addressing your concerns effectively. If further assistance is needed, follow-up sessions may be scheduled to ensure continuous support and guidance.</p>
            <form action="../HTMLphp/submit.php" method="post" enctype="multipart/form-data">

<style>
    /* Input Wrapper to position error message */
    .input-wrapper {
        position: relative;
        display: flex;
        flex-direction: column;
    }

    /* Default Input Styling */
    input, select {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        width: 150px; 
        box-sizing: border-box;
    }

    /* Red border when invalid */
    .invalid {
        border: 2px solid red !important;
        background-color: #ffe6e6 !important;
    }

    /* Error Message Styling */
    .error-message {
        color: red;
        font-size: 12px;
        font-weight: bold;
        display: none; /* Hide by default */
        margin-top: 3px;
    }

/* Adjust Email Address Label Position */
.contact-container label[for="emailInput"] {
    display: block;
    margin-bottom: 1px; /* Pwede mong taasan ang value kung gusto mong mas ibaba */
    margin-top:20px;
}

/* Align Email & Reason for Consultation */
.contact-container {
    display: flex;
    gap: 20px;
    align-items: center;
    flex-wrap: wrap;
    max-width: 800px;
}

/* Each form group (Email & Reason) */
.contact-container .form-group {
    display: flex;
    flex-direction: column;
    flex: 1;
    min-width: 250px;
}

/* Ensure all labels are bold */
label {
    font-weight: bold;
    white-space: nowrap;
}

/* Ensure inputs take equal space */
.contact-container input,
.contact-container select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* "Others" input styling */
#otherReasonInput {
    display: none;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Preferred Date & Time in One Row */
.preferred-container {
    display: flex;
    gap: 20px;
    align-items: center;
    flex-wrap: wrap;
    max-width: 800px;
}

/* Ensure both fields take equal width */
.date-container,
.time-container {
    display: flex;
    flex-direction: column;
    flex: 1;
    min-width: 250px;
}

.date-container input,
.time-container select {
    width: 100%; /* Para sumakop sa buong container */
    padding: 10px; /* Mas malaki para hindi masikip */
    font-size: 16px; /* Mas madaling basahin */
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Adjust Preferred Date & Time Labels */
.preferred-container label {
    display: block;
    margin-bottom: 5px; /* Adjust this value as needed */
    margin-top:20px;
}

textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    resize: vertical; /* Allows the user to resize the textbox vertically */
}
#additionalInfoLabel {
    display: block; /* Keeps the label on a separate line */
    margin-bottom: 8px; /* Creates space between the label and the textarea */
    padding-top: 10px; /* Moves the label slightly lower */
}

#additionalInfo {
    width: 100%; /* Makes the textbox take full width */
    padding: 10px; /* Adds padding inside the textbox */
    border: 1px solid #ccc; /* Light gray border */
    border-radius: 5px; /* Soft rounded corners */
    font-size: 14px; /* Adjusts font size */
    font-size: 14px; 
}

.file-upload-container {
    display: flex;
    flex-direction: column;
    gap: 8px;
    margin-top: 15px;
}

.file-upload-container label {
    font-weight: bold;
}

.file-upload-container input[type="file"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.agreement-container {
    display: flex;
    align-items: flex-start; /* Para ma-align nang maayos ang checkbox at text */
    gap: 8px; /* Magdagdag ng space sa pagitan ng checkbox at text */
    max-width: 200%; /* Para hindi lumagpas ang text */
    margin-top: 10px; /* Magdagdag ng space mula sa itaas */
    word-wrap: break-word;
   
}

.agreement-container input[type="checkbox"] {
    margin-top: 4px; /* Para pumantay ang checkbox sa simula ng text */
    width: 16px;
    height: 16px;
}

.agreement-container label {
    font-size: 14px;
    line-height: 1.5;
    text-align: justify;
    flex: 1; /* Para ang label ay mag-adjust sa natitirang space */
    max-width: 90%;
    word-wrap: break-word; /* Para bumaba ang text kung masyadong mahaba */
}
.submit-container {
    display: flex;
    justify-content: center; /* Center-align sa form */
    margin-top: 20px;
}

.submit-container button {
    background-color: #1a3c80;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s;
}

.submit-container button:hover {
    background-color: #1a3c80;
}



</style>
            <div class="form-container">
    <label>Student’s Profile</label>
    <div class="input-group">
        <!-- Name Input -->
        <div class="input-wrapper">
            <input type="text" placeholder="Name" name="name" id="nameInput" 
                   pattern="[A-Za-z.\s]+" 
                   title="Only letters, spaces, and dots are allowed" required>
            <span class="error-message" id="nameError">Invalid</span>
        </div>

        <!-- Student No. -->
        <input type="text" placeholder="Student No." name="student_no" id="studentNoInput" required>

        <!-- LRN Input -->
        <div class="input-wrapper">
            <input type="text" placeholder="LRN" name="lrn" id="lrnInput"
                   pattern="[0-9]+" 
                   title="Only numbers are allowed" required>
            <span class="error-message" id="lrnError">Invalid</span>
        </div>

        <!-- Grade Level Dropdown -->
        <select name="grade_level" id="gradeLevel">
            <option value="" disabled selected>Grade Level</option>
            <option value="11">Grade 11</option>
            <option value="12">Grade 12</option>
        </select>

        <!-- Strand Dropdown -->
        <select name="strand" id="strand" onchange="updateStrandOptions()">
            <option value="" disabled selected>Strand</option>
            <option value="STEM">STEM</option>
            <option value="ABM">ABM</option>
            <option value="HUMSS">HUMSS</option>
            <option value="GAS">GAS</option>
            <option value="TVL">TVL</option>
            <option value="SPORTS">Sports</option>
            <option value="ARTS">Arts & Design</option>
        </select>

        <!-- Section Input -->
        <input type="text" placeholder="Section" name="section" id="sectionInput" required>
    </div>
</div>

<div class="contact-container">
    <label for="emailInput">Email Address</label>
    <input type="email" placeholder="Email Address" name="email" id="emailInput" required>

    <label for="reasonForConsultation">Reason for Consultation</label>
    <select id="reasonForConsultation" name="reason_for_consultation" onchange="toggleOtherReason()">
        <option value="" disabled selected>Select Reason</option>
        <option value="Academic">Academic Concern</option>
        <option value="Personal">Personal Issue</option>
        <option value="Career">Career Guidance</option>
        <option value="Others">Others</option>
    </select>

    <!-- Hidden input field for "Others" -->
    <input type="text" id="otherReasonInput" name="other_reason" placeholder="Please specify..." style="display: none;">
</div>


<!-- Preferred Date & Time in One Row -->
<div class="preferred-container">
    <div class="date-container">
        <label for="preferredDate">Preferred Date</label>
        <input type="date" id="preferredDate" name="preferred_date" required>
    </div>

    <div class="time-container">
        <label for="preferredTime">Preferred Time</label>
        <select id="preferredTime" name="preferred_time" required>
            <option value="" disabled selected>Select Time</option>
            <option value="08:00 AM">08:00 AM</option>
            <option value="09:00 AM">09:00 AM</option>
            <option value="10:00 AM">10:00 AM</option>
            <option value="11:00 AM">11:00 AM</option>
            <option value="01:00 PM">01:00 PM</option>
            <option value="02:00 PM">02:00 PM</option>
            <option value="03:00 PM">03:00 PM</option>
        </select>
    </div>
</div>

<label for="additionalInfo" id="additionalInfoLabel">
    Provide information regarding your concern and the situation
</label>
<textarea id="additionalInfo" name="additional_info" rows="4" cols="50"></textarea>

<!-- File Upload Section -->
<div class="file-upload-container">
    <label for="fileUpload">Upload Supporting File (Document or Video):</label>
    <input type="file" id="fileUpload" name="supporting_file" accept=".pdf,.doc,.docx,.mp4,.mov">
</div>

<div class="agreement-container">
    <input type="checkbox" id="confidentialityAgreement" required>
    <label for="confidentialityAgreement">
        I acknowledge that all the information provided in this form will be kept confidential.
    </label>
</div>
</div>
                
<!-- Submit Button -->
<div class="submit-container">
    <button type="submit">Submit</button>
</div>

<script>
    function updateStrandOptions() {
    var strandDropdown = document.getElementById("strand");

    if (strandDropdown.value === "TVL") {
        // Replace options for TVL Specialization
        strandDropdown.innerHTML = `
            <option value="" disabled selected>TVL Specialization</option>
            <option value="Cookery">Cookery</option>
            <option value="ICT">ICT</option>
            <option value="Automotive">Automotive</option>
            <option value="Electrical">Electrical Installation</option>
            <option value="Welding">Welding</option>
            <option value="Beauty Care">Beauty Care</option>
            <option value="Fashion Design">Fashion Design</option>
            <option value="Back">⬅ Back</option>
        `;
    }

    // Restore original options if "Back" is selected
    strandDropdown.addEventListener("change", function () {
        if (strandDropdown.value === "Back") {
            strandDropdown.innerHTML = `
                <option value="" disabled selected>Strand</option>
                <option value="STEM">STEM</option>
                <option value="ABM">ABM</option>
                <option value="HUMSS">HUMSS</option>
                <option value="GAS">GAS</option>
                <option value="TVL">TVL</option>
                <option value="SPORTS">Sports</option>
                <option value="ARTS">Arts & Design</option>
            `;
        }
    });
}

// Name Input Validation
document.getElementById("nameInput").addEventListener("input", function () {
    let errorMessage = document.getElementById("nameError");
    if (/\d/.test(this.value)) {  
        this.classList.add("invalid");
        errorMessage.style.display = "block"; // Show error
    } else {
        this.classList.remove("invalid");
        errorMessage.style.display = "none"; // Hide error
    }
    this.value = this.value.replace(/[^A-Za-z.\s]/g, ""); 
});

// LRN Input Validation (Numbers Only)
document.getElementById("lrnInput").addEventListener("input", function () {
    let errorMessage = document.getElementById("lrnError");
    if (/[^0-9]/.test(this.value)) {
        this.classList.add("invalid");
        errorMessage.style.display = "block"; // Show error
    } else {
        this.classList.remove("invalid");
        errorMessage.style.display = "none"; // Hide error
    }
    this.value = this.value.replace(/[^0-9]/g, ""); 
});

function toggleOtherReason() {
    var reasonDropdown = document.getElementById("reasonForConsultation");
    var otherReasonInput = document.getElementById("otherReasonInput");

    if (reasonDropdown.value === "Others") {
        otherReasonInput.style.display = "block";
        otherReasonInput.setAttribute("required", "true");
    } else {
        otherReasonInput.style.display = "none";
        otherReasonInput.removeAttribute("required");
    }
}

// Automatically set today's date as the minimum selectable date
document.getElementById("preferredDate").min = new Date().toISOString().split("T")[0];


</script>


    
       
<style>

.container {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

.h1 {
    text-align: center;
}

/* Styling for the instruction text */
.instruction {
    font-size: 16px;
    color: #555;
    margin-bottom: 20px;
}

/* Form container styling */
.form-container {
    text-align: left;
    margin-top: 20px;
}

/* Label styling */
.form-container label {
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
}

/* Input group for horizontal layout */
.input-group {
    display: flex;
    gap: 10px;
}

/* Input field styling */
.input-group input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    width: 100%;
    box-sizing: border-box;
}

/* Ensure all input fields and dropdowns have the same styling */
.input-group input,
.input-group select {
    flex: 1; 
    padding: 10px; 
    border: 1px solid #ccc; 
    border-radius: 5px;
    font-size: 14px;
    width: 100%;
    box-sizing: border-box;
    height: 40px; /* Ensure all fields have the same height */
}

/* To align items properly in a row */
.input-group {
    display: flex;
    gap: 10px;
    align-items: center; /* Aligns inputs & dropdowns properly */
}

    /* Default styling */
    .input-group {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    input, select {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        width: 150px; /* Fixed width to avoid resizing issues */
        box-sizing: border-box;
    }

    /* Ensure dropdown text is readable */
    select {
        text-align: center;
    }

    /* Red border when invalid */
    .invalid {
        border: 2px solid red;
        background-color: #ffe6e6;
    }

    #studentNoInput {
        width: 100px; /* Adjust width to make it bigger */
    }

    /* Center-align text in dropdowns */
select {
    text-align: center; /* Align text in dropdown */
    text-align-last: center; /* Ensures selected option is centered */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    width: 150px;
    box-sizing: border-box;
    appearance: none; /* Hides default arrow icon for better styling */
}

</style>    
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