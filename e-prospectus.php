<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'E-prospectus - Vidya Sagar Preschool';
    @include('layouts/head.php') ?>
</head>

<body>
    <?php @include('layouts/navbar.php') ?>

    <section class="curri-banner">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <h1 class="banner-title text-center">E - Prospectus</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="e-pros-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="py-4 px-3 mt-3 mb-3 shadow bg-light center-adjustment b-radius-5">
                    <form>
                    <div class="form-group mb-3">
                        
                        <input type="text" class="custom-form" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group mb-3">
                        
                        <input type="email" class="custom-form" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group mb-3">
                        
                        <input type="number" class="custom-form" id="number" placeholder="Enter your Number">
                    </div>
                    <button type="submit" class="form-button"><i class="fa-solid fa-download"></i> Download</button>
                </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <?php @include('layouts/footer.php') ?>
</body>

</html>