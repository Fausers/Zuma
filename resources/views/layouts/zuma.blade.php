<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<title>{{ config('app.name', 'Zumarini') }}</title>

<!-- Stylesheets -->

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->

<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->

<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="css/style.css" rel="stylesheet">

<link href="css/responsive.css" rel="stylesheet">



<link rel="shortcut icon" href="/images/zumarini_logo.png" type="image/x-icon">

<link rel="icon" href="/images/zumarini_logo.png" type="image/x-icon">

<!--Color Switcher Mockup-->

<link href="css/color-switcher-design.css" rel="stylesheet">



<!-- Responsive -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>



<body>



<div class="page-wrapper">




    @yield('content')

    <!-- Main Footer -->

    @include('includes.footer')

    <!-- End Footer -->



</div>

<!-- End Page Wrapper -->



<!--Scroll to top-->

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>




<script src="js/jquery.js"></script>

<script src="js/popper.min.js"></script>

<!--Revolution Slider-->

<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

<script src="js/main-slider-script.js"></script>

<!--Revolution Slider-->

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.fancybox.js"></script>

<script src="js/jquery.countdown.js"></script>

<script src="js/appear.js"></script>

<script src="js/owl.js"></script>

<script src="js/wow.js"></script>

<script src="js/script.js"></script>

<!-- Color Setting -->

<script src="js/color-settings.js"></script>

</body>

</html>
