 <!-- Swiper -->
 <div class="swiper mySwiper">
     <div class="swiper-wrapper">
         <div class="swiper-slide">
             <div class="banner">
                 <img src="assets/img/banner/b1.avif" alt="banner-image" />
             </div>
         </div>

         <div class="swiper-slide">
             <div class="banner">
                 <img src="assets/img/banner/b2.avif" alt="banner-image" />
             </div>
         </div>

     </div>
     <div class="swiper-button-next"></div>
     <div class="swiper-button-prev"></div>
 </div>

 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
 <script>
     var swiper = new Swiper(".mySwiper", {
         grabCursor: true,
         autoplay: {
             delay: 2500,
             disableOnInteraction: false,
         },
         effect: "creative",
         loop: true,

         navigation: {
             nextEl: ".swiper-button-next",
             prevEl: ".swiper-button-prev",
         },

         creativeEffect: {
             prev: {
                 shadow: true,
                 translate: ["-20%", 0, -1],
             },
             next: {
                 translate: ["100%", 0, 0],
             },
         },


     });
 </script>