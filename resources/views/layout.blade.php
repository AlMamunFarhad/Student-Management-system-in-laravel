<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_styles.css') }}">
    @stack('style')
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <h1><a href="{{ route('home') }}" class="logo">F</a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="{{ route('home') }}"><span class="fa fa-home"></span> Home</a>
                </li>
                <li>
                    <a href="{{route('home')}}"><span class="fa fa-user"></span> Students</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-sticky-note"></span> Teacher</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cogs"></span> Courses</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cogs"></span> Enrollment</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-paper-plane"></span> Payment</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-3">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <form class="d-flex ms-auto" role="search">
                                <div class="d-flex justify-content-center h-100">
                                    <div class="search">
                                        <input type="text" class="search-input" placeholder="search..."
                                            name="">
                                        <a href="#" class="search-icon">
                                            Search
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </ul>
                    </div>
                </div>
            </nav>

            <main>
                <div class="container">
                    @yield('title')
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
