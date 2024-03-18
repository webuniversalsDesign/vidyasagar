<div class="container mt-2">
    <div class="row">


        <div class="swiper learn mb-5">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide">
                    <div class="position-relative touch">
                        <div class="image-box">
                            <img src="./assets/img/slide-1.avif" alt="">
                        </div>


                        <div class="hover-content">
                            <p class="hover-text font-w-500 t-sm text-justify">
                                At Vidyasagar Preschool, we're proud to introduce an interactive digitized lesson plan, revolutionizing early childhood education. Through innovative utilization of cutting-edge technology, our lesson plans are enriched with multimedia elements and captivating activities crafted to engage the curious minds of preschoolers. Harnessing digital platforms, animated videos, and interactive storytelling, our educators lead students through immersive learning journeys, creating a dynamic and participatory atmosphere. This groundbreaking approach not only deepens children's comprehension of diverse subjects but also nurtures their familiarity and confidence with technology, equipping them for the digitally driven world they will inherit in the future.
                            </p>
                        </div>
                    </div>
                    <div class="image-title">
                        <h5 class="text-center text-white">1.Interactive Digital Lesson Plan</h5>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="position-relative touch">
                        <div class="image-box">
                            <img src="./assets/img/slide-2.avif" alt="">
                        </div>


                        <div class="hover-content">
                            <p class="hover-text font-w-500 t-sm text-justify">
                                At Vidyasagar Preschool, we prioritize discovery and observation as fundamental pillars of early childhood education. Understanding the innate curiosity of young learners, we've meticulously designed an environment that fosters exploration and hands-on experiences. Through thoughtfully curated activities and open-ended play, children at Vidyasagar are empowered to observe their surroundings, pose questions, and embark on their own journeys of discovery. Whether it's exploring the natural world in our outdoor play area, conducting simple science experiments, or engaging in sensory activities, our preschool instils a profound sense of wonder and curiosity in every child.
                            </p>
                        </div>
                    </div>
                    <div class="image-title">
                        <h5 class="text-center text-white">2.Discover & Observations</h5>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="position-relative touch">
                        <div class="image-box">
                            <img src="./assets/img/slide-3.avif" alt="">
                        </div>


                        <div class="hover-content">
                            <p class="hover-text font-w-500 t-sm text-justify">
                                Vidyasagar Preschool is committed to offering enriching life experiences. We believe in providing children with a holistic developmental journey that encompasses cognitive, social, emotional, and physical growth. Through a diverse array of activities, we inspire curiosity, nurture creativity, and foster resilience in every child. Embracing the belief that life itself is a classroom, our preschool endeavours to equip children with the skills and confidence they need to thrive.
                            </p>
                        </div>
                    </div>
                    <div class="image-title">
                        <h5 class="text-center text-white">3.Real Life Experiences</h5>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="position-relative touch">
                        <div class="image-box">
                            <img src="./assets/img/slide-2.avif" alt="">
                        </div>


                        <div class="hover-content">
                            <p class="hover-text font-w-500 t-sm text-justify">
                                At Vidyasagar Preschool, we recognize the profound impact of storytelling and demonstrations in sparking imagination and facilitating meaningful learning experiences. Our educators skilfully weave together a tapestry of carefully selected narratives, blending traditional wisdom with contemporary tales to captivate young minds. These stories not only enhance language skills but also instil essential values and life lessons.<br>
                                Through the power of stories and demonstrations, Vidyasagar Preschool strives to cultivate curiosity, critical thinking, and a lifelong passion for learning in our students. By fostering a foundation that transcends textbooks, we aim to inspire a deeper connection with knowledge and the world around us.
                            </p>
                        </div>
                    </div>
                    <div class="image-title">
                        <h5 class="text-center text-white">4.Stories & Demonstrations</h5>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="position-relative touch">
                        <div class="image-box">
                            <img src="./assets/img/slide-5.avif" alt="">
                        </div>


                        <div class="hover-content">
                            <p class="hover-text font-w-500 t-sm text-justify">
                                At Vidyasagar Preschool, games play an integral role in our educational approach, seamlessly blending learning with playfulness. Our games are intentionally crafted to reinforce foundational concepts in a fun and interactive manner, promoting cognitive, social, and emotional development. Whether through board games that stimulate critical thinking or outdoor activities that foster teamwork and motor skills, each game at Vidyasagar serves a dual purpose: to entertain and to educate.
                                <br>
                                Through the strategic integration of games, Vidyasagar Preschool ensures that the formative years of education are not only academically enriching but also filled with joy and memorable experiences.

                            </p>
                        </div>
                    </div>
                    <div class="image-title">
                        <h5 class="text-center text-white">5.The Use of Games</h5>
                    </div>
                </div>



            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiperLearn = new Swiper(".learn", {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
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
            },
        });

        // Pause autoplay on Learn swiper container hover
        var swiperContainerLearn = document.querySelector('.learn');
        swiperContainerLearn.addEventListener('mouseenter', function() {
            swiperLearn.autoplay.stop();
        });

        swiperContainerLearn.addEventListener('mouseleave', function() {
            swiperLearn.autoplay.start();
        });
    });
</script>