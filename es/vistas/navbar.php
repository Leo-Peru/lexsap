<?php
$switch_lang_url = "../index.php";
if (isset($pagina)) {
    if ($pagina == 'nosotros') $switch_lang_url = "../about_us.php";
    elseif ($pagina == 'servicios') $switch_lang_url = "../services.php";
    elseif ($pagina == 'contacto') $switch_lang_url = "../contact.php";
}
?>
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-block d-lg-block">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i><a href="mailto:general@lexsap.com.pe">general@lexsap.com.pe</a>
            <i class="icofont-phone"></i><span> 51-998672330 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <a href="https://wa.me/51939893753" target="_blank"><img class="img-fluid" src="../assets/img/whatsapp.png" alt="WhatsApp Lexsap"><span> 51-939893753 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
            <a href="<?php echo $switch_lang_url; ?>" class="twitter"><img src="../assets/img/ico/flag_uk.png" alt="English Version" width="24" height="24" /> English</a>
        </div>

        <div class="social-links">
        </div>

    </div>
</section>

<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <p class="h1 text-light m-0">
                <a href="index.php">
                    <img src="../assets/img/logo/logox800.jpg" alt="Logo LEXSAP INTELLECTUAL PROPERTY">
                </a>
            </p>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li <?php if (isset($pagina) && $pagina == 'index') { ?> class="active" <?php } ?>><a href="index.php">Inicio</a></li>
                <li <?php if (isset($pagina) && $pagina == 'nosotros') { ?> class="active" <?php } ?>><a href="nosotros.php">Nosotros</a></li>
                <li <?php if (isset($pagina) && $pagina == 'servicios') { ?> class="active" <?php } ?>><a href="servicios.php">Servicios</a></li>
                <li <?php if (isset($pagina) && $pagina == 'contacto') { ?> class="active" <?php } ?>><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
