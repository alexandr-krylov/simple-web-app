<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport"
         content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="_token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/app.css">

        <title>Simple web application - @yield('title')</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
             data-target="#navbarTogglerDemo01"
             aria-controls="navbarTogglerDemo01" aria-expanded="false"
             aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item {{$activeGrid ?? ''}}">
                        <a class="nav-link" href="\">
                            Grid<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item {{$activeDepartment ?? ''}}">
                        <a class="nav-link" href="\department">Department</a>
                    </li>
                    <li class="nav-item {{$activeEmployee ?? ''}}">
                        <a class="nav-link" href="\employee">Employee</a>
                    </li>
                </ul>
            </div>
        </nav>
    <h1>@yield('h1')</h1>
    @if (isset($message))
    <div class="alert
    @switch ($message['type'])
        @case('info') alert-info @break
        @case('success') alert-success @break
        @case('warning') alert-warning @break
        @case('danger') alert-danger @break
        @default alert-light
    @endswitch
        alert-dismissible fade show" role="alert">
        {{ $message['content'] }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="container">
        @yield('content')
    </div>
    <script src="/js/app.js"></script>
    @yield('script')
  </body>
</html>