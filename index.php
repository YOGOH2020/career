<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Career | HEDSO</title>
    <!-- Include Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <!-- Include custom CSS -->
    <style>
      body {
        background-color: #191919;
        color: #fff;
      }

      .navbar {
        background-color: #161b24;
      }

      .nav-link {
        color: #fff !important;
      }

      .dropdown-submenu {
        position: relative;
      }

      .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
      }

      .footer {
        background-color: #161b24;
        color: #fff;
        padding: 20px 0;
      }

      .footer a {
        color: #4caf50;
      }

      .footer a:hover {
        color: #fff;
      }

      .job-application-section{
        margin-top:30px;
        margin-bottom: 20px;
      }

      .volunteer-section {
        background-color: #161b24;
        color: #fff;
        padding: 40px 0;
      }

      
    /* Styles for headings */
    h3, h4 {
      color: #4caf50;
      margin: 20px 0;
      line-height: 1.5; /* Improved line spacing */
    }

    /* Styles for paragraphs */
    p {
      margin-bottom: 15px;
      line-height: 1.5; /* Improved line spacing */
    }

    .li {
      list-style-type: none; /* Removed default bullet point */
      margin-left: 0;
      padding-left: 20px; /* Added padding for icon alignment */
    }

    /* Styles for list items with arrow icons */
    .li::before {
      content: '\2192'; /* Right arrow icon */
      color: #4caf50; /* Blue arrow color */
      margin-right: 10px; /* Space between icon and text */
    }

    .tick {
      list-style-type: none; /* Removed default bullet point */
      margin-left: 0;
      padding-left: 5px; /* Added padding for icon alignment */
    }

    /* Styles for list items with green checkmark icons */
    .tick::before {
      content: '\2713'; /* Checkmark (tick) icon */
      color: #4caf50; /* Green tick color */
      margin-right: 5px; /* Space between icon and text */
    }

    
    /* Styles for the job application form */
    .job-application-form {
      border: 2px solid #007bff; /* Added border */
      padding: 20px;
      margin-top: 20px; /* Margin-top of 20px */
      position: relative; /* Added relative positioning for lights animation */
    }

    @keyframes running-lights {
  0% {
    box-shadow: 0 0 10px rgba(0, 255, 0, 0.5),
                0 0 10px rgba(128, 0, 128, 0.5),
                0 0 10px rgba(255, 255, 255, 0.5),
                0 0 10px rgba(0, 0, 255, 0.5);
  }
  25% {
    box-shadow: 0 0 10px rgba(128, 0, 128, 0.5),
                0 0 10px rgba(255, 255, 255, 0.5),
                0 0 10px rgba(0, 0, 255, 0.5),
                0 0 10px rgba(0, 255, 0, 0.5);
  }
  50% {
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5),
                0 0 10px rgba(0, 0, 255, 0.5),
                0 0 10px rgba(0, 255, 0, 0.5),
                0 0 10px rgba(128, 0, 128, 0.5);
  }
  75% {
    box-shadow: 0 0 10px rgba(0, 0, 255, 0.5),
                0 0 10px rgba(0, 255, 0, 0.5),
                0 0 10px rgba(128, 0, 128, 0.5),
                0 0 10px rgba(255, 255, 255, 0.5);
  }
  100% {
    box-shadow: 0 0 10px rgba(0, 255, 0, 0.5),
                0 0 10px rgba(128, 0, 128, 0.5),
                0 0 10px rgba(255, 255, 255, 0.5),
                0 0 10px rgba(0, 0, 255, 0.5);
  }
}

