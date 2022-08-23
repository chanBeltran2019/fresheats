

<!DOCTYPE html>
    <html>
        <head>
     
        <!--title-->
            <title> Food Gallery </title>

         <!--metadata-->
            <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

        <!--linking to css-->
             <link rel="stylesheet" type="text/css" href="styles/gallery.css?<?php echo time(); ?>">

        <!--here will go icon-->
             <link rel="icon" href="assets/fresh_eats_logo.png" />

            
        <!--link to javascript-->
        <script defer src = "javascript/galleryscript.js"> </script>
        </head>

    
    <body class = "gallery-body">
    
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
 </div>
    <div>
        <h2 class = "gallery-head"> Fresh Eats Gallery </h2>
    </div>
    <div class = "gallery">
        <div class = "gallery-content">
            <img src="gallery/gallery1.jpg" />
            <img src="gallery/gallery2.jpg" />
            <img src="gallery/gallery3.jpg" />
            <img src="gallery/gallery4.jpg" />
            <img src="gallery/gallery5.jpg" />
            <img src="gallery/gallery6.jpg" />
            <img src="gallery/gallery7.jpg" />
            <img src="gallery/gallery8.jpg" />
            <img src="gallery/gallery9.jpg" />
            <img src="gallery/gallery10.jpg" />
            <img src="gallery/gallery11.jpg" />
            <img src="gallery/gallery12.jpg" />
        </div>
    </div>

   
       

</body>
</html>
  <!--php  gallery version
   ATTRIBUTION HERE : https://code-boxx.com/simple-php-gallery-from-folder/
        <div id = "gallery"> 
        $directory = __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR;
        $images = glob($directory . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
            foreach ($images as $i) {
            printf("<img src='gallery/%s'/>", basename($i));
    }
       -->