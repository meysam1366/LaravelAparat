<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeTube video</title>
    <link rel="stylesheet" href="/vendor/css/app.css">
    <link rel="stylesheet" href="/vendor/css/theme.css">
    <link rel="stylesheet" href="/vendor/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/vendor/css/jquery.kyco.easyshare.css">
    <link rel="stylesheet" href="/vendor/css/responsive.css">

</head>

<body>
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
            <div>
                <section class="category-content">
                    <div class="row">
                        <div class="large-8 columns">
                            <section class="content content-with-sidebar">
                                <!--header-->
                                @yield('video')
                            </section>
                            <!-- ad Section -->
                            <div class="googleAdv">
                                <a href="#"><img src="images/goodleadv.png" alt="googel ads"></a>
                            </div><!-- End ad Section -->
                        </div>
                        @include('vendor.aparat.layouts.sidebar')
                    </div>
                </section><!-- End Category Content-->
            </div>
        </div>
        <!--end off canvas wrapper inner-->
    </div>
    <!--end off canvas wrapper-->
    <!-- script files -->
    <script src="/vendor/bower_components/jquery/dist/jquery.js"></script>
    <script src="/vendor/bower_components/what-input/what-input.js"></script>
    <script src="/vendor/bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="/vendor/js/jquery.showmore.src.js" type="text/javascript"></script>
    <script src="/vendor/js/app.js"></script>
    <script src="/vendor/js/owl.carousel.min.js"></script>
    <script src="/vendor/js/inewsticker.js" type="text/javascript"></script>
    <script src="/vendor/js/jquery.kyco.easyshare.js" type="text/javascript"></script>
</body>

</html>
