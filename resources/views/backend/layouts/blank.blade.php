<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include("frontend.layouts.style")
</head>
<body>

@yield("content")


{{-- script links --}}
<script src="{{ asset("backend/plugins/common/common.min.js") }}"></script>
    <script src="{{ asset("backend/js/custom.min.js") }}"></script>
    <script src="{{ asset("backend/js/settings.js") }}"></script>
    <script src="{{ asset("backend/js/gleek.js") }}"></script>
    <script src="{{ asset("backend/js/styleSwitcher.js") }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset("backend/plugins/chart.js/Chart.bundle.min.js") }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset("backend/plugins/circle-progress/circle-progress.min.js") }}"></script>
    <!-- Datamap -->
    <script src="{{ asset("backend/plugins/d3v3/index.js") }}"></script>
    <script src="{{ asset("backend/plugins/topojson/topojson.min.js") }}"></script>
    <script src="{{ asset("backend/plugins/datamaps/datamaps.world.min.js") }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset("backend/plugins/raphael/raphael.min.js") }}"></script>
    <script src="{{ asset("backend/plugins/morris/morris.min.js") }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset("backend/plugins/moment/moment.min.js") }}"></script>
    <script src="{{ asset("backend/plugins/pg-calendar/js/pignose.calendar.min.js") }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset("backend/plugins/chartist/js/chartist.min.js") }}"></script>
    <script src="{{ asset("backend/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js") }}"></script>



    <script src="{{ asset("backend/js/dashboard/dashboard-1.js") }}"></script>
</body>
</html>
