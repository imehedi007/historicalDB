<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include("backend.layouts.style")
</head>
<body>
    <div id="main-wrapper">
        @include("backend.layouts.header")
        <div class="content-body">
            <div class="container-fluid mt-3">
                @yield("content")
            </div>
        </div>
        @include("backend.layouts.footer")
    </div>

{{-- script links --}}
    <script src="{{ asset("backend/plugins/common/common.min.js") }}"></script>
    <script src="{{ asset("backend/js/custom.min.js") }}"></script>
    <script src="{{ asset("backend/js/settings.js") }}"></script>
    <script src="{{ asset("backend/js/gleek.js") }}"></script>
    <script src="{{ asset("backend/js/styleSwitcher.js") }}"></script>

</body>
</html>
