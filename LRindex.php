<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="LRstyle.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&family=Merriweather:wght@300&family=Montserrat:wght@700&family=Open+Sans:wght@600&family=Playpen+Sans:wght@500&family=Young+Serif&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Team Work SKILLWILL</title>
</head>
<body>
    <?php include "backend.php" ?>
    <!-- header section starts -->
    <header>
        <h1>
        <a href=""><img src="img/Travel Goo.png" alt=""></a>
        </h1>
        <nav>
            <a href="">Home</a>
            <a href="">About Us</a>
            <a href="">Pakages</a>
        </nav>
        <div class="icons">
        <a href=""><img src="img/star.png" alt=""></a>
        <a href=""><img src="img/user prifile.png" alt=""></a>
        </div>
    </header>
    <!-- header section finish -->

    <!-- section your imagination starts-->
    <section class="you_imagination">
        <h1>Your Imagination Is <br>
            Your Only Limit</h1>
            <p>We always try to make our customer Happy. We provide all kind of facilities. <br>
                Your Satisfaction is our main priority</p>
                <div class="Discover_more">Discover more</div>
    </section>
    <!-- section your imagination finish -->
    <!-- section Our Service start -->
    <section class="Our_Service">
        <h2>Our Service</h2>
        <div class="Our_Service_blocks">
<?php
    foreach ($services as $service){
        echo '
        <div class="Ticket_Booking">
        <img src="'. $service['img'] .'" alt="">
        <h3>'. $service['h3'] .'</h3>
        <p>We book all kind of national or international<br>
            ticket for your destinaion.</p>
    </div>
        ';
    }
?>

        <!-- <div class="Ticket_Booking">
            <img src="img/Vector.png" alt="">
            <h3>Ticket Booking</h3>
            <p>We book all kind of national or international<br>
                ticket for your destinaion.</p>
        </div> -->

        <!-- <div class="Hotel_Booking">
            <img src="img/carbon_hotel.png" alt="">
            <h3>Hotel Booking</h3>
            <p>We book all kind of national or international<br>
                ticket for your destinaion.</p>
        </div>

        <div class=" Tour_Plan">
            <img src="img/isari.png" alt="">
            <h3> Tour Plan</h3>
            <p>We book all kind of national or international<br>
                ticket for your destinaion.</p>
        </div> -->
        </div>
    </section>
    <!-- section Our Service finish -->

    <!-- section We always try to give you  starts -->
    <section class="We_always_try_to_give_you">
        <h2>We always try to give you <br>
            the best service</h2>
            <p class="We_always_try_to_give_you_p">We always try to make our customer Happy. We provide all kind of<br>
                facilities. Your Satisfaction is our main priority.</p>
                <div class="We_always_try_to_give_you_blocks">
                    <div class="calendar">
                        <img src="img/simple-line-icons_calender.png" alt="">
                        <h3>15+</h3>
                        <p>Years of <br>
                            Experience</p>
                    </div>

                    <div class="diagram">
                        <img src="img/ant-design_bar-chart-outlined.png" alt="">
                        <h3>15k+</h3>
                        <p>Happy <br>
                            Travellers</p>
                    </div>

                    <div class="location">
                        <img src="img/carbon_map.png" alt="">
                        <h3>650+</h3>
                        <p>Peace Keepers</p>
                    </div>

                    <div class="gridicon">
                        <img src="img/gridicons_history.png" alt="">
                        <h3>2k+</h3>
                        <p>Travel History</p>
                    </div>
                </div>
    </section>
    <!-- section We always try to give you  finish -->

     <!-- section our_popular_distinations  starts -->
    <section class="our_popular_distinations">
        
            <h2> Our Popular Distinations </h2>
            <div class="worldmap">
            <img src="img/world_map_PNG28 2.png" alt="world_map_PNG28 2">
            <div class="distinations">

            <div class="distinations-card">
                <img src="img/rectangle-15.png" alt="">
                <p>Thailand </p>  <br>

                <h3>20+ Spots <br>
                     2D & 3N</h3>
                    </div>

            <div class="distinations-card">
                 <img src="img/rectangle-16.png" alt="">
                     <p>Indonesia </p> 

                    <h3>25+ Spots <br>
                        3D & 3N</h3>
                        </div>    
            <div class="distinations-card">
                <img src="img/rectangle-17.png" alt="">
                    <p>New Zealand </p>
                    
                    <h3>20+ Spots <br>
                        3D & 2N</h3>
                        </div>     


            </div>

        </div>
    </div>
    </section> 
    <!-- section our_popular_distinations  finish -->

    <!-- section  best_packages_for_you starts-->
<section class="best_packages_for_you">
    <h2> Best Packages For You</h2>
    <div class="container">

    <div class="best-packages-for-you-buttons">   
        <div class="Discover_more_1">Hot Deals</div>
        <div class="Discover_more_1">Backpack</div>
        <div class="Discover_more_1">South Asia </div>
        <div class="Discover_more_1">Honeymoon</div>
        <div class="Discover_more_1">Europe</div>
        <div class="Discover_more_1">More</div>
     
</div>
<div class="best-packages">

<div class="best-packages-card">
    <img src="img/rectangle-25.png" alt="">
    <h3> 3 Days, 2 NIghts </h3> 
    <h3> $500 / Person</h3> 
    <p> Explore the Beauty of the island for 3 days and 2 nights with our travel agency</p>
    <img src="img/ep_location.png" alt="">
    <p>  Indonesia</p>
    <p> Know More</p> 
</div>

<div class="best-packages-card">
    <img src="img/rectangle-26.png" alt="">
    <h3>3 Days, 2 NIghts </h3>
    <h3> $800 / Person</h3>
    <p> Japan</p>
    <img src="img/ep_location.png" alt="">
    <p> </p>
    <p>Know More </p> 
</div>

    <div class="best-packages-card">
        <img src="img/rectangle-27.png" alt="">
        <h3>3 Days, 2 NIghts </h3>
        <h3> $600 / Person</h3>
        <p> </p>
        <img src="img/ep_location.png" alt="">
        <p> Mountains</p>
        <p> Know More</p> 
    </div>
</div>
    

</div>
<div class="Discover_more">Discover More </div>
</div>

</section>

<!-- section Best Packages For You  finish -->


<!-- section book_your_next_trip_in_3_easy_steps starts -->

<section class="book_your_next_trip_in_3_easy_steps">
    <h2>Book Your Next Trip in 3 Easy Steps</h2>
    <h3>Easy and Fast</h3>
    <div class="container">

<img src="img/group-590.png" alt="">
    </div>

</section>

<!-- section book_your_next_trip_in_3_easy_steps finish -->

<!-- section What People Say About Us starts -->
<section class="What_People_Say_About_Us">
    <img src="img/Group 591.png" alt="">

    <div class="contact_section">
        <h2>Subscribe to get information, latest news and other<br>
            interesting offers about Cobham</h2>
            <img src="img/Group 77.png" alt="">
            <form>
                <input type="text" name="text" placeholder="Your Email">
            </form>
            <div class="subscribe">SUBSCRIBE</div>
    </div>
</section>

<!-- section What People Say About Us finish -->


<!-- footer starts -->
<footer>
    <img src="img/footer imgs/Travel Goo.png" alt="">
    <img src="img/footer imgs/Nav Columns.png" alt="">
    <img src="img/footer imgs/Outbound.png" alt="">
</footer>

<!-- footer finish -->


</body>
</html>