/* Apply the animation to the job application form */
.job-application-form::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: -1; /* Behind the form */
  animation: running-lights 4s linear infinite; /* Increased animation duration */
}

      .volunteer-form .form-group label {
        color: #4caf50;
      }

      .volunteer-form .form-group input,
      .volunteer-form .form-group textarea {
        background-color: #161b24;
        border-color: #4caf50;
        color: #fff;
      }

      .volunteer-form .form-group input:focus,
      .volunteer-form .form-group textarea:focus {
        background-color: #191919;
        border-color: #4caf50;
        color: #fff;
      }

      .volunteer-form .custom-file-label {
        background-color: #161b24;
        border-color: #4caf50;
        color: #fff;
      }

      .volunteer-form .custom-file-label::after {
        background-color: #4caf50;
        border-color: #4caf50;
      }

      .volunteer-form .btn-primary {
        background-color: #4caf50;
        border-color: #4caf50;
      }

      .volunteer-form .btn-primary:hover {
        background-color: #fff;
        color: #4caf50;
      }

      .volunteer-form {
        margin-bottom: 40px;
      }

      /* Styles for success message */
      .alert.succdiv {
        background-color: #dff0d8;
        border-color: #d6e9c6;
        color: #3c763d;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
      }

      /* Styles for error message */
      .alert.errordiv {
        background-color: #f2dede;
        border-color: #ebccd1;
        color: #a94442;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
      }
    </style>
    <link rel="icon" href="./favicon-16x16.png" type="image/x-icon" />
    <link rel="shortcut icon" href="./favicon-16x16.png" type="image/x-icon" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  </head>

  <body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="./index.php">HEDSO</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
          </li>
          <li
            class="nav-item dropdown"
            onmouseover="showDropdown(this)"
            onmouseout="hideDropdown(this)"
          >
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="aboutDropdown"
              role="button"
              aria-haspopup="true"
              aria-expanded="false"
            >
              About Us
            </a>
            <div class="dropdown-menu" aria-labelledby="aboutDropdown">
              <a class="dropdown-item" href="./about.php">OverView</a>
              <a class="dropdown-item" href="./board.php">Meet The Team</a>
            </div>
          </li>
          <li
            class="nav-item dropdown"
            onmouseover="showDropdown(this)"
            onmouseout="hideDropdown(this)"
          >
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="programsDropdown"
              role="button"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Programs
            </a>
            <div
              class="dropdown-menu dropdown-menu-side"
              aria-labelledby="programsDropdown"
            >
              <div
                class="dropdown-submenu"
                onmouseover="showSubmenu(this)"
                onmouseout="hideSubmenu(this)"
              >
                <a
                  class="dropdown-item dropdown-toggle"
                  href="./integ.php"
                  role="button"
                >
                  Integrated Health and Well-Being
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="./gbv.php">GBV PREVENTION</a>
                  <a class="dropdown-item" href="./srhr.php">AYSRH</a>
                  <a class="dropdown-item" href="./wash.php">WASH</a>
                  <a class="dropdown-item" href="./hiv.php">HIV PREVENTION</a>
                </div>
              </div>
              <div class="dropdown-submenu">
                <a class="dropdown-item" href="./agw.php" role="button">
                  AGYW, PWDs and Youths Economic Empowerment
                </a>
              </div>
              <div class="dropdown-submenu">
                <a class="dropdown-item" href="./ongoing.php" role="button">
                  Ongoing Projects
                </a>
              </div>
              <div
                class="dropdown-submenu"
                onmouseover="showSubmenu(this)"
                onmouseout="hideSubmenu(this)"
              >
                <a
                  class="dropdown-item dropdown-toggle"
                  href="./climateres.php"
                  role="button"
                >
                  Climate Change Resilience
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="./waste.php"
                    >WASTE MANAGEMENT</a
                  >
                  <a class="dropdown-item" href="./tree.php"
                    >ECOSYSTEM RESTORATION</a
                  >
                  <a class="dropdown-item" href="./disaster.php"
                    >DISASTER RISK REDUCTION</a
                  >
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./approach.php">Our Approach</a>
          </li>
          <li
            class="nav-item dropdown"
            onmouseover="showDropdown(this)"
            onmouseout="hideDropdown(this)"
          >
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="resourcesDropdown"
              role="button"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Resources
            </a>
            <div class="dropdown-menu" aria-labelledby="resourcesDropdown">
              <a class="dropdown-item" href="./newsletter.php">Newsletters</a>
              <a class="dropdown-item" href="./gallery.php">Our Gallery</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./donate.php">Donate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./volunteer.php">Volunteer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Career</a>
          </li>
        </ul>
      </div>
    </nav>
