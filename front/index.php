<?php
include('../connection.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Fashion Website Design Tutorial</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- header section starts  -->
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-shopping-cart"></i> shop </a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#products">products</a>
            <a href="#featured">featured</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
        </div>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">
                <?php
                $select_home   = "SELECT * FROM `tb_home` ORDER BY id DESC LIMIT 5";
                $result_home   = $connect->query($select_home);

                if ($result_home->num_rows > 0) {
                    while ($row = $result_home->fetch_assoc()) {
                        echo  '
                    
                        <div class="swiper-slide slide" style="background:url(../home_image/' . $row['img'] . ') no-repeat">
                        <div class="content">
                            <span>' . $row['span'] . '</span>
                            <h3>' . $row['hthree'] . '</h3>
                            <a href="#" class="btn">shop now</a>
                        </div>
                        </div>

                        ';
                    }
                }
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>

    <!-- home section ends -->

    <!-- banner section starts  -->


    <section class="banner-container">
        <?php
        $select_home   = "SELECT * FROM `tb_bannerhome` ORDER BY id DESC LIMIT 2";
        $result_home   = $connect->query($select_home);

        if ($result_home->num_rows > 0) {
            while ($row = $result_home->fetch_assoc()) {
                echo  '
                        <div class="banner">
                        <img src="../bannerhome_image/' . $row['image'] . '">
                        <div class="content">
                            <span>' . $row['offer'] . '</span>
                            <h3>' . $row['upto'] . '</h3>
                            <a href="#" class="btn">shop now</a>
                        </div>
                    </div>
                        ';
            }
        }
        ?>

    </section>

    <!-- banner section ends -->

    <!-- products section starts  -->

    <section class="products" id="products">
        <h1 class="heading"> exclusive <span>products</span> </h1>
        <div class="filter-buttons">
            <div class="buttons active" data-filter="all">all</div>
            <div class="buttons" data-filter="arrivals">new arrivals</div>
            <div class="buttons" data-filter="featured">featured</div>
            <div class="buttons" data-filter="special">special offer</div>
            <div class="buttons" data-filter="seller">best seller</div>
        </div>
        <div class="box-container">

            <?php
            $select_products   = "SELECT * FROM `tb_product` ORDER BY id DESC LIMIT 12";
            $result_products   = $connect->query($select_products);

            if ($result_products->num_rows > 0) {
                while ($row = $result_products->fetch_assoc()) {
                    echo  '
                        <div class="box" data-item="special">
                        <div class="icons">
                            <a href="#" class="fas fa-shopping-cart"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                        <img src="../feature_image/' . $row['image'] . '">
                        </div>
                        <div class="content">
                            <h3>' . $row['name'] . '</h3>
                            <div class="price">
                                <div class="amount">' . $row['pro_amount'] . '</div>
                                <div class="cut">' . $row['pro_cut'] . '</div>
                                <div class="offer">' . $row['pro_offer'] . '</div>
                            </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(50)</span>
                            </div>
                        </div>
                    </div>
    
                    ';
                }
            }
            ?>

        </div>

    </section>

    <!-- products section ends -->

    <!-- deal section starts  -->

    <section class="deal">
     
        <?php
            $select_products   = "SELECT * FROM `tb_bannerproduct` ORDER BY id DESC LIMIT 1";
            $result_products   = $connect->query($select_products);

            if ($result_products->num_rows > 0) {
                while ($row = $result_products->fetch_assoc()) {
                    echo  '
                       
                       

                    <div class="image">
                    <img src="../bannerproduct_image/' . $row['image'] . '">

                </div>
                <div class="content">
                    <span>' . $row['para'] . '</span>
                    <h3>' . $row['title'] . '</h3>
                    <p>' . $row['sale'] . '</p>
                    <a href="#" class="btn">shop now</a>
                </div>
    
                    ';
                }
            }
            ?>

    </section>

    <!-- deal section ends -->

    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> products </h1>
        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <?php
                $select_products   = "SELECT * FROM `tb_featureproducts` ORDER BY id DESC LIMIT 10";
                $result_products   = $connect->query($select_products);

                if ($result_products->num_rows > 0) {
                    while ($row = $result_products->fetch_assoc()) {
                        echo  '
                            <div class="swiper-slide slide">
                                <div class="icons">
                                    <a href="#" class="fas fa-shopping-cart"></a>
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-search"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <div class="image">
                                <img src="../featureProduct_image/' . $row['image'] . '">
                                </div>
                                <div class="content">
                                    <h3>' . $row['name'] . '</h3>
                                    <div class="price">
                                        <div class="amount">' . $row['pro_amount'] . '</div>
                                        <div class="cut">' . $row['pro_cut'] . '</div>
                                        <div class="offer">' . $row['pro_offer'] . '</div>
                                    </div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span>(50)</span>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                }
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- featured section ends -->

    <!-- reviews section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> client's <span>review</span> </h1>

        <div class="swiper review-slide">

            <div class="swiper-wrapper">

                <?php

                $select_clients   = "SELECT * FROM `tb_clients` ORDER BY id";
                $result_clients   = $connect->query($select_clients);

                if ($result_clients->num_rows > 0) {
                    while ($row = $result_clients->fetch_assoc()) {
                        echo  '  
                            <div class="swiper-slide slide">
                                <p>' . $row['title'] . '</p>
                                <div class="user">
                                <img src="../client_image/' . $row['image'] . '">
                                    <div class="info">
                                    <h3>' . $row['name'] . '</h3>
                                    <span>' . $row['feeling'] . '</span>
                                </div>
                                </div>
                            </div>
                        ';
                    }
                }

                ?>
            </div>
        </div>
    </section>

    <!-- reviews section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="icons-container">

            <div class="icons">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>jogeshwari, mumbai, india - 400104</p>
            </div>

            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>shaikhanas@gmail.com</p>
                <p>anasbhai@gmail.com</p>
            </div>

            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>+123-456-7890</p>
                <p>+111-222-3333</p>
            </div>

        </div>

        <div class="row">

            <?php include('../model/contactTelegarm.php') ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.4947235300097!2d104.92759527496982!3d11.588035288614378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310953fd77d338ff%3A0x709dd259fa94a249!2sNorton%20University%20Building%2C%20Phnom%20Penh!5e0!3m2!1sen!2skh!4v1687233826474!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- blogs  section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span></h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">
                <?php
                $select_products   = "SELECT * FROM `tb_blogggg` ";
                $result_products   = $connect->query($select_products);

                if ($result_products->num_rows > 0) {
                    while ($row = $result_products->fetch_assoc()) {
                        echo  '
                      
                        <div class="swiper-slide slide">
                        <div class="image">
                        <img src="../blog_image/' . $row['image'] . '">
                        </div>
                        <div class="content">
                            <h3>' . $row['title'] . '</h3>
                            <p>' . $row['subtitle'] . '</p>
                            <a href="#" class="btn">read more</a>
                            <div class="icons">
                                <a href="#"> <i class="fas fa-calendar"></i>' . $row['date'] . ' </a>
                                <a href="#"> <i class="fas fa-user"></i>' . $row['admin'] . ' </a>
                            </div>
                        </div>
                        </div>

                    ';
                    }
                }
                ?>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- blogs  section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <?php
            $select_products   = "SELECT * FROM `tb_aboutus` ORDER BY id DESC LIMIT 1";
            $result_products   = $connect->query($select_products);

            if ($result_products->num_rows > 0) {
                while ($row = $result_products->fetch_assoc()) {
                    echo  '
                    <div class="box">
                        <h3>about us</h3>
                        <p>' . $row['text'] . '</p>
                    </div>
                    ';
                }
            }
            ?>
            <div class="box">
                <h3>category</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> men </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> women </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> kids </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> best seller </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> new arrivals </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> products </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> review </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> my order </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> my account </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> my listing </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> sell now </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> new offers </a>
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-pinterest"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>

        <div class="credit"> &copy; copyright @ 2023 by <span>Group 14</span> </div>

    </section>

    <!-- footer section ends -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>\
    <!--copy from movie-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>