<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title-page')
    </title>
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        {{-- sidebar-left --}}
        <nav class="navbar-default navbar-static-side" role="navigation">
            @include('admin.common.sidebar')
        </nav>

        <div id="page-wrapper" class="gray-bg">
            {{-- navbar-top --}}
            <div class="row border-bottom">
               @include('admin.common.nav')
            </div>
            <div class="wrapper wrapper-content">
                {{-- content-page --}}
                @yield('content')
            </div>
            {{-- footer --}}
            <div class="footer">
                @include('admin.common.footer')
            </div>
        </div>
        <div id="right-sidebar">
            {{-- menu-right --}}
            @include('admin.common.right-sidebar-menu')
        </div>
    </div>
</body>
@include('admin.common.script')
</html>
