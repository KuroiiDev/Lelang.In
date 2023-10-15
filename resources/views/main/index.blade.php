<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="<?php echo asset('css/home.style.css'); ?>" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>
<?php
$photo1 = 'https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80';
$photo2 = 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80';
?>


<body class="bg-main">

    <header>
        <nav class="navbar bg-blue navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex" role="search" data-bs-theme="light">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ikut Lelang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Prosedur</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex justify-content-end">
                    <a class="linked text-light" aria-current="page" href="#">
                        <img src="/docs/5.3/assets/brand/bootstrap-logo.svg"width="30" height="24">
                        Test_Acc
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container-fluid bg-blue rounded-bottom-5">
            <div style="height: 700px;">
                <img src="" alt="Banner">
            </div>
        </section>

        <section class="container">
            <div class="container-fluid rounded bg-light shadow">
                <h1 class="text-center display-3 mt-3 mb-2 font-weight-bold">
                    Apa Yang Anda Cari?
                </h1>
                <div id="firstCarousel" class="owl-carousel owl-theme my-3">
                    <div class="card shadow my-3">
                        <img src="<?php print $photo1; ?>" class="card-img-top" height="300" alt="Image 1" />
                        <div class="card-body">
                            <h5 class="card-title">Card 1</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow my-3">
                        <img src="<?php print $photo1; ?>" class="card-img-top" alt="Image 2" height="300" />
                        <div class="card-body">
                            <h5 class="card-title">Card 2</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow my-3">
                        <img src="<?php print $photo1; ?>" class="card-img-top" alt="Image 2" height="300" />
                        <div class="card-body">
                            <h5 class="card-title">Card 3</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <!-- Add more cards as needed -->
                </div>
            </div>
        </section>

        <section class="container">
            <div class="container-fluid rounded bg-light shadow">
                <h1 class="text-center display-3 mt-3 mb-2 font-weight-bold">
                    Lelang Terbaru
                </h1>
                <div id="secondCarousel" class="owl-carousel owl-theme my-3">
                    <div class="card shadow my-3">
                        <img src="<?php print $photo2; ?>" class="card-img-top" height="300" alt="Image 1" />
                        <div class="card-body">
                            <h5 class="card-title">Card 4</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow my-3">
                        <img src="<?php print $photo2; ?>" class="card-img-top" alt="Image 2" height="300" />
                        <div class="card-body">
                            <h5 class="card-title">Card 5</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow my-3">
                        <img src="<?php print $photo2; ?>" class="card-img-top" alt="Image 3" height="300" />
                        <div class="card-body">
                            <h5 class="card-title">Card 6</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <!-- Add more cards as needed -->
                </div>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function() {
            $('#firstCarousel').owlCarousel({
                items: 3, // Number of cards shown in each slide
                loop: true, // Continuously loop the carousel
                margin: 20, // Space between cards
                nav: true, // Show navigation buttons
                navText: [
                    "<i class='fas fa-chevron-left'></i>",
                    "<i class='fas fa-chevron-right'></i>",
                ], // Custom navigation icons
                responsive: {
                    0: {
                        items: 1, // Number of cards shown in the carousel for smaller screens
                    },
                    768: {
                        items: 2, // Number of cards shown in the carousel for medium screens
                    },
                    992: {
                        items: 3, // Number of cards shown in the carousel for large screens
                    },
                },
            });
        });

        $(document).ready(function() {
            $('#secondCarousel').owlCarousel({
                items: 3,
                loop: true,
                margin: 20,
                nav: true,
                navText: [
                    "<i class='fas fa-chevron-left'></i>",
                    "<i class='fas fa-chevron-right'></i>",
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    },
                },
            });
        });
    </script>
</body>

</html>
