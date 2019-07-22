<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', '文章标题')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">

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