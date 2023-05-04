<?php
    session_start();
    require'car_units.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RL Car Dealer</title>
    <link rel="stylesheet" href="css/swiper/css/swiper-bundle.min.css">
    <!-- <link rel="stylesheet" href="css/fontawesome/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>

    <!-- navigation bar -->
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"> RL Car dealer</a>

            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#vehicles">vehicles</a>
                <a href="#featured">featured</a>
                <a href="#services">services</a>
                <a href="#contact">contact</a>
            </nav>

        <div id="login-btn">
            <a href="/Admin/pages-login.html" class="btn" role="button">Login</a>
            <i class="far fa-user"></i>
        </div>

</header> 
    
        <div>
            <span id="close-login-form" class="fas fa-times"></span>
        </div>

<section class="home" id="home">
    <img data-speed="5" class="home-parallax" src="images/home-img.png" alt="">
</section>


<section class="vehicles" id="vehicles">
    <h1 class="heading"> Here are the list of our available units </h1>
        <div class="swiper vehicles-slider" >
            <div class="swiper-wrapper">
            
    <?php
        if(isset($arrUnits_new))
        foreach($arrUnits_new as $key => $units) {
    ?> 
        <div class="swiper-slide box">
            <img src="images/<?php echo $units['image']; ?>">
                    
            <div class="content">
                <h3 class="title"><?php echo $units['car_model']; ?></h3>
                <h3 class="title"><?php echo $units['car_variant']; ?></h3>
                <div class="price"> <span></span>₱<?php echo $units['price']; ?></div>
            <p>
                <span class="fas fa-circle"></span><?php echo $units['engine']; ?>
                <span class="fas fa-circle"></span><?php echo $units['transmission']; ?>
                <span class="fas fa-circle"></span><?php echo $units['fuel']; ?>
            </p>
                <a href="#" class="btn">View Details</a>
                    </div>
                </div>
    <?php
        }else{
        echo ('No Product Detected!');
         }
    ?>
            </div>
        <div class="swiper-pagination"></div>
    </div>
</section>


    <section class="featured" id="featured" >
        <div class="swiper featured-slider">
             <div class="swiper-wrapper">

    <?php
        if(isset($arrUnits_old1))
        foreach($arrUnits_old1 as $key => $units1) {
    ?> 
        <div class="swiper-slide box">
            <img src="images/<?php echo $units1['image']; ?>">

            <div class="content">
                <h3 class="title"><?php echo $units1['car_model']; ?></h3>
                <h3 class="title"><?php echo $units1['car_variant']; ?></h3>
                <div class="price"> <span></span>₱<?php echo $units1['price']; ?></div>
            <p>
                <span class="fas fa-circle"></span><?php echo $units1['engine']; ?>
                <span class="fas fa-circle"></span><?php echo $units1['transmission']; ?>
                <span class="fas fa-circle"></span><?php echo $units1['fuel']; ?>
            </p>
                        <a href="" class="btn">View Details</a>
                    </div>
                </div>
    <?php
        }else{
        echo ('No Product Detected!');
         }
    ?>
             </div>
        <div class="swiper-pagination"></div>
    </div>


        <div class="swiper featured-slider">
            <div class="swiper-wrapper">

    <?php
        if(isset($arrUnits_old2))
        foreach($arrUnits_old2 as $key => $units2) {
    ?> 
        <div class="swiper-slide box">
            <img src="images/<?php echo $units2['image']; ?>">

            <div class="content">
                <h3 class="title"><?php echo $units2['car_model']; ?></h3>
                <h3 class="title"><?php echo $units2['car_variant']; ?></h3>
                <div class="price"> <span></span>₱<?php echo $units2['price']; ?></div>
            <p>
                <span class="fas fa-circle"></span><?php echo $units2['engine']; ?>
                <span class="fas fa-circle"></span><?php echo $units2['transmission']; ?>
                <span class="fas fa-circle"></span><?php echo $units2['fuel']; ?>
            </p>
                        <a href="" class="btn">View Details</a>
                    </div>
                </div>
    <?php
        }else{
        echo ('No Product Detected!');
         }
    ?>
             </div>
        <div class="swiper-pagination"></div>
    </div>
</section>




    <section class="services" id="services">

        <h1 class="heading"> our services </h1>

            <div class="box-container">

                <div class="box">
                <i class="fa-solid fa-car"></i>
                    <h3>Auto Detailing</h3>
                    <a href="#" class="btn">Book Now</a>
                </div>

                <div class="box">
                <i class="fa-solid fa-car-on"></i>
                    <h3>Car Wash</h3>
                    <a href="#" class="btn">Book Now</a>
                </div>

                <div class="box">
                <i class="fas fa-brush"></i>
                    <h3>Paint Correction</h3>
                    <a href="#" class="btn">Book Now</a>
                </div>
         </div>

    </section>


    <section class="contact" id="contact">
   
        <h1 class="heading">contact us</h1>

            <div class="row">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.4162158740205!2d120.59591877603317!3d15.46202838513293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c79f113fa03b%3A0x93ae318851a06dd0!2sRL%20Auto%20Detailing%20%26%20Car%20Display%20Center!5e0!3m2!1sen!2sph!4v1668774245844!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <form action="">
                    <h3>get in touch</h3>
                    <input type="text" placeholder="your name" class="box">
                    <input type="email" placeholder="your email" class="box">
                    <input type="tel" placeholder="subject" class="box">
                    <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
                    <input type="submit" value="send message" class="btn">
                </form>

            </div>

    </section>

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> 045-606-7463 </a>
                <a href="#"> <i class="fas fa-phone"></i> 09605684932 </a>
                <a href="#"> <i class="fas fa-envelope"></i> RlCars@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> MC arthur highway San Rafael, Tarlac City</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            </div>

        </div>

    </section>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <div id="fb-customer-chat" class="fb-customerchat"></div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "PAGE-ID");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>


    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'API-VERSION'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>