<!-- Job Application Section -->
<section class="job-application-section">
  <div class="container">
    <div class="row">
      <div class="col-lg "></div>
      <div class="col-lg-10 ">

        <h3>APPLICATION FOR PEER MENTORS FOR ECONOMIC INTEGRATION OF TEENAGE MOTHERS PROJECT</h3>

        <p>Do you want to change your communities? HEDSO is on a mission to transform the health and economy of our communities. Our aim is to amplify the voices and address the unique challenges faced by adolescent girls, young women, and youths in the rural communities in the Lake Victoria beaches and sugar belt areas. HEDSO recognizes that these groups often encounter significant barriers to achieving their full potential, both in terms of their health and economic empowerment. By focusing on improving their health and well-being while simultaneously fostering economic empowerment, HEDSO aims to create a more equitable and inclusive society free from social and environmental injustices.</p>

        <h4>Vision:</h4>
        <p>A healthy and economically empowered society free from social and environmental injustices.</p>

        <h4>Mission:</h4>
        <p>Promoting integrated health, skills, and knowledge development, human rights advocacy, climate change action, and economic empowerment among adolescent girls and young women, marginalized youth, and families within the community through strategic partnership.</p>

        <h4>Core Values:</h4>
        <ul>
          <li  class="li">Professionalism</li>
          <li  class="li">Teamwork</li>
          <li  class="li">Integrity</li>
          <li  class="li">Accountability</li>
          <li  class="li">Innovation</li>
        </ul>

        <h3>ABOUT THE PROJECT AND PEER MENTOR ROLE</h3>

        <p>Kenya has experienced a consistent spike in teenage pregnancies and Sexual Gender-based violence in the past decade. Within the past two years, the COVID-19 pandemic, the lockdown, and reduced movements have added to these alarming numbers. The Kenya Demographic and Health Survey (KDHS) 2022 key indicators report released by the Kenya National Bureau of Statistics indicates that poverty and a lack of education were associated with higher rates of adolescent pregnancy as about 4 in 10 women aged 15-19 years who have no education have ever been pregnant, compared to only 5% of women who have more than secondary education. Adolescent pregnancies are also more likely to occur among poor communities, as 21% of women aged 15-19 in the lowest wealth quantile reported to have been pregnant, as compared to 8% in the highest wealth quantile.</p>

        <p>While there has been some focus at the policy level, health, and economic development strategy organization (HEDSO) recognizes the problems faced by teenage including deterioration of their mental health, poverty, vulnerability to sexual and gender-based violence, and discrimination in access to education. Our focus is therefore to provide 12-month cost-effective and community-led interventions to 300 teenage mothers across the two counties of Kisumu and Homabay to address this menace that is holding back girls from maximizing their full potential.</p>
        <p>
          HEDSO seeks to recruit peer mentors in Kisumu and Homabay Counties to lead the project intervention in the community working with the project Right holders in the following sub counties in Kisumu (Muhoroni, Nyando, and Kisumu west sub counties) and Homabay (Karachuonyo and Suba sub counties). The peer mentors' roles will be as follows:
        </p>
        <ul>
          <li class="tick">Assisting in identification, screening, and enrollment of the most at-risk teenage mothers into the program.</li>
          <li class="tick">Participate in the identification of safe spaces together with teenage mothers and other stakeholders.</li>
          <li class="tick">Assist in the documentation of teen mothers' priority needs/case management plan.</li>
          <li class="tick">Participate in preparation and execution of joint safe space work plans.</li>
          <li class="tick">Identify teenage mothers/households for relevant services based on identified priority needs and vulnerability levels. </li>
          <li class="tick">Track participation of teenage mothers in the program i.e., weekly update of safe space register.</li>
          <li class="tick">Ensure 90% of teenage mothers are accessing services monthly.</li>
          <li class="tick">Ensure teenage mothers access a minimum of 6 services per quarter i.e., behavioral, biomedical, social protection and post GBV care. </li>
          <li class="tick">Ensure participation of teenage mothers, caregivers, or partners in relevant program activities through mobilization and continuous follow up. </li>
          <li class="tick">Perform home visit to track teenage mothers  especially in follow up with the absentee AGYW.</li>
          <li class="tick">Attend safe space sessions when teenage mothers are in session.</li>
          <li class="tick">Work closely with the field officer to ensure all trainings and sensitization.</li>
          <li class="tick">Write activity and monthly reports of the support group trainings and sessions.</li>

        </ul>

        <!-- Qualifications and Requirements -->
        <h3>Qualifications and Requirements</h3>
        <ul class="ul">
          <li class="tick">Live in the same Counties and sub counties of the project.</li>
          <li class="tick">A graduate in certificate, diploma, and degree in social work, community health, program planning, public health, or related field.</li>
          <li class="tick">Able to speak in Swahili, English, and local language in the areas where there may be teenage mothers of different ethnic groups.</li>
          <li class="tick">Ability to communicate with parents and guardians of teenage mothers, stakeholders in government, faith-based organizations, and other civil society organizations, and male sex partners of teenage mothers.</li>
          <li class="tick">Has knowledge of the local government structure in the Ward; Knowledge of community assets where teenage mothers may get services including police stations, health facilities, schools, and colleges, Huduma Centers, Children’s department, social development offices, etc.</li>
          <li class="tick">Comfortable with adolescent sexual reproductive health issues, including learning, teaching, and referring AGYW for access uptake Sexual Reproductive Health services (experience working in Sexual Reproductive Health as CHVs, facilitators, ambassadors, volunteer etc. will be added advantages</li>
          <li class="tick">Is youth-friendly and approachable by AGYW (please note that AGYW may also recommend a mentor that they prefer for the project).</li>
          <li class="tick">18 – 35 years of age. AGYW who are currently active or graduated from DREAMS will be considered for recruitment as mentors as a priority.</li>
          <li class="tick">Community women 18-35 who have made achievements in their lives e.g., in health, education, business, leadership, advocacy, etc. will have an added advantage to be selected as mentors.</li>
          <li class="tick">Must be Ready to adhere to HEDSO core values.</li>
        </ul>

        <!-- Job Application Form -->
        <form class="job-application-form" enctype="multipart/form-data" method="post" action="" name="jobApplication" onsubmit="return validateForm()">
          <!-- Form fields for the job application -->
          <div class="form-group">
            <label for="first-name">First name</label>
            <input type="text" name="FirstName" class="form-control" id="first-name" required>
          </div>
          <div class="form-group">
            <label for="last-name">Sir name</label>
            <input type="text" name="LastName" class="form-control" id="last-name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="Email" class="form-control" id="email" required>
          </div>
          <div class="form-group">
            <label for="age-bracket">Age bracket</label>
            <input type="text" name="AgeBracket" class="form-control" id="age-bracket" required>
          </div>
          <div class="form-group">
            <label for="county">County</label>
            <input type="text" name="County" class="form-control" id="county" required>
          </div>
          <div class="form-group">
            <label for="sub-county">Sub county</label>
            <input type="text" name="SubCounty" class="form-control" id="sub-county" required>
          </div>
          <div class="form-group">
            <label for="social-media">Social media handles (twitter / Facebook/IG/Linked In)</label>
            <input type="text" name="SocialMedia" class="form-control" id="social-media">
          </div>
          <div class="form-group">
            <label for="community-work">Tell us about your community work and experience</label>
            <textarea name="CommunityWork" class="form-control" id="community-work" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <label for="motivation">What is your motivation for applying for this position</label>
            <textarea name="Motivation" class="form-control" id="motivation" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <label for="cv">CV Attachment</label>
            <div class="custom-file">
              <input type="file" name="cv" class="custom-file-input" id="cv" required>
              <label class="custom-file-label" for="cv">Choose file</label>
            </div>
          </div>
          <div class="form-group">
            <label for="cover-letter">Cover Letter Attachment</label>
            <div class="custom-file">
              <input type="file" name="cover" class="custom-file-input" id="cover-letter" required>
              <label class="custom-file-label" for="cover-letter">Choose file</label>
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
          <!-- Display success or error message -->
        <div class="message">
          <?php
          if (!empty($successMessage)) {
            echo "<p class='success'>$successMessage</p>";
          } elseif (!empty($errorMessage)) {
            echo "<p class='error'>$errorMessage</p>";
          }
          ?>
        </div>
      <div class="col-lg "></div>
    </div>
  </div>
</section>

<?php
// Define variables for messages and initialize form field variables
$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Sanitize and validate form fields in PHP
  $firstName = sanitizeInput($_POST["FirstName"]);
  $lastName = sanitizeInput($_POST["LastName"]);
  $email = sanitizeInput($_POST["Email"]);
  $ageBracket = sanitizeInput($_POST["AgeBracket"]);
  $county = sanitizeInput($_POST["County"]);
  $subCounty = sanitizeInput($_POST["SubCounty"]);
  $socialMedia = sanitizeInput($_POST["SocialMedia"]);
  $communityWork = sanitizeInput($_POST["CommunityWork"]);
  $motivation = sanitizeInput($_POST["Motivation"]);

  // ... (other validation checks)

  // Check if there are no errors
  if (empty($errorMessage)) {
    // File upload handling
    $cvFileName = $_FILES["cv"]["name"];
    $coverFileName = $_FILES["cover"]["name"];
    
    $cvTempName = $_FILES["cv"]["tmp_name"];
    $coverTempName = $_FILES["cover"]["tmp_name"];
    
    // Move uploaded files to a secure directory (you need to specify the directory)
    $uploadDirectory = "uploads/"; // Change this to your desired directory
    move_uploaded_file($cvTempName, $uploadDirectory . $cvFileName);
    move_uploaded_file($coverTempName, $uploadDirectory . $coverFileName);

    // Send an email with form data and file attachments
    $toEmail = "admin@hedso.org"; // Replace with your email address
    $subject = "Job Application from $firstName $lastName";
    $message = "First Name: $firstName\n"
             . "Last Name: $lastName\n"
             . "Email: $email\n"
             . "Age Bracket: $ageBracket\n"
             . "County: $county\n"
             . "Sub County: $subCounty\n"
             . "Social Media: $socialMedia\n"
             . "Community Work and Experience: $communityWork\n"
             . "Motivation: $motivation";
    
    $headers = "From: $email";
    
    // Define email attachments
    $attachments = array(
      $uploadDirectory . $cvFileName,
      $uploadDirectory . $coverFileName
    );

    // Send the email with attachments
    if (sendEmailWithAttachments($toEmail, $subject, $message, $headers, $attachments)) {
      // Display success message
      $successMessage = "Thanks for applying for the position. Our HR team will get back to you soon.";

      // Remove uploaded files
      unlink($uploadDirectory . $cvFileName);
      unlink($uploadDirectory . $coverFileName);

      // Clear form data
      $firstName = $lastName = $email = $ageBracket = $county = $subCounty = $socialMedia = $communityWork = $motivation = "";
    } else {
      // Display error message if the email could not be sent
      $errorMessage = "Error sending the application. Please try again later.";
    }
  }
}

