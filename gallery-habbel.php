<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Habbel School Gallery - Vidya Sagar Preschool';
    @include('layouts/head.php') ?>
</head>

<body>
    <?php @include('layouts/navbar.php') ?>
<div class="bgcolor-theme-blue py-5">
    <h1 class="text-color-white text-center">Preschool In Hebbal: Gallery</h1>
</div>

    <div class="container pt-4">
        <h2 class="t-color-theme-red text-center">Gallery</h2>
        <p class="text-center"><img src="./assets/img/icons/line-1.png" alt="below-header"></p>

        <div class="swiper galleryhabbel mb-5">
            <div class="swiper-wrapper mb-5 pb-4">

        
                <div class="swiper-slide">
                <a href="#">
                     <div class="school-gallery">
                        <img src="assets/img/gallery/blueday.jpg" alt="feature-img" />
                        <h5 class="t-color-theme-blue t-lg pt-2 text-center font-w-500 letter-spacing-1 school-featurename">Blue day</h5>
                    </div>
                </a>
                   
                </div>
          
                <div class="swiper-slide">
                <a href="#">
                       <div class="school-gallery">
                        <img src="assets/img/gallery/christmas.jpg" alt="feature-img" />
                        <h5 class="t-color-theme-blue t-lg pt-2 text-center font-w-500 letter-spacing-1 school-featurename">Christmas</h5>
                    </div>
                </a>
                 
                </div>

                <div class="swiper-slide">
                <a href="#">
                    <div class="school-gallery">
                        <img src="assets/img/gallery/sportsday.jpg" alt="feature-img" />
                        <h5 class="t-color-theme-blue t-lg pt-2 text-center font-w-500 letter-spacing-1 school-featurename">Sport Day</h5>
                    </div>
                </a>
                    
                </div>

                <div class="swiper-slide">
                <a href="#">
                     <div class="school-gallery">
                        <img src="assets/img/gallery/independenceday.jpg" alt="feature-img" />
                        <h5 class="t-color-theme-blue t-lg pt-2 text-center font-w-500 letter-spacing-1 school-featurename">Independence Day</h5>
                    </div>
                </a>
                   
                </div>

                <div class="swiper-slide">
                <a href="#">
                    <div class="school-gallery">
                        <img src="assets/img/gallery/yogaday.jpg" alt="feature-img" />
                        <h5 class="t-color-theme-blue t-lg pt-2 text-center font-w-500 letter-spacing-1 school-featurename">Yoga Day</h5>
                    </div>
                </a>
                    
                </div>

                <div class="swiper-slide">
                <a href="#">
                     <div class="school-gallery">
                        <img src="assets/img/gallery/redday.jpg" alt="feature-img" />
                        <h5 class="t-color-theme-blue t-lg pt-2 text-center font-w-500 letter-spacing-1 school-featurename">Red Day</h5>
                    </div>
                </a>
                   
                </div>

                <div class="swiper-slide">
                <a href="#">
                     <div class="school-gallery">
                        <img src="assets/img/gallery/varamahalakshmi.jpg" alt="feature-img" />
                        <h5 class="t-color-theme-blue t-lg pt-2 text-center font-w-500 letter-spacing-1 school-featurename">Varamahalakshmi</h5>
                    </div>
                </a>
                   
                </div>

                <div class="swiper-slide">
                <a href="#">
                    <div class="school-gallery">
                        <img src="assets/img/gallery/rakshabandana.jpg" alt="feature-img" />
                        <h5 class="t-color-theme-blue t-lg pt-2 text-center font-w-500 letter-spacing-1 school-featurename">Rakshabandan</h5>
                    </div>
                </a>
                    
                </div>

                <div class="swiper-slide">
                <a href="#">
                     <div class="school-gallery">
                        <img src="assets/img/gallery/lifehebbal.jpg" alt="feature-img" />
                        <h5 class="t-color-theme-blue t-lg pt-2 text-center font-w-500 letter-spacing-1 school-featurename">Life in Heabbel - Bhoopasandra</h5>
                    </div>
                </a>
                   
                </div>


            </div>

            <div class="swiper-pagination"></div>
        </div>

    </div>



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".galleryhabbel", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },

            breakpoints: {
                600: {
                    slidesPerView: 1,
                    spaceBetween: 5,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                998: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },

                998: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },


        });
    </script>

</body>

</html>