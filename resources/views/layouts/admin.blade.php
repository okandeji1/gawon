<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>{{ config('app.name', 'Gawon Bariki') }}</title>
    <!-- Favicons -->
    <link href="/images/tr.ico" rel="icon">
    <link href="/images/tr.ico" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/stylesheet/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="/lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="/stylesheet/css/style.css" rel="stylesheet">
    <link href="/stylesheet/css/style-responsive.css" rel="stylesheet">
    <script src="/lib/chart-master/Chart.js"></script>

</head>

<body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        @include('partials.admin.header')
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        @include('partials.admin.sidebar')
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            @yield('content')
        </section>
        <!--main content end-->
        <!--footer start-->
        @include('partials.admin.footer')
        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/lib/jquery.scrollTo.min.js"></script>
    <script src="/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="/lib/common-scripts.js"></script>
    <script type="text/javascript" src="/lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="/lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="/lib/sparkline-chart.js"></script>
    <script src="/lib/zabuto_calendar.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Welcome to Dashio!',
                // (string | mandatory) the text inside the notification
                text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
                // (string | optional) the image to display on the left
                image: 'img/ui-sam.jpg',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: false,
                // (int | optional) the time you want it to be alive for before fading out
                time: 8000,
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'my-sticky-class'
            });

            return false;
        });
    </script>
    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({
                html: true,
                trigger: "manual"
            });
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [{
                    type: "text",
                    label: "Special event",
                    badge: "00"
                },
                {
                    type: "block",
                    label: "Regular event",
                }
                ]
            });
        });

        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
</body>

</html>