// Function to send an email with attachments
function sendEmailWithAttachments($to, $subject, $message, $headers, $attachments) {
  $boundary = md5(rand());

  $headers .= "\nMIME-Version: 1.0\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\n";
  
  $message = "--$boundary\n";
  $message .= "Content-Type: text/plain; charset=\"utf-8\"\n";
  $message .= "Content-Transfer-Encoding: 8bit\n\n";
  $message .= $message . "\n\n";
  
  foreach ($attachments as $file) {
    $message .= "--$boundary\n";
    $fileContent = file_get_contents($file);
    $fileContent = chunk_split(base64_encode($fileContent));
    $message .= "Content-Disposition: attachment; filename=\"" . basename($file) . "\"\n";
    $message .= "Content-Type: application/octet-stream; name=\"" . basename($file) . "\"\n";
    $message .= "Content-Transfer-Encoding: base64\n\n";
    $message .= $fileContent . "\n";
  }

  return mail($to, $subject, $message, $headers);
}
?
<!-- Footer Section -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h3>HEDSO ORGANIZATION</h3>
            <p>Tom Mboya Estate, Kisumu, Kenya</p>
            <p>Phone: +254773222909 | +254768546640</p>
            <p>Email: info@hedso.org</p>
          </div>
          <div class="col-lg-4">
            <h3>Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="./index.php">The Issue</a></li>
              <li><a href="./approach.php">Our Approach</a></li>
              <li><a href="./about.php">About Us</a></li>
              <li><a href="./contact.php">Contact Us</a></li>
              <li><a href="./donate.php">Donate</a></li>
              <li><a href="./volunteer.php">Volunteer</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h3>Connect with Us</h3>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a
                  href="https://www.facebook.com/profile.php?id=100082997605803"
                  target="_blank"
                  ><i class="fab fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/HealthandEcono1" target="_blank"
                  ><i class="fab fa-twitter"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a
                  href="https://www.linkedin.com/company/health-and-economic-development-strategy-organization-hedso/"
                  target="_blank"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a
                  href="https://www.youtube.com/@healtheconomic"
                  target="_blank"
                  ><i class="fab fa-youtube"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a
                  href="https://api.whatsapp.com/send?phone=254773222909"
                  target="_blank"
                  ><i class="fab fa-whatsapp"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="small">
              &copy; 2023 Hedso Organization. All rights reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>

    <script>
      function showDropdown(element) {
        var dropdownMenu = element.querySelector(".dropdown-menu");
        if (dropdownMenu) {
          dropdownMenu.style.display = "block";
        }
      }

      function hideDropdown(element) {
        var dropdownMenu = element.querySelector(".dropdown-menu");
        if (dropdownMenu) {
          dropdownMenu.style.display = "none";
        }
      }

      function showSubmenu(element) {
        var submenu = element.querySelector(".dropdown-menu");
        if (submenu) {
          submenu.style.display = "block";
        }
      }

      function hideSubmenu(element) {
        var submenu = element.querySelector(".dropdown-menu");
        if (submenu) {
          submenu.style.display = "none";
        }
      }

      // Check if the form was submitted previously
      if (localStorage.getItem("volunteerSubmitted")) {
        // Display the thank you message
        document.addEventListener("DOMContentLoaded", function () {
          var messageContainer = document.querySelector(".thank-you-message");
          messageContainer.style.display = "block";

          // Clear the localStorage flag to prevent showing the message on subsequent reloads
          localStorage.removeItem("volunteerSubmitted");
        });
      }

      // Attach an event listener to the form submit button
      document.addEventListener("DOMContentLoaded", function () {
        var submitButton = document.querySelector('button[name="submit"]');
        submitButton.addEventListener("click", function () {
          // Set the localStorage flag when the form is submitted
          localStorage.setItem("volunteerSubmitted", "true");
        });
      });

      // Function to validate the form
