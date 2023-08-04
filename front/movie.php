<?php
include('../connection.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmlane - Best movie collections</title>


    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="./movie.css">
    <!-- <link rel="stylesheet" href="./movie.css"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">

    <!-- header -->

    <header class="header" data-header>
        <div class="container">

            <div class="overlay" data-overlay></div>

            <a href="./index.html" class="logo">
                <img src="./image/project-logo.png" alt="Filmlane logo">
            </a>

            <div class="header-actions">

                <button class="search-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>

                <div class="lang-wrapper">
                    <label for="language">
                        <ion-icon name="globe-outline"></ion-icon>
                    </label>

                    <select name="language" id="language">
                        <option value="en">EN</option>
                        <option value="au">AU</option>
                        <option value="ar">AR</option>
                        <option value="tu">TU</option>
                    </select>
                </div>

                <button class="btn btn-primary">Sign in</button>

            </div>

            <button class="menu-open-btn" data-menu-open-btn>
                <ion-icon name="reorder-two"></ion-icon>
            </button>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">

                    <a href="./index.html" class="logo">
                        <img src="./image/project-logo.png" alt="Filmlane logo">
                    </a>

                    <button class="menu-close-btn" data-menu-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="./index.html" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Movie</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Tv Show</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Web Series</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Pricing</a>
                    </li>

                </ul>

                <ul class="navbar-social-list">

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-pinterest"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>

                </ul>

            </nav>

        </div>
    </header>

    <main>
        <article>

            <!--  Hero -->

            <section class="hero">
                <div class="container">

                    <?php

                    $select_banner   = "SELECT * FROM `tb_banner` LIMIT 1";
                    $result_banner   = $connect->query($select_banner);
                    if ($result_banner->num_rows > 0) {
                        while ($row = $result_banner->fetch_assoc()) {
                            echo   '
                        
                        <div class="hero-content">

                        <p class="hero-subtitle">' . $row['name'] . '</p>

                        <h1 class="h1 hero-title">
                        ' . $row['title'] . '
                        </h1>

                        <div class="meta-wrapper">

                            <div class="badge-wrapper">
                                <div class="badge badge-fill">PG 18</div>

                                <div class="badge badge-outline">HD</div>
                            </div>

                            <div class="ganre-wrapper">
                                <a href="#">' . $row['romance'] . ',</a>

                                <a href="#">' . $row['drama'] . '</a>
                            </div>

                            <div class="date-time">

                                <div>
                                    <ion-icon name="calendar-outline"></ion-icon>

                                    <time datetime="2022">' . $row['date'] . '</time>
                                </div>

                                <div>
                                    <ion-icon name="time-outline"></ion-icon>

                                    <time datetime="PT128M">' . $row['hour'] . ' </time>
                                </div>

                            </div>

                        </div>

                        <button class="btn btn-primary">
                            <ion-icon name="play"></ion-icon>

                            <span>Watch now</span>
                        </button>

                    </div>

                        ';
                        }
                    }

                    ?>


                </div>
            </section>

            <!-- #UPCOMING -->
            <section class="upcoming">
                <div class="container">

                    <div class="flex-wrapper">

                        <div class="title-wrapper">
                            <p class="section-subtitle">Online Streaming</p>

                            <h2 class="h2 section-title">Upcoming Movies</h2>
                        </div>

                        <ul class="filter-list">

                            <li>
                                <button class="filter-btn">Movies</button>
                            </li>

                            <li>
                                <button class="filter-btn">TV Shows</button>
                            </li>

                            <li>
                                <button class="filter-btn">Anime</button>
                            </li>

                        </ul>

                    </div>

                    <ul class="movies-list  has-scrollbar">

                        <!-- <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./image/images.jfif" alt="The Northman movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">The Northman</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">HD</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT137M">137 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>8.5</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./image/download (5).jfif" alt="Doctor Strange in the Multiverse of Madness movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Doctor Strange in the Multiverse of Madness</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">4K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT126M">126 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>NR</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./image/download (4).jfif" alt="Memory movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Memory</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">2K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="">N/A</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>NR</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./image/download5.jpg" alt="The Unbearable Weight of Massive Talent movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">The Unbearable Weight of Massive Talent</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">HD</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT107M">107 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>NR</data>
                                    </div>
                                </div>

                            </div>
                        </li> -->

                        <?php

                        $select_upcoming   = "SELECT * FROM `tb_upcoming` LIMIT 4";
                        $result_upcoming   = $connect->query($select_upcoming);

                        if ($result_upcoming->num_rows > 0) {
                            while ($row = $result_upcoming->fetch_assoc()) {
                                echo  '
                                <li>
                                <div class="movie-card">
    
                                    <a href="./movie-details.html">
                                        <figure class="card-banner">
                                        <img src="../upcoming_image/' . $row['photo'] . '">

                                        </figure>
                                    </a>
    
                                    <div class="title-wrapper">
                                        <a href="./movie-details.html">
                                            <h3 class="card-title">' . $row['title'] . '</h3>
                                        </a>
    
                                        <time datetime="2022">' . $row['date'] . '</time>
                                    </div>
    
                                    <div class="card-meta">
                                        <div class="badge badge-outline">' . $row['HD'] . '</div>
    
                                        <div class="duration">
                                            <ion-icon name="time-outline"></ion-icon>
    
                                            <time datetime="PT126M">' . $row['hour'] . '</time>
                                        </div>
    
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
    
                                            <data>' . $row['star'] . '</data>
                                        </div>
                                    </div>
    
                                </div>
                            </li>
                                
                                ';
                            }
                        }

                        ?>

                    </ul>

                </div>
            </section>

            <!--  services -->
            <section class="service">
                <div class="container">

                <?php  
                $font_download  = "SELECT * FROM `download` LIMIT 1";
                $font_result    = $connect->query($font_download);
                if($font_result->num_rows>0){
                    while($row = $font_result->fetch_assoc()){
                        echo  '
                        
                        <div class="service-banner">
                            <figure>
                                <!-- <img src="./image/download (2).jfif" alt="HD 4k resolution! only $3.99"> -->
                                <img src="../download_image/' . $row['photo'] . '"  alt="HD 4k resolution! only $3.99">

                            </figure>

                            <a href="./assets/images/service-banner.jpg" download class="service-btn">
                                <span>Download</span>

                                <ion-icon name="download-outline"></ion-icon>
                            </a>
                        </div>
                        ';
                    }
                }

                ?>
<!-- 
                    <div class="service-banner">
                        <figure>
                            <img src="./image/download (2).jfif" alt="HD 4k resolution! only $3.99">
                        </figure>

                        <a href="./assets/images/service-banner.jpg" download class="service-btn">
                            <span>Download</span>

                            <ion-icon name="download-outline"></ion-icon>
                        </a>
                    </div> -->


                <?php
                $font_title    = "SELECT * FROM `download`  LIMIT 1";
                $title_result  = $connect->query($font_title);
                if($title_result->num_rows>0){
                    while($row  = $title_result->fetch_assoc()){

                        echo  '
                        
                        <div class="service-content">

                        <p class="service-subtitle">Our Services</p>

                        <h2 class="h2 service-title">Download Your Shows Watch Offline.</h2>

                        <p class="service-text">' . $row['title'] . '</p>

                        <ul class="service-list">

                            <li>
                                <div class="service-card">

                                    <div class="card-icon">
                                        <ion-icon name="tv"></ion-icon>
                                    </div>

                                    <div class="card-content">
                                        <h3 class="h3 card-title">Enjoy on Your TV.</h3>

                                        <p class="card-text">' . $row['enjoy_title'] . '</p>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="service-card">

                                    <div class="card-icon">
                                        <ion-icon name="videocam"></ion-icon>
                                    </div>

                                    <div class="card-content">
                                        <h3 class="h3 card-title">Watch Everywhere.</h3>

                                        <p class="card-text">' . $row['enjoy_watch'] . ' </p>
                                    </div>

                                </div>
                            </li>

                        </ul>

                    </div>

                        ';
                    }
                }


                ?>

                    <!-- <div class="service-content">

                        <p class="service-subtitle">Our Services</p>

                        <h2 class="h2 service-title">Download Your Shows Watch Offline.</h2>

                        <p class="service-text">
                            Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many
                            variations of
                            passages of lorem
                            Ipsum available, but the majority have suffered alteration in some injected humour.
                        </p>

                        <ul class="service-list">

                            <li>
                                <div class="service-card">

                                    <div class="card-icon">
                                        <ion-icon name="tv"></ion-icon>
                                    </div>

                                    <div class="card-content">
                                        <h3 class="h3 card-title">Enjoy on Your TV.</h3>

                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod
                                            tempor.
                                        </p>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="service-card">

                                    <div class="card-icon">
                                        <ion-icon name="videocam"></ion-icon>
                                    </div>

                                    <div class="card-content">
                                        <h3 class="h3 card-title">Watch Everywhere.</h3>

                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod
                                            tempor.
                                        </p>
                                    </div>

                                </div>
                            </li>

                        </ul>

                    </div> -->

                </div>
            </section>

            <!-- Top reated -->
            <section class="top-rated">
                <div class="container">

                    <p class="section-subtitle">Online Streaming</p>

                    <h2 class="h2 section-title">Top Rated Movies</h2>

                    <ul class="filter-list">

                        <li>
                            <button class="filter-btn">Movies</button>
                        </li>

                        <li>
                            <button class="filter-btn">TV Shows</button>
                        </li>

                        <li>
                            <button class="filter-btn">Documentary</button>
                        </li>

                        <li>
                            <button class="filter-btn">Sports</button>
                        </li>

                    </ul>

                    <ul class="movies-list">

                        <!-- <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./image/images (1).jfif">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Sonic the Hedgehog 2</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">2K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT122M">122 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>7.8</data>
                                    </div>
                                </div>

                            </div>
                        </li> -->

                        <?php
                        $select_from   = "SELECT * FROM `tb_toprate_and_worldbest` WHERE tpye = 'topRate' LIMIT 8";
                        $result_from   = $connect->query($select_from);
                        if ($result_from->num_rows > 0) {
                            while ($row = $result_from->fetch_assoc()) {

                                echo  '

                                    <li>
                                    <div class="movie-card">

                                        <a href="./movie-details.html">
                                            <figure class="card-banner">
                                                <img src="../topRate_worldBest_image/' . $row['photo'] . '">
                                            </figure>
                                        </a>

                                        <div class="title-wrapper">
                                            <a href="./movie-details.html">
                                                <h3 class="card-title">' . $row['title'] . '</h3>
                                            </a>

                                            <time datetime="2022">' . $row['date'] . '</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">' . $row['HD'] . '</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT122M">' . $row['hour'] . '</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>' . $row['star'] . '</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                
                                ';
                            }
                        }
                        ?>

                        <!-- <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./image/unnamed.jpg" alt="Morbius movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Morbius</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">HD</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT104M">104 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>5.9</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./image/download (6).jfif" alt="The Adam Project movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">The Adam Project</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">4K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT106M">106 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>7.0</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./image/download (7).jfif" alt="Free Guy movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Free Guy</h3>
                                    </a>

                                    <time datetime="2021">2021</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">4K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT115M">115 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>7.7</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="https://m.media-amazon.com/images/I/814V1XJaoAL._AC_SL1500_.jpg"
                                            alt="The Batman movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">The Batman</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">4K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT176M">176 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>7.9</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="https://m.media-amazon.com/images/M/MV5BMTY4MTUxMjQ5OV5BMl5BanBnXkFtZTcwNTUyMzg5Ng@@._V1_.jpg"
                                            alt="Uncharted movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Uncharted</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">HD</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT116M">116 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>7.0</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="https://filmfisher.com/wp-content/uploads/2015/08/RogueNation02.jpg"
                                            alt="Death on the Nile movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Death on the Nile</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">2K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT127M">127 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>6.5</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="https://i.pinimg.com/736x/e7/a6/8c/e7a68c3c8ff05a00202736163013fa27.jpg"
                                            alt="The King's Man movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">The King's Man</h3>
                                    </a>

                                    <time datetime="2021">2021</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">HD</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT131M">131 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>7.0</data>
                                    </div>
                                </div>

                            </div>
                        </li> -->

                    </ul>

                </div>
            </section>

            <!-- TV service -->
            <section class="tv-series">
                <div class="container">

                    <p class="section-subtitle">Best TV Series</p>

                    <h2 class="h2 section-title">World Best TV Series</h2>

                    <ul class="movies-list">

                        <!-- <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./image/download (1).jfif" alt="Moon Knight movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Moon Knight</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">2K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT47M">47 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>8.6</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="http://allears.net/wp-content/uploads/2019/10/the-jungle-cruise-movie.jpg"
                                            alt="Halo movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Halo</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">2K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT59M">59 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>8.8</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="./image/download.jfif" alt="Vikings: Valhalla movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Vikings: Valhalla</h3>
                                    </a>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">2K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT51M">51 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>8.3</data>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="movie-card">

                                <a href="./movie-details.html">
                                    <figure class="card-banner">
                                        <img src="https://play-lh.googleusercontent.com/560-H8NVZRHk00g3RltRun4IGB-Ndl0I0iKy33D7EQ0cRRwH78-c46s90lZ1ho_F1so"
                                            alt="Money Heist movie poster">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="./movie-details.html">
                                        <h3 class="card-title">Money Heist</h3>
                                    </a>

                                    <time datetime="2017">2017</time>
                                </div>

                                <div class="card-meta">
                                    <div class="badge badge-outline">4K</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT70M">70 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>8.3</data>
                                    </div>
                                </div>

                            </div>
                        </li> -->

                        <?php

                        $top_select    = "SELECT * FROM `tb_toprate_and_worldbest` WHERE tpye = 'worldBest' LIMIT 4";
                        $top_result    = $connect->query($top_select);
                        if ($top_result->num_rows > 0) {
                            while ($row = $top_result->fetch_assoc()) {
                                echo  '

                                <li>
                                <div class="movie-card">

                                    <a href="./movie-details.html">
                                        <figure class="card-banner">
                                            <img src="../topRate_worldBest_image/' . $row['photo'] . '">
                                        </figure>
                                    </a>

                                    <div class="title-wrapper">
                                        <a href="./movie-details.html">
                                            <h3 class="card-title">' . $row['title'] . '</h3>
                                        </a>

                                        <time datetime="2022">' . $row['date'] . '</time>
                                    </div>

                                    <div class="card-meta">
                                        <div class="badge badge-outline">' . $row['HD'] . '</div>

                                        <div class="duration">
                                            <ion-icon name="time-outline"></ion-icon>

                                            <time datetime="PT122M">' . $row['hour'] . '</time>
                                        </div>

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>

                                            <data>' . $row['star'] . '</data>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            
                            ';
                            }
                        }



                        ?>

                    </ul>

                </div>
            </section>

            <!-- CTA -->
            <section class="cta">
                <div class="container">

                    <div class="title-wrapper">
                        <h2 class="cta-title">Trial start first 30 days.</h2>

                        <p class="cta-text">
                            Enter your email to create or restart your membership.
                        </p>
                    </div>

                    <form action="" class="cta-form">
                        <input type="email" name="email" required placeholder="Enter your email" class="email-field">

                        <button type="submit" class="cta-form-btn">Get started</button>
                    </form>

                </div>
            </section>

        </article>
    </main>

    <!-- footer -->
    <footer class="footer">

        <div class="footer-top">
            <div class="container">

                <div class="footer-brand-wrapper">

                    <a href="./index.html" class="logo">
                        <img src="./image/project-logo.png" alt="Filmlane logo">
                    </a>

                    <ul class="footer-list">

                        <li>
                            <a href="./index.html" class="footer-link">Home</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Movie</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">TV Show</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Web Series</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Pricing</a>
                        </li>

                    </ul>

                </div>

                <div class="divider"></div>

                <div class="quicklink-wrapper">

                    <ul class="quicklink-list">

                        <li>
                            <a href="#" class="quicklink-link">Faq</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-link">Help center</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-link">Terms of use</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-link">Privacy</a>
                        </li>

                    </ul>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-pinterest"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">

                <p class="copyright">
                    <!-- &copy; 2022 <a href="#">codewithsadee</a>. All Rights Reserved -->
                    &copy; 2022 <a href="#">thaidymong</a>. All Rights Reserved
                </p>

                <!-- <img src="./assets/images/footer-bottom-img.png" alt="Online banking companies logo"
                    class="footer-bottom-img"> -->


            </div>
        </div>


        <!-- test css slide -->
        <!-- <section class="upcoming">
            <div class="container">
                <div class="flex-wrapper">
                    <div class="title-wrapper">
                        <p class="section-subtitle">Online Streaming</p>
                        <h2 class="h2 section-title">Upcoming Movies</h2>
                    </div>
                    <ul class="filter-list">
                        <li><button class="filter-btn">Movies</button></li>
                        <li><button class="filter-btn">TV Shows</button></li>
                        <li><button class="filter-btn">Anime</button> </li>
                    </ul>
                </div>
                <ul class="movies-list  has-scrollbar">
                    <li>
                        <div class="movie-card">
                            <a href="./movie-details.html">
                                <figure class="card-banner">
                                    <img src="./image/images.jfif" alt="The Northman movie poster">
                                </figure>
                            </a>
                            <div class="title-wrapper">
                                <a href="./movie-details.html">
                                    <h3 class="card-title">The Northman</h3>
                                </a>
                                <time datetime="2022">2022</time>
                            </div>
                            <div class="card-meta">
                                <div class="badge badge-outline">HD</div>
                                <div class="duration">
                                    <ion-icon name="time-outline"></ion-icon>
                                    <time datetime="PT137M">137 min</time>
                                </div>
                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <data>8.5</data>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="movie-card">

                            <a href="./movie-details.html">
                                <figure class="card-banner">
                                    <img src="./image/download (5).jfif"
                                        alt="Doctor Strange in the Multiverse of Madness movie poster">
                                </figure>
                            </a>

                            <div class="title-wrapper">
                                <a href="./movie-details.html">
                                    <h3 class="card-title">Doctor Strange in the Multiverse of Madness</h3>
                                </a>

                                <time datetime="2022">2022</time>
                            </div>

                            <div class="card-meta">
                                <div class="badge badge-outline">4K</div>

                                <div class="duration">
                                    <ion-icon name="time-outline"></ion-icon>

                                    <time datetime="PT126M">126 min</time>
                                </div>

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>

                                    <data>NR</data>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="movie-card">

                            <a href="./movie-details.html">
                                <figure class="card-banner">
                                    <img src="./image/download (4).jfif" alt="Memory movie poster">
                                </figure>
                            </a>

                            <div class="title-wrapper">
                                <a href="./movie-details.html">
                                    <h3 class="card-title">Memory</h3>
                                </a>

                                <time datetime="2022">2022</time>
                            </div>

                            <div class="card-meta">
                                <div class="badge badge-outline">2K</div>

                                <div class="duration">
                                    <ion-icon name="time-outline"></ion-icon>

                                    <time datetime="">N/A</time>
                                </div>

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>

                                    <data>NR</data>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="movie-card">

                            <a href="./movie-details.html">
                                <figure class="card-banner">
                                    <img src="./image/download5.jpg"
                                        alt="The Unbearable Weight of Massive Talent movie poster">
                                </figure>
                            </a>

                            <div class="title-wrapper">
                                <a href="./movie-details.html">
                                    <h3 class="card-title">The Unbearable Weight of Massive Talent</h3>
                                </a>

                                <time datetime="2022">2022</time>
                            </div>

                            <div class="card-meta">
                                <div class="badge badge-outline">HD</div>

                                <div class="duration">
                                    <ion-icon name="time-outline"></ion-icon>

                                    <time datetime="PT107M">107 min</time>
                                </div>

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>

                                    <data>NR</data>
                                </div>
                            </div>

                        </div>
                    </li>

                </ul>

            </div>
        </section> -->



        <!-- test css slide -->
    </footer>
    <!-- go to top -->
    <a href="#top" class="go-top" data-go-top>
        <ion-icon name="chevron-up"></ion-icon>
    </a>

    <script src="./movie.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>