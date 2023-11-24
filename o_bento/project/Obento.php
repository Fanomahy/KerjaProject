<?php include("config.php") ?>

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
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="css/test.css">
    <!--===================== ICON =============================-->
    <link rel="icon" href="images/Logo O'Bento.png" type="image/x.icon">

    <title>O'Bento</title>
</head>

<body>
    <!--===================== HEADER ========================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav-logo">
                <img src="images\Logo O'Bento.png" alt="O'Bento">
                O'Bento
            </a>

            <div class="nav-menu" id="nav_menu">
                <ul class="nav-list">
                    <li>
                        <a href="ADMIN\login.php" class="nav-link"><i class="ri-lock-2-line"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#home" class="nav-link active-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#menu" class="nav-link">Menu</a>
                    </li>

                    <li class="nav-item">
                        <a href="#feedback" class="nav-link">Feedback</a>
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
        <section class="home section" id="home">
            <div class="home-container">
                <div class="home-data">
                    <img src="img/home-sushi-rolls.png" alt="home image" class="home-img">
                    <h1 class="home-title"> <span class="jpn">日本料理屋</span> <br>
                        Japanese <br>
                        Restaurant
                    </h1>

                    <p class="home-desk">Welcome to Our Japanese Restaurant,
                        where you find an authentic Japanese dining experience in the middle of Bekasi City.
                        Our restaurant is the result of our love of Japanese cuisine and desire to share its flavors
                        and
                        traditions with our community. </p>

                    <a href="#menu" class="button">
                        View Menu <i class="ri-arrow-down-line"></i>
                    </a>
                </div>
            </div>
        </section>
        <!--============== About Us ===============-->
        <section class="about section" id="about">
            <span class="section-subtitle">About us</span> <br> <br>

            <div class="about-container">
                <div class="about-data">


                    <p class="about-desk">O'Bento was founded in 2020 by Fano Mahy Cahyadi,
                        an experienced chef with 6 years of experience in Japanese culinary arts.
                        This journey begins on the busy streets of Tokyo,
                        where he sharpens his skills under the tutelage of master chefs,
                        learning the secrets of sushi, sashimi, teriyaki and more.</p>
                    <h2 class="about-title">
                        <div>
                            <img src="img/about-sushi.png" alt="about image">
                        </div>
                    </h2>
                </div>
            </div>
        </section>
        <!--============== Menu ===============-->
        <section class="menu section" id="menu">
            <h1 class="section-subtitle">Menu</h1> <br>

            <div class="row">
                <div class="column">
                    <img src="img/recently-salmon-sushi.png" alt="popular image">
                </div>
                <div class="column">
                    <div class="deskmenu">
                        <span>   
                        Japanese cuisine is renowned for its finesse, simplicity, and attention to detail. 
                        A variety of iconic dishes such as sushi, sashimi, ramen, and tempura have gained popularity worldwide. 
                        Fresh ingredients like fish, seaweed, meat, vegetables, and rice are commonly used. Cooking techniques such as quick grilling (teppanyaki), simmering (nimono), and grilling (yakimono) are often employed. 
                        A love for balanced flavors and aesthetic presentation has made Japanese cuisine a favorite for many people around the globe.
                        </span>
                    </div>
                </div>
            </div>

            <!--============== Menu Makanan ===============-->
            <section>

                <h1 class="section-subtitle">Food</h1>
                <div class="food--container">
                    <div class="menu--columns">

                        <div class="food--container">
                            <div class="food--card">
                                <img src="img/popular-sushi-rolls.png" class="food--img" alt="popular image"><br>

                                <h2 class="food--title">Sushi Rolls</h2>
                                <p class="food--description">Japanese Dish</p>
                                <span class="food--price">$19.99</span>
                                <a href="sushi_rolls.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>

                            </div>
                        </div>


                        <!--============== Menu Makanan ===============-->

                        <div class="food--container">
                            <div class="food--card">
                                <img src="img/popular-spring-rols.png" class="food--img" alt="popular image"><br>

                                <h2 class="food--title">Spring Rolls</h2>
                                <p class="food--description">Japanese Dish</p>
                                <span class="food--price">$15.99</span>
                                <a href="spring_rolls.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>

                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                        <div class="food--container">
                            <div class="food--card">
                                <img src="img/popular-onigiri.png" class="food--img" alt="popular image"> <br>

                                <h2 class="food--title">Onigiri</h2>
                                <p class="food--description">Japanese Dish</p>
                                <span class="food--price">$10.99</span>
                                <a href="onigiri.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                        <div class="food--container">
                            <div class="food--card">
                                <img src="img/recently-salmon-sushi.png" class="food--img" alt="popular image"> <br>

                                <h2 class="food--title">Salmon Sushi</h2>
                                <p class="food--description">Japanese Dish</p>
                                <span class="food--price">$12.99</span>
                                <a href="salmon_sushi.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                        <div class="food--container">
                            <div class="food--card">
                                <img src="img/katsu-curry-chicken-rice.png" class="food--img" alt="popular image"> <br>

                                <h3 class="food--title">Katsu Curry</h3>
                                <p class="food--description">Japanese Dish</p>
                                <span class="food--price">$22.99</span>
                                <a href="katsu_curry.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                        <div class="food--container">
                            <div class="food--card">
                                <img src="img/katsu-chicken-bowl.png" class="food--img" alt="popular image"> <br>

                                <h2 class="food--title">Katsu Chicken</h2>
                                <p class="food--description">Japanese Dish</p>
                                <span class="food--price">$23.99</span>
                                <a href="katsu_chicken.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                        <div class="food--container">
                            <div class="food--card">
                                <img src="img/teriyaki-salmon-bowl.png" class="food--img" alt="popular image"> <br>

                                <h2 class="food--title">Teriyaki Salmon</h2>
                                <p class="food--description">Japanese Dish</p>
                                <span class="food--price">$32.99</span>
                                <a href="teriyaki_salmon.php" style="color:white"><button class="snack--button">View
                                        More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                        <div class="food--container">
                            <div class="food--card">
                                <img src="img/teriyaki-tofu-bowl.png" class="food--img" alt="popular image"> <br>

                                <h2 class="food--title">Teriyaki Tofu</h2>
                                <p class="food--description">Japanese Dish</p>
                                <span class="food--price">$18.99</span>
                                <a href="teriyaki_tofu.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </section>

            <br>
            <br>
            <br>

            <!--============== Menu Snack ===============-->
            <section>

                <h1 class="section-subtitle">Snack</h1>
                <div class="snack--container">
                    <div class="menu--columns">

                        <!--============== Menu Makanan ===============-->

                        <div class="snack--container">
                            <div class="snack--card">
                                <img src="img/Takoyaki.png" class="snack--img" alt="popular image"> <br> <br>

                                <h2 class="snack--title">Takoyaki</h2>
                                <p class="snack--description">Japanese Dish</p>
                                <span class="snack--price">$4.99</span>
                                <a href="takoyaki.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                        <div class="snack--container">
                            <div class="snack--card">
                                <img src="img/karaage-chicken-cup.png" class="snack--img" alt="popular image"> <br> <br>

                                <h2 class="snack--title">Karaage Chicken</h2>
                                <p class="snack--description">Japanese Dish</p>
                                <span class="snack--price">$4.99</span>
                                <a href="karaage.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                        <div class="snack--container">
                            <div class="snack--card">
                                <img src="img/tempura-prawn.png" class="snack--img" alt="popular image"> <br> <br>

                                <h2 class="snack--title">Tempura Prawn</h2>
                                <p class="snack--description">Japanese Dish</p>
                                <span class="snack--price">$2.99</span>
                                <a href="tempura.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                        <div class="snack--container">
                            <div class="snack--card">
                                <img src="img/tempura-vege.png" class="snack--img" alt="popular image"> <br> <br>

                                <h2 class="snack--title">Tempura Vege</h2>
                                <p class="snack--description">Japanese Dish</p>
                                <span class="snack--price">$2.99</span>
                                <a href="tempuravege.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                    </div>
                </div>

            </section>

            <!--============== Menu Minuman ===============-->
            <section>

                <h1 class="section-subtitle">Drink</h1>
                <div class="drink--container">
                    <div class="menu--columns">

                        <!--============== Menu Makanan ===============-->

                        <div class="drink--container">
                            <div class="drink--card">
                                <img src="img/green-tea.png" class="drink--img" alt="popular image"> <br> <br>

                                <h2 class="drink--title">Green Tea</h2>
                                <p class="drink--description">Japanese Dish</p>
                                <span class="drink--price">$5.00</span>
                                <a href="green_tea.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                        <div class="drink--container">
                            <div class="drink--card">
                                <img src="img/miso-soup.png" class="drink--img" alt="popular image"> <br> <br>

                                <h2 class="drink--title">Miso Soup</h2>
                                <p class="drink--description">Japanese Dish</p>
                                <span class="drink--price">$5.00</span>
                                <a href="miso_soup.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                        <div class="drink--container">
                            <div class="drink--card">
                                <img src="img/caffe-latte-hot.png" class="drink--img" alt="popular image"> <br> <br>

                                <h2 class="drink--title">Caffe Latte</h2>
                                <p class="drink--description">Japanese Dish</p>
                                <span class="drink--price">$5.00</span>
                                <a href="caffe_latte.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                        <!--============== Menu Makanan ===============-->

                        <div class="drink--container">
                            <div class="drink--card">
                                <img src="img/long-black-caffe.png" class="drink--img" alt="popular image"> <br> <br>

                                <h2 class="drink--title">Long Black Caffe</h2>
                                <p class="drink--description">Japanese Dish</p>
                                <span class="drink--price">$5.00</span>
                                <a href="long_black_coffe.php" style="color:white"><button class="snack--button">View More
                                        Detail
                                        <i class="ri-shopping-bag-2-line"></i></a>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
        </section>
        <!--============== Feedback ===============-->
        <section class="feedback section" id="feedback">

            <h1 class="section-subtitle">Feedback</h1>

            <div class="feedback--container container">
                <div class="feedback--content grid">
                    <img src="img/leaf-branch-2.png" alt="Feedback" class="feedback--img">

                    <div class="feedback--data">

                        <h2 class="feedback--title" style="color: #fff;">SUBMIT REQUEST</h2>

                        <span class="feedback--subtitle">
                            We want to know what you thought of your experience at <br>
                            O`Bento Website so we'd love to hear ur feedback
                        </span>

                        <form action="send.php" class="feedback--form" method="post">
                            <p> <i class="ri-user-fill"></i>
                                Name :</p>
                            <input type="text" placeholder="Enter Your Name" name="name" class="feedback--input">
                            <br><br>

                            <p> <i class="ri-mail-fill"></i>
                                Email :</p>
                            <input type="email" placeholder="Enter Your Email" name="email" class="feedback--input">
                            <br><br>

                            <p> <i class="ri-chat-4-fill"></i>
                                Message :</p>
                            <textarea cols="30" rows="10" placeholder="Enter Your Message" name="message"
                                class="feedback--input2"></textarea>
                            <br>
                            <br>
                            <div>
                                <input type="submit" value="Send Feedback" name="send" class="button feedback--button">
                            </div>
                        </form>
                    </div>
                </div>

                <img src="img/leaf-branch-3.png" alt="feedback image" class="feedback--spinach">
            </div>

        </section>

        <!--   <i class="ri-send-plane-fill"></i> 
    class="button feedback--button"
    -->

    </main>
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
                            <a href="#" class="footer--link">About</a>
                        </li>

                        <li>
                            <a href="#" class="footer--link">Menu</a>
                        </li>

                        <li>
                            <a href="#" class="footer--link">Offer</a>
                        </li>

                        <li>
                            <a href="#" class="footer--link">Events</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer--title">Information</h3>

                    <ul class="footer--links">
                        <li>
                            <a href="#" class="footer--link">Contact</a>
                        </li>

                        <li>
                            <a href="#" class="footer--link">Orders & returns</a>
                        </li>

                        <li>
                            <a href="#" class="footer--link">Videos</a>
                        </li>

                        <li>
                            <a href="#" class="footer--link">Reservation</a>
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
    <!--===================== SCROLL UP =============================-->

    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!--===================== SCROLLREVEAL =============================-->
    <script src=""></script>

    <!--===================== MAIN JS =============================-->
    <script src="js/main.js"></script>

    <!--===================== POP UP =============================-->





</body>

</html>