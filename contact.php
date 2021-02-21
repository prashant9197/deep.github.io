<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deepiotics | Contact</title>
    <link rel="stylesheet" href="index.css">
    <script src="/deepiotics/js/index.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700;900&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<header>
        <!--Nav Bar Starts-->
        <!--Nav For Mobile Starts-->
        <nav class="navMobile">
            <div style="z-index:1000;;"class="nav-links" id="mob-menu">
            <div style="width:100%;"class="logo-container">
                    <img src="logo.png" alt="" class="logo-container-img-nav">
                </div>
                    <div class="aboutusM"><a href="aboutus.html" class="nav-link">About Us</a></div>
                    <div class="servicesM"> <a href="services.html" class="nav-link">Services</a>
                    </div>
                    <div class="soultionM"><a href="solution.html" class="nav-link">Solution</a></div>
                    <div class="contactM"><a href="contactus.html" class="nav-link">Contact Us</a></div>
                    <div class="blogM"><a href="blog" class="nav-link">Blog</a></div>
            </div>
            <div class="nav">
                <div class="logo" id="logo-container logo-container-mobile">
                    <img style="width:125px;" id="logo-image-mobile" class="logo-container-image-mobile" src="logo.png" alt="logo">
                </div>
                <div  class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
        </nav>

        <!--Nav For Mobile Ends-->
        
        <div class="navWrapper">
            <ul class="mainList">
                <li>
                    <img src="logo.png" alt="logo" style="width:125px;" id="logo-image">
                   
                </li>
                <li style="grid-area: about;" class="about">
                    <a href="aboutus.html">About Us</a>
                </li>
                <li  style="grid-area: services;"class="navServices">
                    <a href="services.html">Services</a>
                    <ul class="subListServices">
                        <li class="aiesd">
                            <img src="icons/aiLogo.svg" alt="">
                            <a href="ai.html">Artificial Intelligence</a>
                        </li>
                        <li class="aiod">
                            <img src="icons/machine-learning.svg" alt="">
                            <a href="ml.html">Machine Learning</a>
                        </li>
                        <li class="nlp">
                            <img src="icons/vision.svg" alt="">
                            <a href="vision.html">Computer Vision</a>
                        </li>
                        <li class="ml">
                            <img src="icons/iotLogo.svg" alt="">
                            <a href="iot.html">Internet of things</a>
                        </li>
                        <li class="speech">
                            <img src="icons/search.svg" alt="">
                            <a href="research.html">Research & Development</a>
                        </li>
                        <li class="aic">
                            <img src="icons/information.svg" alt="">
                            <a href="testing.html">QA & Testing</a>
                        </li>
                    </ul>
                </li>
                <li style="grid-area: solution;"class="solution">
                    <a href="solution.html">Solution</a>
                </li>
                <li style="grid-area:case;"class="case">
                    <a href="contact.php">Contact Us</a>
                </li>
                <li style="grid-area:blog;"class="blog">
                    <a href="http://www.deepiotics.com/blog/">Blog</a>
                </li>
            </ul>
        </div>
        <script type="text/JavaScript">
                window.onscroll = function() {setOpacity()};
                const logo = document.getElementById('logo-image');
                const logoMobile = document.getElementById('logo-image-mobile');
                function setOpacity() {
                    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                        logo.style.opacity=1;
                        logoMobile.style.opacity=1;
                    } else {
                        logo.style.opacity=0;
                        logoMobile.style.opacity =0;
                    }
                }
            </script>
        <!--Nav Bar Ends-->
    </header>
    <script type="text/JavaScript">
                    const navSlide = () => {
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.nav-links');
            const navLinks = document.querySelectorAll('.nav-link');
            

            burger.addEventListener('click', () =>{
                nav.classList.toggle('nav-active');

                navLinks.forEach((link, index) => {
                    if(link.style.animation){
                        link.style.animation = ``;
                    }
                    else{
                        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.2}s`; 
                    }
                });
                burger.classList.toggle('toggle');
            });

            
            }

            navSlide();</script>

<hr>
    <div class="contactWrap">
        <div class="contactWrap-heading">
            <h2>Get in <span style="font-weight: 700;"> touch</span> with us</h2>
            <div class="underline contact-line"></div>
        </div>
        <form  enctype="multipart/form-data" method="post" action="?">
        <div class="contentWrap">
            <div style="color: rgb(134, 130, 130);" class="reasonRadioBtn">
                <p style="grid-area: reasonT;color:rgb(134, 130, 130);">Select reason</p>
                <input style="grid-area:businessI;" type="radio" id="business" name="reason" onclick="JavaScript:closeResume();" value="Business Enquiry">
                <label style="grid-area:businessT;" for="business"  >Business Enquiry</label>
                <input style="grid-area:alliancesI;" type="radio" name="reason"  value="Allianices & Partnership" onclick="JavaScript:closeResume();" id="alliances">
                <label style="grid-area:alliancesT;" for="alliances">Alliances & Partnership</label>
                <input style="grid-area:careerI;" type="radio" name="reason" onclick="javascript:openResume();" value="Career Enquiry" id="career">
                <label style="grid-area: careerT;" for="career">Career Enquiry</label>
            </div>
            <div style="color:rgb(134, 130, 130);" class="form">
                <div style="grid-area:nameBox;" class="inputBox">
                    <input type="text" name="name" required>
                    <label for="name" class="label-name">
                        <span class="content-name">Name*</span>
                    </label>
                </div>
                <div style="grid-area:emailBox;" class="inputBox">
                    <input type="text" name="email" required>
                    <label for="email" type="email" class="label-name">
                        <span class="content-name">E-Mail*</span>
                    </label>
                </div>
                <div style="grid-area:contactBox;" class="inputBox">
                    <input type="text" name="contact">
                    <label for="contact" type="mobile" class="label-name">
                        <span class="content-name">Contact Number</span>
                    </label>
                </div>
                <div style="grid-area:descriptionBox;" class="inputBox">
                    <input type="text" name="message">
                    <label for="description" class="label-name">
                        <span class="content-name">Description</span>
                    </label>
                </div>
                <div style="grid-area:selectBox" id="selectBox" class="inputBox">
                    <select name="department" id="department">
                        <option value="IT">IT</option>
                        <option value="Sales">Sales</option>
                        <option value="HR">HR</option>
                    </select>
                    <label for="department" class="label-name">
                        <span class="content-name">Department</span>
                    </label>
                </div>
                <div style="grid-area:resumeBox" class="inputBox" id="resume">
                    <input type="file" name="resume">
                    <label for="resume" class="label-name">
                        <span class="content-name">Upload Resume</span>
                    </label>
                </div>
                <script type="text/JavaScript">
                    var resume = document.getElementById('resume');
                    var career = document.getElementById('career');
                    window.onload = function() {
                        resume.style.display = 'none';
                    }
                    function openResume(){
                        if(career.checked){
                            resume.style.display='block';
                        }else{
                            resume.style.display='none';
                        }
                    }
                    function closeResume(){
                        resume.style.display='none';
                    }
                </script>
               
                
                <input style="grid-area:submitBtn;" value="Submit" type="submit" name="submit" class="btn btn-primary btn-link mt-3 btn-contact">
                <div style="grid-area:captcha;"  class="g-recaptcha" data-sitekey="6LfqbOUUAAAAAKLiZCJhXVUTkwvRA9o3eW1JVnTY"></div>
               
                </form>
                <div class="status">
                    <?php
                        error_reporting(0);
                          
                         $user_name =$_POST['name'];
                         $phone = $_POST['contact'];
                         $user_email = $_POST['email'];
                         $user_msg = $_POST['message'];
                         $reason = $_POST['reason'];
                         $department = $_POST['department'];
                         $email_from = 'contact@deepiotics.com';
                         $to_email = 'contact@deepiotics.com';
                         $email_subject = "New form submission";
                                
                         $message = "Name : $user_name. \n".
                                    "Phone No : $phone. \n".
                                    "Email ID : $user_email. \n".
                                    "Reason : $reason. \n".
                                    "Department : $department. \n".
                                    "User Message : $user_msg.\n";
                                    
                         
                        $semi_rand = md5(time());
                        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

                        $headers = "From: $email_from";
                        $headers .="Reply to : $user_email";
                        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
                                    
                        if(isset($_POST['submit']) && $_POST['reason']!='Career Enquiry'){
                           
                            $body = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
                            $body .= "--{$mime_boundary}\n";
                            

                            $secretKey = "6LfqbOUUAAAAAKJprn5Ev-vHUvNqSo1seJuysTdK";
                            $responseKey = $_POST['g-recaptcha-response'];
                            $UserIP = $_SERVER['REMOTE_ADDR']; 
                            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
                            $response = file_get_contents($url);
                            $response = json_decode($response);

                            if($response->success)
                            {
                                if(mail($to_email,$email_subject,$body,$headers)){
                                    echo "Message sent succesfully :)";
                                }else{
                                    echo "<span>Failed to send the message</span>";
                                }
                            }
                            else{
                                echo "<span>Invalid captcha :( Please try again !</span>";
                            }
                        }
                        else if($_POST['submit'] && isset($_FILES['resume'])){
                            
                            if(!file_exists($_FILES['resume']['tmp_name']) || !is_uploaded_file($_FILES['resume']['tmp_name'])) {
                                die ('Resume is required !');
                            }
                            else{
                                $allowedExtensions = array("pdf", "doc", "docx", "jpeg", "jpg", "png", "csv", "xlsx", "txt");
                              
                                
                                $files = array();
                                foreach ($_FILES as $name => $file) {
                                    $file_name = $file['name'];
                                    $temp_name = $file['tmp_name'];
                                    $file_type = $file['type'];
                                    $path_parts = pathinfo($file_name);
                                    $ext = $path_parts['extension'];
                                    if (!in_array($ext, $allowedExtensions)) {
                                        die("File $file_name has the extensions $ext which is not allowed");
                                    }
                                    array_push($files, $file);
                                }

                                $body = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
                                $body .= "--{$mime_boundary}\n";
    
                                for ($x = 0; $x < count($files); $x++) {
                                $file = fopen($files[$x]['tmp_name'], "rb");
                                $data = fread($file, filesize($files[$x]['tmp_name']));
                                fclose($file);
                                $data = chunk_split(base64_encode($data));
                                $name = $files[$x]['name'];
                                $body .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                                        "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                                $body .= "--{$mime_boundary}\n";
                                 }
    
                                $secretKey = "6LfqbOUUAAAAAKJprn5Ev-vHUvNqSo1seJuysTdK";
                                $responseKey = $_POST['g-recaptcha-response'];
                                $UserIP = $_SERVER['REMOTE_ADDR']; 
                                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
                                $response = file_get_contents($url);
                                $response = json_decode($response);
    
                                if($response->success)
                                {
                                    if(mail($to_email,$email_subject,$body,$headers)){
                                        echo "Message sent succesfully with attatchement:)";
                                    }else{
                                        echo "<span>Failed to send the message with attatchement</span>";
                                    }
                                }
                                else{
                                    echo "<span>Invalid captcha :( Please try again !</span>";
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <!--------------------------------------------------------footer------------------------------------------------------------------------------>
    <footer>
        <div class="footer-services">
            <div class="footer-heading">
                <h3>Services</h3>
            </div>
            <div class="container-content">
                <div class="line"></div>
                <div class="footer-content">
                    <a href="#">
                        <h3>Artificial Intelligence</h3>
                    </a>
                    <a href="#">
                        <h3>Machine Learning</h3>
                    </a>
                    <a href="#">
                        <h3>Computer Vision</h3>
                    </a>
                    <a href="#">
                        <h3>Internet of things</h3>
                    </a>
                    <a href="#">
                        <h3>Research & Development</h3>
                    </a>
                    <a href="#">
                        <h3>QA & Testing</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-solutions">
            <div class="footer-heading">
                <h3>Solutions</h3>
            </div>
            <div class="container-content">
                <div class="line"></div>
                <div class="footer-content">
                    <a href="#">
                        <h3>Automated Govt ID Verification</h3>
                    </a>
                    <a href="#">
                        <h3>Prediction Model from Sensors data</h3>
                    </a>
                    <a href="#">
                        <h3>Voice Based Interactive Assessment Applications</h3>
                    </a>
                    <a href="#">
                        <h3>Computer Vision app for Visually Impaired</h3>
                    </a>
                    <a href="#">
                        <h3>Crowd Counting</h3>
                    </a>
                    <a href="#">
                        <h3>Automated License Number Plate Recognition</h3>
                    </a>
                    <a href="#">
                        <h3>AI based Currency Detection</h3>
                    </a>
                    <a href="#">
                        <h3>IoT Based Application Development</h3>
                    </a>
                    <a href="#">
                        <h3>QA and Testing</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-corporate">
            <div class="footer-heading">
                <h3>Corporate</h3>
            </div>
            <div class="container-content">
                <div class="line"></div>
                <div class="footer-content">
                    <a href="#">
                        <h3>Partner with us</h3>
                    </a>
                    <a href="#">
                        <h3>Engagement Models</h3>
                    </a>
                    <a href="#">
                        <h3>Tech solutions for startups</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-about">
            <div class="footer-heading">
                <h3>About</h3>
            </div>
            <div class="container-content">
                <div class="line"></div>
                <div class="footer-content">
                    <a href="#">
                        <h3>Our Story</h3>
                    </a>
                    <a href="#">
                        <h3>Teams</h3>
                    </a>
                    <a href="#">
                        <h3>Leadership</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-careers">
            <div class="footer-heading">
                <h3>Contact Us</h3>
            </div>
            <div class="container-content">
                <div class="line"></div>
                <div class="footer-content">
                    <h3>Address</h3>
                    <p>A-88, Vaibhav Nagar, <br> Indore 452016 (MP), INDIA</p> 
                    <h3>Email</h3>
                    <p>info@deepiotics.com <br> contact@deepiotics.com <br>Cell:+91-98263-24365</p>
                    <h3>Follow Us</h3>
                    <div class="socialMedia">
                        <div class="facebook">
                            <a href="https://www.facebook.com/Deepiotics-104288471209108/?modal=admin_todo_tour" target="_blank"><img src="social/facebook.svg" alt="facebook"></a>
                        </div>
                        <div class="linkedin">
                            <a href="https://www.linkedin.com/mwlite/company/deepiotics" target="_blank"><img src="social/linkedin.svg" alt="linkekdin"></a>
                        </div>
                        <div class="twitter">
                            <a href="https://mobile.twitter.com/Deepioticspvt/status/1246034138240413701" target="_blank"><img  src="social/twitter.svg" alt="twitter"></a>
                        </div>
                        <div class="instagram">
                            <a href="https://www.instagram.com/deepioticsai/" target="_blank"><img  src="social/instagram.svg" alt="instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--------------------------------------------------------------------footer over---------------------------------------------------------------->
</body>
</html>