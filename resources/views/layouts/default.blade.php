<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', '文章标题')</title>

</head>
<body>

<div class="container">
    <div class="offset-md-1 col-md-10">
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
</body>
</html>