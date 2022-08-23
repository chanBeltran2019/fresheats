<?php
include ("database.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title> Fresh Eats</title>

    <!--metadata-->
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

    <!--linking css-->
    <link rel="stylesheet" type="text/css" href="styles/homestyle.css?<?php echo time(); ?>">


    <!--create an icon below-->
    <link rel="icon" href="assets/fresh_eats_logo.png" />

</head>

<body>
  <?php 
  if (isset($_SESSION["loggedin"])) { ?>


        <button class = "login-btn"><a class= "php_links" href="logout.php">Logout</a> </button>
        <button class = "login-btn"><a class= "php_links" href="delete_account.php"> Delete Account</a></button> 
    <?php
    } ?>

    
      
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
                <li> <a href="#">Home </a> </li>
                <li> <a href="">Recipies</a> </li>
                <li> <a href="">About</a> </li>
                <li> <a href="contact.php">Contact</a> </li>
                <li class = "no-underline"><a class = "sign-in-link"href = "index.php"> Login </a> </li>
            </ul>
        </div>
    </nav>
 <?php 
        echo '<script type = "text/javascript">
        const toggleButton = document.getElementsByClassName("toggle-button")[0]
        const navbarLinks = document.getElementsByClassName("navbar-links")[0]
    
        toggleButton.addEventListener("click", () => {
        navbarLinks.classList.toggle("active")
    })
    </script>';
    ?>

    <div>

        <div>
            <header class="fresh-eats">
                <h1> Fresh Eats</h1>
                <h2> Fresh, as food should be.</h2>
            </header>
        </div>

        <div class="intro">
            <main>
                <section class="fresh-description">
                    <article>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus itaque placeat incidunt,
                             doloribus minus ipsa eligendi, suscipit dolorem dolorum
                            <span class = "bold">lorem ipsum dolor.</span><p>
                    </article>
                </section>
        </div>

        <div class="meal-plans">
            <section class="meal-descriptions">
                <article>
                    <h2 class = "offers-text"> What do we have to offer?</h2>
                    <div class = "offers">
                        <div class = "assets">
                            <div class = "inside-assets">
                                <div class = "picture">
                                    <img class = "assets-pic"src = "../assets/whole.png"/>
                                </div>
                                <p> Recieve wholesome meals three times a day.</p>
                                <figcaption>Icons made by <a href="https://www.flaticon.com/authors/photo3idea-studio" title="photo3idea_studio">photo3idea_studio</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></figcaption>
                            </div>
                        </div>
                            
                        <div class = "assets">
                            <div class = "inside-assets">
                                <div class = "picture">
                                    <img class  = "assets-pic"src = "../assets/variety.png"/>
                                </div>
                                <p> There are so many different variations of cuisine.</p>
                                <figcaption>Icons made by <a href="https://www.flaticon.com/authors/monkik" title="monkik">monkik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></figcaption>
                            </div>
                        </div>

                        <div class = "assets">
                            <div class = "inside-assets">
                                <div class = "picture">
                                    <img class = "assets-pic" src = "../assets/affordable.png"/>
                                </div>
                                <p> Fresh food at an affordable price.</p>
                                <figcaption>Icons made by <a href="https://www.flaticon.com/authors/becris" title="Becris">Becris</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></figcaption>
                            </div>
                        </div>

                        <div class = "assets">
                            <div class = "inside-assets">
                                <div class = "picture">
                                    <img  class = "assets-pic"src = "../assets/commitment.png"/>
                                </div>
                                <p> No long term commitment, cancellation is easy.</p>
                                <figcaption><div>Icons made by <a href="https://www.flaticon.com/authors/srip" title="srip">srip</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div></figcaption>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        
    <div class = "flex-calander">
        <div class = "calander">
            <div class = "sneak-peak">
                <section>
                    <article>
                        <h2 class = "flex-head">Want a peak at this weeks meal plan? </h2>
                        <p class = "flex-sub">View all the delicious foods you could be whipping up this week.</p> 
                    </article>
            </div>
            <div class = "meal-plan-button">
                <a href = "reservation.php"> Meal Plan</a>
            </div>
            </section>
        </div>
    </div>
        <div class = "flex-meals">
            <div class = "gallery-container">
                <div class = "gallery-head-container">
                    <section>
                        <article>
                            <h2 class = "flex-head">View our mouth watering meals</h2>
                            <p class = "flex-sub">Breakfast to dessert, we have it all.</p>
                        </article>
                </div>
            <div class = "gallery-photos">
                <div class = "position-rel">
                    <div class= "photo-container">
                        
                            <input type= "radio" name = "radio-button" id = "radio1">
                            <input type= "radio" name = "radio-button" id = "radio2">
                            <input type= "radio" name = "radio-button" id = "radio3">
                            <input type= "radio" name = "radio-button" id = "radio4">

                        <div class="photo-width first">
                            <div class = "photos">
                                <img class = "photo-size" src = "../assets/Breakfast_medium.jpg"> 
                                <div class = "text-hover">
                                    <div class = "styling-span"><span class = "text-1"> Breakfast</span></div>
                                </div>
                            </div>
                        </div>
                            <div class = "photo-width">
                                <div class = "photos">
                                    <img class = "photo-size" src = "../assets/Lunch_medium.jpg">
                                    <div class = "text-hover">
                                        <div class = "styling-span"><span class = "text-1"> Lunch</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class = "photo-width">
                                <div class = "photos">
                                    <img class = "photo-size" src = "../assets/Dinner_medium.jpg">
                                    <div class = "text-hover">
                                        <div class = "styling-span"><span class = "text-1"> Dinner</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class = "photo-width">
                                <div class = "photos">
                                    <img class = "photo-size" src = "../assets/Dessert_medium.jpg">
                                    <div class = "text-hover">
                                        <div class = "styling-span"><span class = "text-1"> Dessert</span></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class = "slider-container">
                        <div class = "navigation">
                            <label for = "radio1" class = "nav-btn"></label>
                            <label for = "radio2" class = "nav-btn"></label>
                            <label for = "radio3" class = "nav-btn"></label>
                            <label for = "radio4" class = "nav-btn"></label>
                        </div>
                        <div class = "gallery-btn"><a href = "gallery.php"> View Gallery</a></div>
                    </div>
                </div>
            </div>
                </section>
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
            </nav>       
        </div>
    </footer>


        

              <!--  <h3> Social</h3>
                <img src="assets/instagram.png" alt="insta logo" />
                <img class="specialPNG" src="assets/youtube.png" alt="youtube logo" />
                <img src="assets/facebook.png" alt="facebook logo" />-->
          

    </div>

</body>

</html>