<?php wp_head() ?>

<div class="hero">

    <header>

        <nav>

            <div class="menu">
                    <div class="toggle-button" onclick="toggleMenu()">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>

                    <div class="page-list">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                    </div>

            </div>

            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s1-logo.png" alt="">
            </div>

        </nav>

    </header>
    
    <div class="red-section">


    <div class="main">
        <div class="socials">

            <div class="line"></div>

            <div class="icons">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook_4.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter_3.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram_4.png" alt="">

            </div>
            
            <div class="line"></div>

        </div>

        <div class="hero-content">
            <h1>SIGURNOST</h1>
            <p>S1 OBEZBEĐENJE</p>

            <a href="#">Naše usluge <span id="arrow-btn">&#8594;</span> </a>
            
        </div>
    </div>

    </div>
    

    <div class="hero-img">

    </div>

</div>

<?php get_footer() ?>