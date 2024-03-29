<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Robert's Resume</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet"> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Open+Sans:wght@300;400&display=swap"
        rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body id="page-top">
    <?php 
    //  contact2,php
    
  if(isset($_POST['btn-send'])) {
      // submit the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if(empty($email) || empty($name) || empty($phone) || empty($message)) {

    // DEV 
    // $url = "http://localhost:8000/index.php?error#contactForm";
    // header('location: http://localhost:8000/index.php?error#contactForm');

    // TEST
    // $url = "https://www.hesi-test.robertbender.net/index.php?error#contactForm";
    // header('location: https://www.hesi-test.robertbender.net/index.php?error#contactForm');

    // GENERAL
    // header("location: index.php?error");
    
    // echo '<script language="javascript">window.location.href ="'.$url.'"</script>';

    } else {
  
        $to = "robkbender@gmail.com"; // use your email here
        $body = "";

        $subject .="From: ".$name. "\r\n";
        // $subject.="Email: ".$email. "\r\n";
        // $subject.="Phone: ".$phone. "\r\n";
        // $body.="Message: ".$message. "\r\n";

        $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
        // $headers = "Phone: " . strip_tags($_POST['phone']) . "\r\n";
        $headers .= "CC: robb.webdev@gmail.com\r\n";
        // $headers .= "MIME-Version: 1.0\r\n";
        // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        
        $body .="From: ".$name. "\r\n";
        $body .="Phone: ".$phone. "\r\n";
        $body .= "Message: ".$message. "\r\n";
    
          if(mail($to, $subject, $body, $headers)) {
            
            // DEV
            header('location: http://localhost:8000/index.php?success');

            // TEST PROD
            // $url = 'https://www.hesi-test.robertbender.net/#page-top';
            // header('location: https://www.hesi-test.robertbender.net/index.php?success'); // muy bueno

            // GENERAL 
            // header('Location: index.php?success');
        }
   }
}
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Robert Bender</span>
            <span class="d-none d-lg-block">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
                </li>
                <!-- <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
        </li> -->
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
            <div class="w-100">
                <h1 class="mb-0">Robert
                    <span class="text-primary">Bender</span>
                </h1>
                <div class="subheading mb-5">Web Developer/Designer · Phoenix, Arizona 85004 · (602) 341-3284 m ·
                    <a href="mailto:hello@robertbender.com">hello@robertbender.net</a>
                </div>
                <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for
                    high level
                    overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the
                    overall
                    value proposition.</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/robert-bender-b152257/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/robbender">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://twitter.com/RobertKBender">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
                <div>
                    <br>
                    <?php 
                if(isset($_GET['success'])) {
                    $Msg = "Thank you for your message. I will be in touch soon.";
                    echo '<div class="alert alert-success alert-dismissable id="success-alert" role="alert">'.$Msg.'</div>';
                     }
        ?>


                </div>
            </div>
        </section>
    </div>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
        <div class="w-100">
            <h2 class="mb-5">Experience</h2>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Freelance Creative Contractor</h3>
                    <div class="subheading mb-3">Web Developer, Graphic Desiger, and Photographer - Phoenix, AZ
                    </div>
                    <p>Highly creative and multitalented Web and Graphics Designer with extensive experience in
                        multimedia,
                        marketing and print design. Exceptional collaborative and interpersonal skills; dynamic team
                        player with
                        well-developed written and verbal communication abilities. Highly skilled in client and
                        vendor relations
                        and negotiations; talented at building and maintaining “win-win” partnerships. Passionate
                        and inventive
                        creator of innovative marketing strategies and campaigns; accustomed to performing in
                        deadline-driven
                        environments with an emphasis on working within budget requirements.
                        Creative experience in the following:
                    <ul>
                        PRINT
                        Brochures, Newsletters
                        Logos & Business Cards
                        Posters, Post Cards and Letterhead
                        Stationery.
                    </ul>
                    <ul>
                        PHOTOGRAPHY
                        Black & White Photography,
                        Lithography,
                        Retouching, and
                        Photograph Restoration
                    </ul>
                    <ul>
                        WEB
                        Website Design,
                        SEO, and
                        Social Media.
                    </ul>

                    Clients included Petsmart, Pearson Digital Learning, Susan G. Komen, American Red Cross, Mesa
                    Public
                    Schools, Futon Favorite, The Stay, VTO Wheels and PigeonsRUS
                    </p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">SEP 2005 - Present</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Help Desk Support Technician</h3>
                    <div class="subheading mb-3">MSI Solutions - Phoenix, AZ</div>
                    <p>
                        Provided first-level technical support to end-users on proprietary software and applications
                        including
                        installation basic usage and appropriate service level to warranty.
                        Performed troubleshooting techniques over the phone or via web messenger to identify and
                        resolve issues.
                        Established patterns to reoccurring issues and provides input to development
                        teams.Troubleshot software
                        and hardware issues.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">JUL 2010 - FEB 2012</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Help Desk Support Technician</h3>
                    <div class="subheading mb-3">Logitech - Phoenix, AZ</div>
                    <p>
                        Kept customers informed of progress during issue lifecycle and make follow-up calls or
                        communications in a
                        timely manner.
                        Assisted team members and provide support and solutions to customer queries to meet company
                        objectives.Maintained and updated knowledge of company products and services to better
                        provide customer
                        support and service solutions. </p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">JUL 2008 - JUN 2010</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                <div class="resume-content">
                    <h3 class="mb-0">Web Graphic Design Intern</h3>
                    <div class="subheading mb-3">Pearson Digital Learning - Mesa, AZ</div>
                    <p> Developed graphic images and effects to achieve design goals
                        Worked directly with other critical departmenst to establish project scope, interaction
                        guidelines, and project time lines. Provided competitive market analysis on the e-commerce
                        site and proposed suggestions to the design and available functionality
                        Performed routine updates, upgrades and overall maintenance of website graphics
                        Ensured accuracy of website content by thoroughly editing and cross-checking</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">JUL 2004 - JAN2005</span>
                </div>
            </div>

        </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
        <div class="w-100">
            <h2 class="mb-5">Education</h2>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Art Institute of Phoenix</h3>
                    <div class="subheading mb-3">Bachelor of Arts</div>
                    <div>Graphic Design</div>
                    <p>GPA: 3.2</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">JUN 2002 - SEP 2005</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                <div class="resume-content">
                    <h3 class="mb-0">WozU </h3>
                    <div class="subheading mb-3">Software Development Bootcamp</div>
                    <div>JavaScript Stack</div>
                    <p>GPA: 3.0</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">JUN 2018 - SEP 2018</span>
                </div>
            </div>
            <br>
            <br>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Phoenix College</h3>
                    <div class="subheading mb-3">Liberal Arts</div>
                    <div>Photography</div>
                    <p>GPA: 3.2</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">JUN 2002 - SEP 2005</span>
                </div>
            </div>

        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
        <div class="w-100">
            <h2 class="mb-5">Skills</h2>

            <div class="subheading mb-3">Programming Languages &amp; Tools</div>
            <ul class="list-inline dev-icons">
                <li class="list-inline-item">
                    <i class="fab fa-html5"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-css3-alt"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-js-square"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-php"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-github"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-aws"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-react"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-node-js"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-sass"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-less"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-wordpress"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-docker"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-grunt"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-vuejs"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-laravel"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-bootstrap"></i>
                </li>
            </ul>

            <div class="subheading mb-3">Workflow</div>
            <ul class="fa-ul mb-0">
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Mobile-First, Responsive Design
                </li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Cross Browser Testing &amp; Debugging
                </li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Cross Functional Teams
                </li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Agile Development &amp; Scrum
                </li>
            </ul>
        </div>
    </section>

    <hr class="m-0">

    <!-- <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Interests</h2>
        <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier
          and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and
          kayaking.</p>
        <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows,
          I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements
          in the front-end web development world.</p>
      </div>
    </section> -->

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
        <div class="w-100">
            <h2 class="mb-5">Awards &amp; Certifications</h2>
            <ul class="fa-ul mb-0">
                <li>
                    <i class=""></i>
                    Gold Addy Award for Advertising
                </li>
                <li>
                    <i class=""></i>
                    Bronze Addy Award for Photography
                </li>
                <li>
                    <i class=""></i>
                    Silver AIGA Prisma Award
                </li>
                <li>
            </ul>
        </div>
    </section>

    <!-- Contact Form  -->

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="contact">
        <div class="w-100">
            <h2 class="mb-5">Contact Me</h2>
            <form action="contact2.php" method="POST" id="contactForm" name="contact_form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" value="" id="name" placeholder="John Doe"
                        tabindex="1" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="name@example.com"
                        tabindex="2" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Hello There!"
                        tabindex="3" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Enter message..."
                        tabindex="4" required></textarea>
                </div>
                <button type="submit" value="submit" id="submitButton" name="btn-send"
                    class="btn btn-secondary">Send</button>
            </form>
        </div>
    </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/form2.js"></script>
    <script src="js/resume.min.js"></script>

</body>

</html>