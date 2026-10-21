<?php
include 'vistas/head.php';
?>
<?php
$pagina = "contacto";
include 'vistas/navbar.php';
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Contact</li>
            </ol>
            <h2>Contact</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Location</h3>
                        <p>SANTIAGO DE SURCO - LIMA - PERÚ</p>
                        <p>&nbsp;</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>E-Mails</h3>
                        <p><a href="mailto:general@lexsap.com.pe">general@lexsap.com.pe</a></p>
                        <p><a href="mailto:contacto@lexsap.com.pe">contacto@lexsap.com.pe</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <i class="fab fa-whatsapp"></i>
                        <h3>Phones</h3>
                        <p><span> 51-998672330 </span></p>
                        <p><a href="https://wa.me/51939893753" target="_blank"><span> 51-939893753</span></a> </p>

                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-12">
                    <form action="vistas/contacto.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 characters" />
                                <div class="validate"></div>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail" data-rule="email" data-msg="Please enter a valid email address" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 characters" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" placeholder="Message" data-msg="Please enter your message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Su Mensaje ha sido enviado. Gracias!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send</button></div>
                    </form>
                </div>

            </div>

        </div>

        <section id="map">
        <div class="container">
            <div class="map mt-2">
                <div style="text-align: center;">
                    <p>SANTIAGO DE SURCO - LIMA - PERÚ</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.1234567890123!2d-77.12345678901234!3d-12.123456789012345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1234567890123456%3A0x1234567890123456!2sSantiago%20de%20Surco%20-%20Lima%20-%20Per%C3%BA!5e0!3m2!1sen!2sus!4v1234567890123" frameborder="0" style="border:0; width: 100%; height: 350px;" allowfullscreen></iframe>
            </div>
        </div>
    </section><!-- End Map Section -->

    </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php
include 'vistas/footer.php';
?>