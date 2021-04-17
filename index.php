<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'head.php';?>
</head>
<body id="page-top">    
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
       <?php include 'menu.php';?>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <?php include 'header.php';?>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <?php include 'servicios.php';?>
    </section>

    <section class="page-section" id="tecnicas">
        <?php include 'tecnicas.php';?>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="about">
        <?php include 'about.php';?>
    </section>
    <section class="page-section" id="contact" style="padding-top: 30px; padding-bottom: 30px";>
        <?php include 'contacto.php';?>
    </section>
    <!-- Footer-->
    <?php include 'footer.php';?>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
