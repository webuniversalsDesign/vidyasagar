<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Curriculum - Vidya Sagar Preschool';
    @include('layouts/head.php') ?>
</head>

<body>
    <?php @include('layouts/navbar.php') ?>

    <section class="curri-banner">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <h1 class="banner-title text-center">Academics</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="numeracy">
        <div class="container">
            <h2 class="text-center t-color-theme-red mt-2">Numeracy</h2>
            <p class="text-center"><img src="./assets/img/icons/line-1.png" alt=""></p>
            <p class="text-center">
                Our mathematics curriculum extends beyond the mere teaching of mathematical concepts; it emphasizes the practical application of math in everyday situations. Through our approach, we foster the development of spatial awareness, problem-solving abilities, visual discrimination, and critical thinking skills in children.
            </p>
            <div class="row">
                <div class="col-md-3 py-md-2 py-4">
                    <div class="curriculum-image">
                        <img src="./assets/img/lang1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-md-2 py-4">
                    <div class="curriculum-image">
                        <img src="./assets/img/lang2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-md-2 py-4">
                    <div class="curriculum-image">
                        <img src="./assets/img/lang3.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-md-2 py-4">
                    <div class="curriculum-image">
                        <img src="./assets/img/lang4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="literacy mt-3">
        <div class="container">
            <h2 class="text-center t-color-theme-blue mt-2">Literacy</h2>
            <p class="text-center"><img src="./assets/img/icons/line-1.png" alt=""></p>
            <p class="text-center">
                Our literacy program is dedicated to comprehensive language development, transitioning children from learning to read to reading to learn. Through enriching vocabulary, emphasizing phonics, and promoting interactive storybook reading, we cultivate confident readers and foster creative thinkers.
            </p>
            <div class="row">
                <div class="col-md-3 py-md-2 py-4">
                    <div class="curriculum-image">
                        <img src="./assets/img/culture.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-md-2 py-4">
                    <div class="curriculum-image">
                        <img src="./assets/img/evs1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-md-2 py-4">
                    <div class="curriculum-image">
                        <img src="./assets/img/evs4.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-md-2 py-4">
                    <div class="curriculum-image">
                        <img src="./assets/img/faculty.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="envi mt-3">
        <div class="container">
            <h2 class="text-center t-color-theme-blue mt-2">Environmental Science</h2>
            <p class="text-center"><img src="./assets/img/icons/line-1.png" alt=""></p>
            <p class="text-center">
                Our exceptional Environmental Science (EVS) program stands out as a cornerstone of our curriculum. Our innovative staff adeptly transforms complex topics into engaging and accessible lessons for children. Through hands-on learning experiences, our students actively explore, investigate, and immerse themselves in the world around them. We place a strong emphasis on socio-emotional learning and fostering a deep connection to the environment.
            </p>
            <div class="row">
                <div class="col-md-3 py-md-2 py-4">
                    <div class="curriculum-image">
                        <img src="./assets/img/envi-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-md-2 py-4">
                    <div class="curriculum-image">
                        <img src="./assets/img/envi-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-md-2 py-4">
                    <div class="curriculum-image">
                        <img src="./assets/img/envi-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-md-2 py-4">
                    <div class="curriculum-image">
                        <img src="./assets/img/faculty.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="learning-methodology py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <h1 class="banner-title mt-2 text-center">Learning Methodology</h1>
                    <p class="text-justify text-white">At Vidyasagar Preschool, our foremost goal is to equip children with the skills and knowledge necessary to navigate the dynamic challenges of our ever-evolving world. With a steadfast commitment to embracing the core principles of 21st-century education, we've earned a sterling reputation for preparing young learners to excel in an ever-changing VUCA World.<br><br>
                        Our Comprehensive Curriculum is meticulously crafted, incorporating the latest advancements in educational theory and practice. We prioritize a holistic approach that encompasses academics, literacy, numeracy, and play-based learning, all while placing a strong emphasis on STEAM (Science, Technology, Engineering, Arts, and Mathematics). Additionally, we integrate project-based learning, foster global awareness and cultural understanding, and instil a deep sense of environmental stewardship. We recognize the importance of parental involvement and we create various opportunities for parent engagement. We also place high value on equipping our students with essential life skills to thrive in today's world.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php @include('components/curriculum-gallery.php') ?>

    <section class="learning-methodology py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <h1 class="banner-title mt-2 text-center">Beyond Academics</h1>
                </div>
            </div>
        </div>
    </section>
    <?php @include('components/curriculum-gallery-2.php') ?>

</body>

</html>