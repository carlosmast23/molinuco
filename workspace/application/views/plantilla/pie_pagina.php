    <!-- ======= MENSAJE FINAL ===== -->
    <!-- campo oculto para saber si debe monstrar un mensaje de error -->
    <input id="mostrarError" type="hidden" value="<?php echo $mensaje ?>" />

    <script>
        $(document).ready(function() {
            $mensaje=$("#mostrarError").val();
            if($mensaje!='')
            {
                alert($("#mostrarError").val());
            }
        });
    </script>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <!--<div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>CIA MOLINUCO TRANS<span>.</span></h3>
                        <p>
                            Loreto - Antonío Tandazo lote 5 <br><br>
                            <strong>Teléfono:</strong> 022083325<br>
                            <strong>Email:</strong> molinucotrans@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Enlaces</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Acerca</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Paquete</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Galeria</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Otros Servicios</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Hospedaje</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Comida</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Servicio Transporte</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestras Redes Sociales</h4>
                        <p>Nos puedes encontrar en nuestras redes sociales</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>CIA MOLINUCO TRANS</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/CIA MOLINUCO TRANS-bootstrap-business-template/ -->
                Diseñado Por <a href="https://bootstrapmade.com/">Alexandra Nacimba</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>public/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>public/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>public/assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url() ?>public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>public/assets/vendor/waypoints/noframework.waypoints.js"></script>


    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>public/assets/js/main.js"></script>

    </body>

    </html>