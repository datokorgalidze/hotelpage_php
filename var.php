<?php


$cards = [
    [
        'title' => 'stundart rooms',
        'image' => 'image/FqqiAvJejto.png'
    ],   
   
    [
        'title' => ' Standard View Room',
        'image' => 'image/image2.png'
    ],
    [
        'title' => ' Deluxe Room',
        'image' => 'image/image3.png'
    ],
    [
        'title' => ' Deluxe Room',
        'image' => 'image/image4.png'
    ]

    ];


    $menu = [
        [
            'link'=> './index.php',
            'name'=> 'Our hotel',
             'subcategories'=> [
                [
                    'link'=> 'https://www.booking.com/index.en.html?aid=309654;label=hotels-english-en-emea-IwkOQ1YDPGpnfX*lZFVyMQS166197677757:pl:ta:p1:p22,563,000:ac:ap:neg:fi:tikwd-11212371:lp1007469:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YcsZ-Id2vkzIfTmYhvC5HOg;ws=&gclid=CjwKCAjwv8qkBhAnEiwAkY-ahr_ysCQCYY1_q13g-T8OLrA7GuaA4wNRdW1rQror0JlnQ1CcTtf1ihoC_DwQAvD_BwE',
                    'name'=> 'HOTELS'
                ],
                [
                    'link'=> '/2',
                    'name'=> 'others'   
                ],
                [
                    'link'=> '/3',
                    'name'=> 'images'   
                ]
            ],

        ],
        [
            'link'=> './news.php',
            'name'=> 'Rooms & Rates',
            'subcategories'=>[]  
        ],
        [
            'link'=> '/Facilities',
            'name'=> 'Facilities',
            'subcategories'=>[]
        ],
        [
            'link'=> '#conteiner-footer',
            'name'=> 'Contact Us',
            'subcategories'=>[]
        ]
    ];
      
   

    
    $imageSrcArray = [
        'image/imge1.png',
        'image/image2.png',
        'image/image3.png',
        'image/image4.png'
    ];
    
    $titleArray = [
        'Standard Twin Room',
        'Deluxe Suite',
        'Family Room',
        'Executive Suite'
    ];
    
    $descriptionArray = [
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    ];
    
    $linkTextArray = [
        'Check Rates',
        'View Details',
        'Book Now',
        'Learn More'
    ];


    $footerNavigation = [
        [
            'link' => './news.php',
            'name' => 'Our hotels',
        ],
        [
            'link' => './news.php',
            'name' => 'Our Conferencing',
        ],
        [
            'link' => './news.php',
            'name' => 'our Company',
        ],
        [
            'link' => './news.php',
            'name' => 'Hotel Design',
        ],
        [
            'link' => './news.php',
            'name' => 'Careers',
        ]
    ];
    
   
    
   
   
?>
