<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
      .menu .subcategory{
            display: none;
            position: absolute;
     }
     .menu:hover  .subcategory {
            display: block;
}
   .menu{
    list-style: none;
   }
    </style>
    <?php require "var.php"; ?>
    <title>Bon hotel</title>
</head>
<body>
    <header>
        <div class="conteiner">
            <div class="header">
            <a href="#"><img src="image/download 1.png" alt="logo"></a>
            <nav class="navigation">
                <?php  foreach($menu as $category){
                    echo ' <li class="menu"><a class="nav new" href="'. $category['link'] .'"> '. $category['name'] .' </a>
                    <ul class ="subcategory">';
                    foreach($category['subcategories'] as $subcaregory){
                        echo '<li>
                           <a class="nav" href =" '. $subcaregory['link'] .'" > ' . $subcaregory['name']  .' </a>
                        </li>';
                    }
                  
                   echo '</ul>
                    </li>';
                } ?>
                
                
            </nav>
        </div>
        </div>
    </header>
    <section class="section1">
        <div class="section1-content">
         <h1 class="maintitle">WELCOME TO BON HOTEL</h1>
         <p class="mainparagraf">
            Good people. Good thinking. Good feeling.
         </p>
         <a class="button" href="#">EXPLORE</a>
        </div>
    </section>
    <section class="section2">
        <div class="conteiner2">
            <h2 class="secodary-title">
                Rooms & Rates
            </h2>
           
        <div class="galery">
            <?php 
              for ( $i = 0; $i < sizeof($cards); $i++){
                echo ' 
                <div class="card">
                  <img src=" ' . $cards[$i]['image'] .' " alt="img1">
                  <div class="overly"></div>
                <div class="card-cont">
                    <h3 class="card-title">
                     ' . $cards[$i]['title'] .'
                    </h3>
                    <a class="button cardbt" href="#">
                        Check Rates
                    </a>
                </div>
            </div>';
        }
            ?>

            
 </div>
</section>
<section class="section3">
    <div class="contact">
        <h2>
            Get a room already!
        </h2>
        <a class="button" href="#">
            Book Now
        </a>
    </div>
</section>
<footer>
    <div class="conteiner-footer" id="conteiner-footer">
        <div class="logo">
            <a href="#"><img src="image/logofooter.png" alt=""></a>
        </div>
        <div class="list">
            <nav class="footer-nav">
                <ul>
                    <?php
                      foreach ($footerNavigation as $category) {
                                echo '<li>
                                        <a href="' . $category['link'] . '">' . $category['name'] . '</a>
                                     </li>';
                            } 
                    ?>
                   
                </ul>
            </nav>
        </div>
        <div class="contact-footer">
            <h5>Bon Hotels Head Office </h5>
            <p class="number">
                +27 434 344 432 
            </p>
            <p class="number">info@bonhotels.com</p>
        </div>
    </div>
</footer>
 
    
</body>
</html>