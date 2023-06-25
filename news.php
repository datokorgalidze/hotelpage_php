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
          <?php  
                include 'function.php';
                include 'var.php';
            ?>
            <title>Rooms & Rates</title>
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
    <main>
        <section class="section-news1">
            <div class="conteiner">
                <h2 class="news-secondary-title">Rooms & Rates</h2>
                <div class="news-list">
                <?php
                     error_reporting(E_ALL);
                     ini_set('display_errors', 1);

                     generateNewsCards(4, $imageSrcArray, $titleArray, $descriptionArray, $linkTextArray);
             ?>

           </div>
      </div>

            </section>
                <section class="section-news2">
                    <div class="conteiner">
                        <h2 class="news-secondary-title">Gallery </h2>
                    
                        <div class="news-gallery">

                            <?php
                            Gallery();
                            ?>
                    <!-- <img src="image/image4.png" alt="img1">
                    <img src="image/image2.png" alt="img2">
                    <img src="image/image3.png" alt="img3">
                    <img src="image/imge1.png" alt="img4"> -->
                </div>
            </div>

        </section>
    </main>
    <footer>
        <div class="conteiner-footer" id="conteiner-footer">
            <div class="logo">
                <a href="#"><img src="image/logofooter.png" alt=""></a>
            </div>
            <div class="list">
                <nav class="footer-nav">
                    <ul>
                        <?php          
                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);

                        NavigationMenu();
              
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
             </div>
        </footer>
     
        
    </body>
    </html>