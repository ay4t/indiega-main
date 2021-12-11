<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Landrick - Saas & Software Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v3.8.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <!-- Bootstrap -->

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="/assets/css/colors/default.css" rel="stylesheet" id="color-opt">

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navbar STart -->
    <?= $this->include('Indiega\Views\Partials\header-navbar') ?>
    <!--end header-->
    <!-- Navbar End -->

    <!-- content -->
    <?= $this->renderSection('content') ?>
    <!-- end content -->

    <!-- Footer Start -->
    <?= $this->include('Indiega\Views\Partials\footer') ?>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Offcanvas Start -->
    <?= $this->include('Indiega\Views\Partials\offcanvas') ?>
    <!-- Offcanvas End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/feather.min.js"></script>
    <script src="/assets/js/plugins.init.js"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>