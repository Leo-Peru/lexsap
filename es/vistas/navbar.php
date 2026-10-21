<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-block d-lg-block">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i><a href="mailto:general@lexsap.com.pe">general@lexsap.com.pe</a>
            <i class="icofont-phone"></i><span> 51-998672330 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <a href="https://wa.me/51939893753" target="_blank"><img class="img-fluid" src="../assets/img/whatsapp.png" alt="Whatsapp"><span> 51-939893753 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
            <a href="../index.php" class="twitter"><img src="../assets/img/ico/flag_uk.png" alt="Flag United Kingdom" width="24" height="24" /> English</a>
        </div>

        <div class="social-links">
            
            <!--
            <a href="https://api.whatsapp.com/send?phone=51939893753" target="_blank"><i class="fab fa-whatsapp"></i></a>            
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
-->
        </div>

    </div>
</section>

<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light">
                <a href="index.php">
                    <img src="../assets/img/logo/logox800.jpg" alt="Logo">
                    <!--<span>INTELLECTUAL PROPERTY</span>-->
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li <?php if ($pagina == 'index') { ?> class="active" <?php } ?>><a href="index.php">Inicio</a></li>
                <li <?php if ($pagina == 'nosotros') { ?> class="active" <?php } ?>><a href="nosotros.php">Nosotros</a></li>
                <li <?php if ($pagina == 'servicios') { ?> class="active" <?php } ?>><a href="servicios.php">Servicios</a></li>
                <li <?php if ($pagina == 'contacto') { ?> class="active" <?php } ?>><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->