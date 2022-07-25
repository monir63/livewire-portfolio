

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Esham - Personal Portfolio Template">

    <!-- ========== Page Title ========== -->
    <title>Esham - Personal Portfoio Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="frontend/assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="frontend/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="frontend/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="frontend/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="frontend/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="frontend/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="frontend/assets/css/animate.css" rel="stylesheet" />
    <link href="frontend/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="frontend/assets/css/style.css" rel="stylesheet">
    <link href="frontend/assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="frontend/assets/js/html5/html5shiv.min.js"></script>
      <script src="frontend/assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

    <?php echo \Livewire\Livewire::styles(); ?>


</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header>

        <!-- Start Navigation -->

        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.navigation-menu', [])->html();
} elseif ($_instance->childHasBeenRendered('TZ0sco0')) {
    $componentId = $_instance->getRenderedChildComponentId('TZ0sco0');
    $componentTag = $_instance->getRenderedChildComponentTagName('TZ0sco0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TZ0sco0');
} else {
    $response = \Livewire\Livewire::mount('frontend.navigation-menu', []);
    $html = $response->html();
    $_instance->logRenderedChild('TZ0sco0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner
    ============================================= -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.banner', [])->html();
} elseif ($_instance->childHasBeenRendered('lUjNhQG')) {
    $componentId = $_instance->getRenderedChildComponentId('lUjNhQG');
    $componentTag = $_instance->getRenderedChildComponentTagName('lUjNhQG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lUjNhQG');
} else {
    $response = \Livewire\Livewire::mount('frontend.banner', []);
    $html = $response->html();
    $_instance->logRenderedChild('lUjNhQG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <!-- End Banner -->
    <!-- Start About
    ============================================= -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.about', [])->html();
} elseif ($_instance->childHasBeenRendered('TF9sdSz')) {
    $componentId = $_instance->getRenderedChildComponentId('TF9sdSz');
    $componentTag = $_instance->getRenderedChildComponentTagName('TF9sdSz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TF9sdSz');
} else {
    $response = \Livewire\Livewire::mount('frontend.about', []);
    $html = $response->html();
    $_instance->logRenderedChild('TF9sdSz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <!-- End About -->

    <!-- Start Services
    ============================================= -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.service', [])->html();
} elseif ($_instance->childHasBeenRendered('hSxIVM2')) {
    $componentId = $_instance->getRenderedChildComponentId('hSxIVM2');
    $componentTag = $_instance->getRenderedChildComponentTagName('hSxIVM2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('hSxIVM2');
} else {
    $response = \Livewire\Livewire::mount('frontend.service', []);
    $html = $response->html();
    $_instance->logRenderedChild('hSxIVM2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- End Services -->

    <!-- Start Experiance
    ============================================= -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.experiance', [])->html();
} elseif ($_instance->childHasBeenRendered('89OjQMw')) {
    $componentId = $_instance->getRenderedChildComponentId('89OjQMw');
    $componentTag = $_instance->getRenderedChildComponentTagName('89OjQMw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('89OjQMw');
} else {
    $response = \Livewire\Livewire::mount('frontend.experiance', []);
    $html = $response->html();
    $_instance->logRenderedChild('89OjQMw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- End Experiance -->

    <!-- Start Fun Factor
    ============================================= -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.funfactor', [])->html();
} elseif ($_instance->childHasBeenRendered('b5PLL7W')) {
    $componentId = $_instance->getRenderedChildComponentId('b5PLL7W');
    $componentTag = $_instance->getRenderedChildComponentTagName('b5PLL7W');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('b5PLL7W');
} else {
    $response = \Livewire\Livewire::mount('frontend.funfactor', []);
    $html = $response->html();
    $_instance->logRenderedChild('b5PLL7W', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- End Fun Factor -->

    <!-- Start Portfolio
    ============================================= -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.portfolio', [])->html();
} elseif ($_instance->childHasBeenRendered('1CxxoA0')) {
    $componentId = $_instance->getRenderedChildComponentId('1CxxoA0');
    $componentTag = $_instance->getRenderedChildComponentTagName('1CxxoA0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1CxxoA0');
} else {
    $response = \Livewire\Livewire::mount('frontend.portfolio', []);
    $html = $response->html();
    $_instance->logRenderedChild('1CxxoA0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- End Portfolio -->

    <!-- Start Testimonials
    ============================================= -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.testimonials', [])->html();
} elseif ($_instance->childHasBeenRendered('rX12XmA')) {
    $componentId = $_instance->getRenderedChildComponentId('rX12XmA');
    $componentTag = $_instance->getRenderedChildComponentTagName('rX12XmA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rX12XmA');
} else {
    $response = \Livewire\Livewire::mount('frontend.testimonials', []);
    $html = $response->html();
    $_instance->logRenderedChild('rX12XmA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- End Testimonials -->

    <!-- Start Blog
    ============================================= -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.blog', [])->html();
} elseif ($_instance->childHasBeenRendered('Jpy3k1q')) {
    $componentId = $_instance->getRenderedChildComponentId('Jpy3k1q');
    $componentTag = $_instance->getRenderedChildComponentTagName('Jpy3k1q');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Jpy3k1q');
} else {
    $response = \Livewire\Livewire::mount('frontend.blog', []);
    $html = $response->html();
    $_instance->logRenderedChild('Jpy3k1q', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- End Blog -->

    <!-- Start Contact Form
    ============================================= -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.contact', [])->html();
} elseif ($_instance->childHasBeenRendered('AZ8I4c9')) {
    $componentId = $_instance->getRenderedChildComponentId('AZ8I4c9');
    $componentTag = $_instance->getRenderedChildComponentTagName('AZ8I4c9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AZ8I4c9');
} else {
    $response = \Livewire\Livewire::mount('frontend.contact', []);
    $html = $response->html();
    $_instance->logRenderedChild('AZ8I4c9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- End Contact Info -->

    <!-- Start Footer
    ============================================= -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 footer-social">
                    <ul>
                        <li class="facebook">
                            <a href="#">Fb</a>
                        </li>
                        <li class="twitter">
                            <a href="#">Tw</a>
                        </li>
                        <li class="google">
                            <a href="#">G+</a>
                        </li>
                        <li class="vimeo">
                            <a href="#">Vm</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 copyright-text">
                    <p>&copy; 2018 Esham. Powerd with <i class="fa fa-heart"></i> by <a href="#" target="_blank">ValidTheme</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="frontend/assets/js/jquery-1.12.4.min.js"></script>
    <script src="frontend/assets/js/bootstrap.min.js"></script>
    <script src="frontend/assets/js/equal-height.min.js"></script>
    <script src="frontend/assets/js/jaliswall.js"></script>
    <script src="frontend/assets/js/jquery.appear.js"></script>
    <script src="frontend/assets/js/jquery.easing.min.js"></script>
    <script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="frontend/assets/js/modernizr.custom.13711.js"></script>
    <script src="frontend/assets/js/owl.carousel.min.js"></script>
    <script src="frontend/assets/js/particles.min.js"></script>
    <script src="frontend/assets/js/wow.min.js"></script>
    <script src="frontend/assets/js/YTPlayer.min.js"></script>
    <script src="frontend/assets/js/isotope.pkgd.min.js"></script>
    <script src="frontend/assets/js/count-to.js"></script>
    <script src="frontend/assets/js/typed.js"></script>
    <script src="frontend/assets/js/bootsnav.js"></script>
    <script src="frontend/assets/js/main.js"></script>

    <?php echo \Livewire\Livewire::scripts(); ?>


</body>
</html>
<?php /**PATH F:\livewire-portfolio\resources\views/welcome.blade.php ENDPATH**/ ?>