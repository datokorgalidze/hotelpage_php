<?php
include 'var.php';

function generateNewsCards($times, $imageSrcArray, $titleArray, $descriptionArray, $linkTextArray) {
        $count = min(count($imageSrcArray), count($titleArray), count($descriptionArray), count($linkTextArray));
    
        for ($i = 0; $i < $count; $i++) {
            echo '<div class="news-card">
                    <img src="' . $imageSrcArray[$i] . '" alt="News Image">
                    <div class="newscard-content">
                    <h3 class="news-title card-title">' . $titleArray[$i] . '</h3>
                    <p class="news-p">' . $descriptionArray[$i] . '</p>
                    <a class="button cardbt" href="#">' . $linkTextArray[$i] . '</a>
                 </div>
             </div>';
        }
    }

    function NavigationMenu() {
        $navigationItems = [
            [
                'link' => '#',
                'name' => 'Our Hotels',
            ],
            [
                'link' => '#',
                'name' => 'Our Conferencing',
            ],
            [
                'link' => '#',
                'name' => 'our Company',
            ],
            [
                'link' => '#',
                'name' => 'Hotel Design',
            ],
            [
                'link' => '#',
                'name' => 'Careers',
            ],
        ];
    
        foreach ($navigationItems as $item) {
            echo '<li>
                    <a href="' . $item['link'] . '">' . $item['name'] . '</a>
                  </li>';
        }
    }


    function  Gallery() {
        $imageArray = [
            'image/image4.png',
            'image/image2.png',
            'image/image3.png',
            'image/imge1.png',
        ];
    
        foreach ($imageArray as $image) {
            echo '<img src="' . $image . '" alt="Image">';
        }
    }
    



    
    
