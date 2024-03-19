<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Blogs - Vidya Sagar Preschool';
    @include('layouts/head.php') ?>
</head>

<body>
    <?php @include('layouts/navbar.php') ?>

    <section class="curri-banner">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <h1 class="banner-title text-center">Blogs</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="blog py-md-3 py-4">
        <div class="container">
            <div class="row align-items-center border-bottom-customize">
                <div class="col-md-4 py-2">
                    <div class="blog-image">
                        <img src="./assets/img/blog-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-8 py-2">
                    <div class="blog-content">
                    <h5 class="t-color-theme-blue mb-3">Benefits Of Preschool Learning For Kids | Vidyasagar Preschool</h5>
                    <p class="text-justify margin-b-0">Preschool learning plays a significant role in the social and cognitive development of a child. It provides an arena for children to satiate their curiosity, explore new things, build self-confidence, and step towards independence. It also nurtures social-emotional skills, such as generosity, empathy, and self-driven control of emotions....</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center py-3">
                        <div class="date">
                          <p class="font-w-500 t-color-theme-blue">08/09/2023</p>
                        </div>
                        <div class="readmore">
                        <a href="blog-single.php" class="hover-red-btn-white px-2 py-2 b-radius-5 transition-3 shadow">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center border-bottom-customize mt-4    ">
                <div class="col-md-4 py-2">
                    <div class="blog-image">
                        <img src="./assets/img/blog-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-8 py-2">
                    <div class="blog-content">
                    <h5 class="t-color-theme-blue mb-3">Importance of Preschool in a Child’s Developmentl</h5>
                    <p class="text-justify margin-b-0">Early childhood education has a significant impact on the development of a child into a well-rounded adult. A preschool, with the right environment, has the potential to stimulate confidence in children. It also encourages them to socialize with their peers....</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center py-3">
                        <div class="date">
                          <p class="font-w-500 t-color-theme-blue">08/09/2023</p>
                        </div>
                        <div class="readmore">
                        <a href="blog-single.php" class="hover-red-btn-white px-2 py-2 b-radius-5 transition-3 shadow">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php @include('layouts/footer.php') ?>
</body>

</html>