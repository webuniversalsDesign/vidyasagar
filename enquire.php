<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Enquire - Vidya Sagar Preschool';
    @include('layouts/head.php') ?>
</head>

<body>
    <?php @include('layouts/navbar.php') ?>

    <section class="curri-banner">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <h1 class="banner-title text-center">Enquire Now</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="e-pros-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="py-4 px-3 mt-3 mb-3 shadow bg-light center-adjustment-2 b-radius-5">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select name="Year" id="" class="custom-form">
                                            <option value="">Admission For Academic Year</option>
                                            <option value="AY 2023-2024">AY 2023-2024</option>
                                            <option value="AY 2024-2025">AY 2023-2024</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">

                                        <select name="Year" id="" class="custom-form">
                                            <option value="">Campus</option>
                                            <option value="Vidhyasagar Preschool, Hebbal">Vidhyasagar Preschool, Hebbal</option>
                                            <option value="Vidhyasagar Preschool, Jp Nagar">Vidhyasagar Preschool, Jp Nagar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">

                                        <input type="text" class="custom-form" placeholder="Student's Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="custom-form" placeholder="Student's Last Name">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="Date" class="custom-form" placeholder="DOB">

                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="custom-form" placeholder="Parent Name">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="mail" class="custom-form" placeholder="Parent Email ID">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="number" class="custom-form" placeholder="Parent Mobile Number">

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">

                                        <select name="Year" id="" class="custom-form">
                                            <option value="">Select Grade</option>
                                            <option value="Play Group">Play Group</option>
                                            <option value="Nursery">Nursery</option>
                                            <option value="Prep 1">Prep 1</option>
                                            <option value="Prep 2">Prep 2</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">

                                        <input type="text" class="custom-form" placeholder="Sibling (Specify only in case of Vidyashilp or Vidyasagar)">
                                    </div>
                                </div>
                                <div class="com-md-12">
                                    <div class="form-group mb-3">
                                    <textarea name="Message" id="message" cols="30" rows="7" class="custom-form" placeholder="Leave a Message"></textarea>
                                    </div>
                                </div>
                            </div>



                            <button type="submit" class="form-button">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <?php @include('layouts/footer.php') ?>
</body>

</html>