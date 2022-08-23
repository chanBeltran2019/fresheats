<?php
include ('database.php')?>

<!DOCTYPE html>
    <html>
        <head>

        <!--title-->
            <title>Delete Fresh Account </title>

         <!--metadata-->
            <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

        <!--linking to css-->
             <link rel="stylesheet" type="text/css" href="styles/accountforms.css?<?php echo time(); ?>">

        <!--here will go icon-->
             <link rel="icon" href="assets/fresh_eats_logo.png" />
        </head>

    <body>
     <div class="fresh-eats">
        <div class="container">
            <header class = "center-header">
                <img class= "title-logo" src = "../assets/fresh-eats-title.png">
                <h2 class="fresh-eats-login-h2"> Fresh, as food should be.</h2>
            </header>
        </div> 
        <div class = "center-form">
            <?php include('errors.php');?>
            <form class="loginform" action ="" method="post">
                 <fieldset>
                    <legend> Delete Account</legend>
                    <div>
                        <label for="username"> Username </label> <br>
                        <input type = "text" name = "username" value = "" placeholder = "Username">
                    </div>
                    <div>
                        <label for="password"> Password </label> <br>
                        <input type = "password" name = "password" value = "" placeholder = "Password">
                    </div>
                    <div id="submit">
                    <br>
                        <button class = "login-btn"><a class= "no-style-links" href = "index.php" name="deleteaccount"> Delete Account</button>
                    </div>
                    <div id="submit">
                    <br>
                        <button class = "login-btn"> <a class= "no-style-links" href = "index.php"> Back to Home</a></button>
                    </div>
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

