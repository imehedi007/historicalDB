<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include("frontend.layouts.style");
</head>
<body>

@yield("content")


{{-- script links --}}
<script src="{{ asset("frontend/js/jquery.min.js") }}"></script>
<script src="{{ asset("frontend/js/popper.min.js") }}"></script>
<script src="{{ asset("frontend/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("frontend/js/slick.min.js") }}"></script>
<script src="{{ asset("frontend/js/jquery.sticky-sidebar.min.js") }}"></script>
<script src="{{ asset("frontend/js/custom.js") }}"></script>
</body>
</html>
