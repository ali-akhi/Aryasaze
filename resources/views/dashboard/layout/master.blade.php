<!DOCTYPE html>
<html lang="en">
    <body class="light rtl">
@include('dashboard.layout.particals.head')

@include('dashboard.layout.particals.pageloader')
<div class="overlay"></div>

@include('dashboard.layout.particals.navbar')

<div>

    @include('dashboard.layout.particals.slidleft')
    @include('dashboard.layout.particals.slidright')

</div>

@yield('content')

    </body>

</html>
