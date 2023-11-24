<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--===================== FAVICON =============================-->
    <link rel="stylesheet" href=" ">
    <!--===================== REMINICON =============================-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--===================== CSS =============================-->
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/stylee.css">
    <!--===================== ICON =============================-->
    <link rel="icon" href="images/Logo O'Bento.png" type="image/x.icon">

    <title>O'Bento</title>
</head>

<body>
    <!--===================== HEADER ========================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="Obento.php" class="nav-logo">
                <img src="images\Logo O'Bento.png" alt="O'Bento">
                O'Bento
            </a>

            <div class="nav-menu" id="nav_menu">
                <ul class="nav-list">
                    <li>
                        <a href="ADMIN\login.php" class="nav-link"><i class="ri-lock-2-line"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="Obento.php" class="nav-link">Home</a>
                    </li>
                </ul>

                <!-- Close Button -->
                <div class="nav-close" id="nav_close">
                    <i class="ri-close-line"></i>
                </div>

                <img src="img/leaf-branch-4.png" alt="nav image" class="nav--img-1">
                <img src="img/leaf-branch-3.png" alt="nav image" class="nav--img-2">
            </div>

            <div class="nav--button">
                <!-- Theme change button -->
                <i class="ri-moon-line change-theme" id="theme-button"></i>



                <!-- Toggle Button -->
                <div class="nav-toggle" id="nav_toggle">
                    <i class="ri-apps-2-line"></i>
                </div>
            </div>

        </nav>
    </header>
    <!--===================== MAIN =============================-->
    <main class="main">
        <!--============== Home ===============-->
        <section class="label">
            <div class="container">
            </div>
        </section>

        <section class="banner">
            <div class="textheader">
                <h1>O'bento Menu</h1>
            </div>
        </section>

        <br>
        <br>

        <section class="single_menu">
            <div class="row">
                <div class="column">
                    <img src="img/green-tea.png" alt="popular image">
                </div>
                <div class="column">
                    <div class="judulmenu">
                        <h1>Green Tea</h1>
                        <h3>緑茶</h3>
                    </div>

                    <div class="price">
                        <span>$5.00</span>
                    </div>

                    <div class="deskmenu">
                        <span>   
                        Green tea is a type of tea made from the leaves of the Camellia sinensis plant that have undergone minimal oxidation during processing. The leaves are harvested and quickly heated, preserving their vibrant green color and fresh flavor.

Known for its health benefits and unique taste, green tea has a slightly grassy or vegetal flavor with varying degrees of bitterness and sweetness, depending on the variety and how it's brewed. It contains antioxidants and compounds believed to promote health and well-being.
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>   
        <br>

        <section class="label">
            <div class="container">
            </div>
        </section>

         <!--===================== FOOTER =============================-->
    <footer class="footer">
        <div class="footer--container container grid">
            <div>
                <a href="#" class="footer--logo">
                    <img src="images/Logo O'Bento.png" alt="logo image" width="70px">
                    O'Bento
                </a>
                <p class="footer--description">
                    Food for the body is not <br>
                    enough. There must be food <br>
                    for the soul.
                </p>
            </div>

            <div class="footer--content">
                <div>
                    <h3 class="footer--title">Main Menu</h3>

                    <ul class="footer--links">
                        <li>
                            <a href="Obento.php" class="footer--link">About</a>
                        </li>

                        <li>
                            <a href="Obento.php" class="footer--link">Menu</a>
                        </li>

                        <li>
                            <a href="Obento.php" class="footer--link">Offer</a>
                        </li>

                        <li>
                            <a href="Obento.php" class="footer--link">Events</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer--title">Information</h3>

                    <ul class="footer--links">
                        <li>
                            <a href="Obento.php" class="footer--link">Contact</a>
                        </li>

                        <li>
                            <a href="Obento.php" class="footer--link">Orders & returns</a>
                        </li>

                        <li>
                            <a href="Obento.php" class="footer--link">Videos</a>
                        </li>

                        <li>
                            <a href="Obento.php" class="footer--link">Reservation</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer--title">Address</h3>

                    <ul class="footer--links">
                        <li class="footer--information">
                            <i class="ri-map-pin-2-fill"></i>
                            Jln.AwoerAwore 69 <br>
                            Bekasi, Indonesia
                        </li>

                        <li class="footer--information">
                            <i class="ri-time-fill"></i>
                            9AM - 11PM
                        </li>

                    </ul>
                </div>

                <div>
                    <h3 class="footer--title">Social Media</h3>

                    <ul class="footer--social">
                        <a href="https://www.facebook.com/profile.php?id=100066922470986" target="_blank"
                            class="footer--social-link">
                            <i class="ri-facebook-circle-fill"></i>
                        </a>

                        <a href="https://www.instagram.com/nii.fann/?hl=id" target="_blank" class="footer--social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>

                        <a href="" target="_blank" class="footer--social-link">
                            <i class="ri-twitter-x-fill"></i>
                        </a>
                    </ul>
                </div>
            </div>

            <img src="img/spring-onion.png" alt="footer image" class="footer--onion">
            <img src="img/spinach-leaf.png" alt="footer image" class="footer--spinach">
            <img src="img/leaf-branch-4.png" alt="footer image" class="footer--leaf">
        </div>

        <div class="footer--info container">
            <div class="footer--card">
                <img src="img/footer-card-1.png" alt="footer image">
                <img src="img/footer-card-2.png" alt="footer image">
                <img src="img/footer-card-3.png" alt="footer image">
                <img src="img/footer-card-4.png" alt="footer image">
            </div>

            <span class="footer--copy">
                Copyright &#169; 2023 - Fanomahy. All Rights Reserved
            </span>
        </div>
    </footer>

        <script src="js/main.js"></script>
</body>