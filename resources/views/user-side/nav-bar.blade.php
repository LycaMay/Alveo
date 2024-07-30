<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ALVEO - Real Estate HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid nav-bar bg-transparent">
        <nav class="bg-transparent navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                <div class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center">
                    <img class="img-fluid" src="{{ asset('img/LOGO.png') }}" alt="Icon" style="width: 40px; height: 40px;">
                </div>
                <br>
                <h1 class="m-0" style="color: rgb(12, 12, 12); margin-left:10px;">A L V E O</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('/property-list') }}" class="nav-item nav-link active">Properties</a>
                    <a href="{{ url('/for-sale') }}" class="nav-item nav-link">For Sale</a>
                    <a href="{{ url('/for-lease') }}" class="nav-item nav-link">For Lease</a>
                    <a href="{{ url('/about-us') }}" class="nav-item nav-link">About Us</a>
                    <a href="" class="nav-item nav-link">Submit Property</a>
                    <a href="{{ url('/contact-us') }}" class="nav-item nav-link">Contact</a>
                </div>
                {{-- <a href="" class="btn btn-secondary px-3 d-none d-lg-flex">Log in</a> --}}
            </div>
        </nav>
    </div>
</body>
</html>