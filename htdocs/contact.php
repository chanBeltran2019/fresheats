<!DOCTYPE html>
<html lang="en">

<head>
    <!--title of webpage-->
    <title> Contact Us</title>

    <!--metadata-->
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

    <!--linking to css-->
    <link rel="stylesheet" type="text/css" href="styles/contact.css?<?php echo time(); ?>">

    <!--here will go icon-->
    <link rel="icon" href="assets/fresh_eats_logo.png" />




</head>

<body>



<nav class = "navbar">
        <div class = "nav-title">
        <img class= "title-logo" src = "../assets/fresh-eat-nav-logo.png">
        </div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        
        <div class = "navbar-links">
            <ul>
                <li> <a href="main.php">Home </a> </li>
                <li> <a href="">Recipies</a> </li>
                <li> <a href="">About</a> </li>
                <li> <a href="contact.php">Contact</a> </li>
                <li class = "no-underline"><a class = "sign-in-link"href = "index.php"> Login </a> </li>
            </ul>
        </div>
    </nav>

    <div class="grid">

        <div class="contact-head-cont">
            <header class="contact-head">
                <h1> Contact us</h1>
                <h2> Have any questions or concerns? Leave us a message and your email and our team will happily reply to you in a timely manner. </h2>
            </header>
        </div>  
        <!--this is where I need a form-->
        <div class="form-container"> 
         <main>
             <div class= "form-positioning">
            <form action="php/process.php" method="post" name="contactInfo">
                <fieldset>
                    <legend> Necessary Information</legend>

                    <div id="first_name">
                        <label for="first_name"> First Name </label> <br>
                        <input id="first_name" type="text" name="first_name" value="" />
                    </div>
                    <div id="email_address">
                        <label for="email_address"> Email Address </label> <br>
                        <input id="email_address" type="text" name="email_address" value="" />
                    </div>
                    <div id="phone_number">
                        <label for="phone_number"> Contact Number (optional) </label> <br>
                        <input id="phone_number" type="text" name="phone_number" value="" />
                    </div>
                    <div id="message">
                        <label for="message"> Leave a Message </label> <br>
                        <textarea id="message" name="message" rows="10" columns="30"> </textarea>
                    </div>
                    <div id="submit">
                        <br>
                        <input id="submit" type="submit" name="submit" value="Submit" />
                    </div>
                </fieldset>
            </form>
            </div>
        </div>
        </main>

        <footer>
        <div class = "phone-footer">

    <nav class = "footer-nav">
        <ul>
         <li><a class = "categories" href = "#">Locations <span class = "arrow"></span></a>
                <ul>
                    <li> <a href="#"> Orlando</a></li>
                    <li> <a href="#"> Kissimee</a></li>
                    <li> <a href="#"> Jacksonville</a></li>
                </ul>
            </li>
            <li><a class = "categories"href = "#">Our Company <span class = "arrow"></span></a>
                <ul>
                    <li> <a href="#"> About Us</a></li>
                    <li> <a href="#"> Careers</a></li>
                    <li> <a href="#"> Press</a></li>
                </ul>
            </li>
            <li><a class = "categories" href = "#">Attributions <span class = "arrow"></span></a>
                <ul>
                    <li> <a href="#"> Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> </a></li>
                    <li> <a href="#"> Careers</a></li>
                    <li> <a href="#"> Press</a></li>
                </ul>               
            </li>
        </ul>
          <!-- <h3> Social</h3>
                <img src="assets/instagram.png" alt="insta logo" />
                <img class="specialPNG" src="assets/youtube.png" alt="youtube logo" />
                <img src="assets/facebook.png" alt="facebook logo" />-->
        </nav> 
     </footer>     
    </div>
   </div>
</body>
</html>