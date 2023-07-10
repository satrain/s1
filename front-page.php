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

<section class="trazim">

<div class="container">

<p class="section-heading">TRAŽIM...</p>

<div class="separator"></div>

    <div class="cards">


        <div class="card">

            <div class="card-content">
                <img src="" alt="zastita">
                <p style="color:black">Zaštitu</p>
            </div>

        </div>
    

        <div class="card">

            <div class="card-content">
            <img src="" alt="info-o-s1">
            <p style="color:black">Informacije o S1</p>
            </div>

        </div>
 

    
        <div class="card">

            <div class="card-content">
            <img src="" alt="posau-u-s1">
            <p style="color:black">Posao u S1</p>
            </div>

        </div>
    

    </div>

</div>

</section>

<section class="usluge">

<p class="section-heading" style="color:white; margin-bottom:12px;">NAŠE USLUGE</p>

    <div class="container">

    <div class="cards usluga">

        <div class="card bg">

        <img src="" alt="slika">
        <h4>Alarm</h4>
        <p>U ovu uslugu uključujemo razne vrste tehničke zaštite u vašem domu ili poslovnom prostoru. Možemo vam ugraditi najsavremenije sisteme.</p>

        </div>

        <div class="card bg">

        <img src="" alt="slika">
        <h4>Intervencija</h4>
        <p>Mogućnost povezivanja vašeg objekta sa našim dojavno-operativnim centrom. Naoružani zaštitari mogu stići na vašu adresu u par minuta.</p>

        </div>
 
        <div class="card bg">

        <img src="" alt="slika">
        <h4>Zaštitar na objektu</h4>
        <p>Zaštitari mogu biti na vašem objektu tokom radnog vremena, nakon zatvaranja poslovnih objekata ili 24 sata.</p>

        </div>
    </div>


    <div class="cards usluga">

        <div class="card bg">

        <img src="" alt="slika">
        <h4>Zaštita bez zaštitara na objektu</h4>
        <p>Nudimo kontinuirano praćenje video nadzora sa vašeg objekta u našem dojavno-operativnom centru.</p>

        </div>

        <div class="card bg">

        <img src="" alt="slika">
        <h4>Transport novca i dragocenosti</h4>
        <p>Preduzeća koja u svom poslovanju rade sa gotovim novcem mogu od nas dobiti uslugu kupljenja i predaje pazara u bankama.</p>

        </div>

        <div class="card bg">

        <img src="" alt="slika">
        <h4>Pametni sef</h4>
        <p>Zahvaljujući tehnološkim rešenjima vaši zaposleni mogu sami polagati gotovinu (novčanice i kovanice) u aparate u vašem prostoru.</p>

        </div>
    </div>


    <div class="cards usluga">

        <div class="card bg">

        <img src="" alt="slika">
        <h4>zaštita manifestacija</h4>
        <p>Bez obzira na besprekornu organizaciju manifestacije, fizičko prisustvo uniformisanog i sertifikovanog lica uliva osećaj sigurnosti.</p>

        </div>

        <div class="card bg">

        <img src="" alt="slika">
        <h4>Bodyguarding</h4>
        <p>Određeni broj zaposlenih u S1 imaju potrebna znanja i veštine potrebne za zaštitu osoba kojima je potrebno vanredno obezbeđenje.</p>

        </div>

        <div class="card bg">

        <img src="" alt="slika">
        <h4>Procena ugroženosti</h4>
        <p>Pružamo uslugu izrade procene ugroženosti i elaborata o zaštiti ljudi i imovine. Imamo na raspolaganju edukovane i iskusne timove.</p>

        </div>
    </div>
    
    </div>

</section>

<?php get_footer() ?>


