<?php
include("database.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--title of webpage-->
    <title> Account Creation</title>

    <!--metadata-->
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

    <!--linking to css-->
    <link rel="stylesheet" type="text/css" href="styles/accountforms.css?<?php echo time(); ?>">

    <!--here will go icon-->
    <link rel="icon" href="assets/fresh_eats_logo.png" />


</head>

<body>

    <div class="fresh-eats">
        <div class= "container">
            <header class="center-header">
                <img class= "title-logo" src = "../assets/fresh-eats-title.png">
                <h2 class="fresh-eats-login-h2"> Fresh, as food should be.</h2>
            </header>
        </div>
            <div class = "center-form">
                <form class="loginform" action="" method="post" name="account creation">
                    <fieldset>
                        <legend> Create Account</legend>
                        <?php include("errors.php")?>

                        <div id="username">
                            <label for="username"> Username </label> <br>
                            <input id="username" type="text" name="username" value="" placeholder = "Username" />
                        </div>


                        <div id="email_address">
                            <label for="emailaddress"> Email Address </label> <br>
                            <input id="emailaddress" type="text" name="emailaddress" value="" placeholder = "Email Address" />
                        </div>

                        <div id="password">
                            <label for="password"> Password</label> <br>
                            <input id="password" type="password" name="password" value="" placeholder = "Password"/>
                        </div>

                        <div id="password2">
                            <label for="password2"> Confirm Password</label> <br>
                            <input id="password2" type="password" name="password2" value="" placeholder = "Password"/>
                        </div>

                        <div id="submit">
                            <br>
                            <input class = "login-btn" id="submit" type="submit" name="submit" value="Submit" />
                        </div>
                        <span class = "span-link">Already have an account?</span>
                    <a class= "php_links" href = "index.php">  Sign in here.</a>
                    </fieldset>
                   
                </form>
            </div>
<div class = "phone-footer">

<nav>
    <ul>
        <li ><a class = "categories" href = "#">Locations <span class = "arrow"></span></a>
            <ul>
                <li> <a href="#"> Orlando</a></li>
                <li> <a href="#"> Kissimee</a></li>
                <li> <a href="#"> Jacksonville</a></li>
            </ul>
        </li>
        <li ><a class = "categories"href = "#">Our Company <span class = "arrow"></span></a>
            <ul>
                <li> <a href="#"> About Us</a></li>
                <li> <a href="#"> Careers</a></li>
                <li> <a href="#"> Press</a></li>
            </ul>
        </li>
        <li ><a class = "categories" href = "#">Attributions <span class = "arrow"></span></a>
            <ul>
                <li> <a href="#"> Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> </a></li>
                <li> <a href="#"> Careers</a></li>
                <li> <a href="#"> Press</a></li>
            </ul>               
        </li>
    </ul>
</nav>       
</div>
</div>

</body>

</html>