function validateForm() {
  var firstName = document.forms["jobApplication"]["FirstName"].value;
  var lastName = document.forms["jobApplication"]["LastName"].value;
  var email = document.forms["jobApplication"]["Email"].value;
  var ageBracket = document.forms["jobApplication"]["AgeBracket"].value;
  var county = document.forms["jobApplication"]["County"].value;
  var subCounty = document.forms["jobApplication"]["SubCounty"].value;
  var communityWork = document.forms["jobApplication"]["CommunityWork"].value;
  var motivation = document.forms["jobApplication"]["Motivation"].value;
  var cv = document.forms["jobApplication"]["cv"].value;
  var cover = document.forms["jobApplication"]["cover"].value;

  // Regular expression for email validation
  var emailRegex = /^\S+@\S+\.\S+$/;

  // Sanitize input values to remove HTML tags and special characters
  firstName = sanitizeInput(firstName);
  lastName = sanitizeInput(lastName);
  email = sanitizeInput(email);
  ageBracket = sanitizeInput(ageBracket);
  county = sanitizeInput(county);
  subCounty = sanitizeInput(subCounty);
  communityWork = sanitizeInput(communityWork);
  motivation = sanitizeInput(motivation);

  // Check if age is below 35
  if (parseInt(ageBracket) >= 35) {
    alert("This position is only open to applicants below 35 years of age.");
    return false;
  }

  // Check if any of the fields is empty after sanitization
  if (
    firstName === "" ||
    lastName === "" ||
    email === "" ||
    ageBracket === "" ||
    county === "" ||
    subCounty === "" ||
    communityWork === "" ||
    motivation === "" ||
    cv === "" ||
    cover === ""
  ) {
    alert("All fields are required");
    return false;
  }

  // Check if email is in a valid format
  if (!email.match(emailRegex)) {
    alert("Invalid email format");
    return false;
  }

  // Check file extensions for CV and cover letter attachments
  var cvExtension = cv.substring(cv.lastIndexOf('.') + 1).toLowerCase();
  var coverExtension = cover.substring(cover.lastIndexOf('.') + 1).toLowerCase();

  if (cvExtension !== "pdf" && cvExtension !== "doc" && cvExtension !== "docx" &&
      coverExtension !== "pdf" && coverExtension !== "doc" && coverExtension !== "docx") {
    alert("CV and cover letter must be in PDF, DOC, or DOCX format");
    return false;
  }

  return true;
}

// Function to sanitize input by removing HTML tags and special characters
function sanitizeInput(input) {
  var sanitizedInput = input.replace(/<[^>]*>/g, '');
  sanitizedInput = sanitizedInput.replace(/[&<>"'`=\/]/g, '');
  return sanitizedInput;
}




      (function (I, L, T, i, c, k, s) {
        if (I.iticks) return;
        I.iticks = { host: c, settings: s, clientId: k, cdn: L, queue: [] };
        var h = T.head || T.documentElement;
        var e = T.createElement(i);
        var l = I.location;
        e.async = true;
        e.src = (L || c) + "/client/inject-v2.min.js";
        h.insertBefore(e, h.firstChild);
        I.iticks.call = function (a, b) {
          I.iticks.queue.push([a, b]);
        };
      })(
        window,
        "https://cdn-v1.intelliticks.com/prod/common",
        document,
        "script",
        "https://app.intelliticks.com",
        "FhefARnFeHNK3LCx4_c",
        {}
      );

    </script>
  </body>
</html>
