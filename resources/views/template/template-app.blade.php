<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>L'Annuaire Des Projets</title>

    <!-- Favicons -->
    <link href="{{ url('/') }}/img/favicon.png" rel="icon">
    <link href="{{ url('/') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="{{ url('/') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/lib/bootstrap-datepicker/css/datepicker.css"/>
    <!-- Custom styles for this template -->
    <link href="{{ url('/') }}/css/style-custom.css" rel="stylesheet">
    <link href="{{ url('/') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('/') }}/css/style-responsive.css" rel="stylesheet">
    <script src="{{ url('/') }}/lib/chart-master/Chart.js"></script>

</head>

<body>


<section id="container">
    <!--header start-->
    @include('includes.header')
    <!--header end-->

    <!--sidebar start-->
    @include('includes.sidebar')
    <!--sidebar end-->

    <!--main content start-->
    <main class="col-md-offset-2">
        @yield('content')
    </main>
    <!--main content end-->
    <!--footer start-->
    @include('includes.footer')
    <!--footer end-->
</section>


<script src="{{ url('/') }}/lib/jquery/jquery.min.js"></script>
<script src="{{ url('/') }}/lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="{{ url('/') }}/lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{ url('/') }}/lib/jquery.scrollTo.min.js"></script>
<script src="{{ url('/') }}/lib/jquery.nicescroll.js" type="text/javascript"></script>
<!--common script for all pages-->
<script src="{{ url('/') }}/lib/common-scripts.js"></script>
<!--script for this page-->
<script src="{{ url('/') }}/lib/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="{{ url('/') }}/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="{{ url('/') }}/lib/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="{{ url('/') }}/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript"
        src="{{ url('/') }}/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="{{ url('/') }}/lib/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="{{ url('/') }}/lib/advanced-form-components.js"></script>


<!--script for this page-->
<script type="text/javascript">
    $('.default-date-picker').datepicker({
        format: 'dd/mm/yyyy'
    });
</script>

</body>

</html>
