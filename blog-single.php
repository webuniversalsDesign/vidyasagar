<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Blog-Single - Vidya Sagar Preschool';
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
            <div class="row">
                <div class="col-md-9 py-2">
                    <div class="blog-image-single">
                        <img src="./assets/img/blog-1.jpg" alt="">
                    </div>
                    <div class="py-4">
                    <h3 class="blog-title t-color-theme-blue">Benefits Of Preschool Learning For Kids | Vidyasagar Preschool</h3>
                    <p class="text-justify">Preschool learning plays a significant role in the social and cognitive development of a child. It provides an arena for children to satiate their curiosity, explore new things, build self-confidence, and step towards independence. It also nurtures social-emotional skills, such as generosity, empathy, and self-driven control of emotions.</p>
                    </div>  
                </div>
                <div class="col-md-3 py-2">
                    <div class="border-bottom-customize">
                        <h6 class="t-color-theme-red">Leatest News</h6>
                        <img src="./assets/img/icons/line-1.png" alt="">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="blog-mini-image">
                                <img src="./assets/img/blog-1.jpg" alt="">
                            </div>
                            <div class="blog-link px-3">
                                <a href="#" class="t-color-theme-red">Benefits Of Preschool Learning For Kids | Vidyasagar Preschool</a>
                            </div>

                        </div>
                        <p class="text-center">2023</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php @include('layouts/footer.php') ?>
</body>

</html>