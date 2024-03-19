<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Sagar Times - Vidya Sagar Preschool';
    @include('layouts/head.php') ?>
</head>

<body>
    <?php @include('layouts/navbar.php') ?>

    <section class="curri-banner">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <h1 class="banner-title text-center">Sagar Times</h1>
                </div>
            </div>
        </div>
    </section>
   <section class="py-4 sagar-times">
    <div class="container">
        <div class="row">
            <div class="col-md-4 py-4 py-md-2">
              <div class="shadow">
                <div class="sagar-image">
                    <img src="./assets/img/sagar-1.avif" alt="">
                </div>
                <div class="d-flex px-2 py-3 bg-light justify-content-between hover-join">
                    <div><p class="margin-b-0 font-w-600 t-lg">Sagar Times</p></div>
                    <div><a href="#" class="t-color-theme-red font-w-600"> Download &nbsp;&nbsp;<i class="fa-solid fa-download"></i></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-4 py-md-2">
              <div class="shadow">
                <div class="sagar-image">
                    <img src="./assets/img/sagar-2.avif" alt="">
                </div>
                <div class="d-flex px-2 py-3 bg-light justify-content-between hover-join">
                    <div><p class="margin-b-0 font-w-600 t-lg">Sagar Times</p></div>
                    <div><a href="#" class="t-color-theme-red font-w-600"> Download &nbsp;&nbsp;<i class="fa-solid fa-download"></i></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-4 py-md-2">
              <div class="shadow">
                <div class="sagar-image">
                    <img src="./assets/img/sagar-3.avif" alt="">
                </div>
                <div class="d-flex px-2 py-3 bg-light justify-content-between hover-join">
                    <div><p class="margin-b-0 font-w-600 t-lg">Sagar Times</p></div>
                    <div><a href="#" class="t-color-theme-red font-w-600"> Download &nbsp;&nbsp;<i class="fa-solid fa-download"></i></a></div>
                </div>
              </div>
            </div>
        </div>
    </div>
   </section>

    <?php @include('layouts/footer.php') ?>
</body>

</html>