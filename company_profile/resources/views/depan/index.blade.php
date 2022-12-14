<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css') }}">

    <!-- Favicons -->
    <link href="{{ asset('assets') }}/img/logo.png" rel="icon">
    <link href="{{ asset('assets') }}/img/logo.png" rel="apple-touch-icon">
    <title>Company Profile DONAT JCO</title>
</head>
<style>
    *{
        font-family: montserrat;
    }
    .banner {
        height: 80vh;
        background: linear-gradient(rgba(0, 0, 0, 0.750), rgba(0, 0, 0, 0.750)), url('asset/slide-1.jpg');
        background-size: cover;
        background-position: center;
    }

    .section-padding{
        padding: 100px 0;
    }
    .banner-content{
        height: 100%;
        color: rgb(255, 255, 255);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .banner-content h5{
        font-size: 45px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 25px;
    }
    .banner-content p{
        width: 70%;
        margin: auto;
        font-size: 17px;
        line-height: 1.9;
    }
    .carousel-contain{
        background-color: #212121;
        color: white;
    }
    hr{
        width: 100px;
        border-top: 3px solid #aeaeae;
        align-content: center;
    }
    .navbar-brand img{
        width: 70px;
    }
    .navbar-brand{
        margin-right: 0;
        padding: 0 1em;
    }
    .navbar-nav{
        align-items: center;
        font-size: 15px;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 2px;
    }
    .navbar .navbar-nav .nav-link{
        color: #ffffff;
        font-size: 1,1em;
        padding: .5em 1em
    }
    @media screen and (min-width: 992px) {
        .navbar-brand img{
        width: 70px;
    }
    .navbar-brand{
        margin-right: 0;
        padding: 0 1em;
    }
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color:rgb(255, 165, 0);">
        <div class="container-fluid">
            <a class="navbar-brand d-lg-none" href="#">
                <img src="asset/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li>
                        <a class="navbar-brand d-none d-lg-block" href="#">
                            <img src="asset/logo.png" alt="">
                        </a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#produk">product</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#kontak">Contact</a>
                    </li>
                </ul>
                {{-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
            </div>
        </div>
    </nav>
    <!-- end Navbar -->

    <!-- Banner -->
    <div class="container-fluid banner">
        <div class="container banner-content col-lg-6">
            <div class="text-center">
                <h5 class="fs-1">
                    Selamat Datang di Donat <strong style="color: rgb(255, 165, 0)">JCO</strong>
                </h5>
                <p class="d-none d-sm-block">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt ipsum laudantium quaerat
                    dignissimos nesciunt voluptate eius pariatur hic, mollitia culpa!
                </p>
                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <!-- About -->
    <section id="about" class="about section-padding container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="asset/produk/10.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h1>About Me <br> <strong style="color: rgb(255, 165, 0);">Donat JCO</strong> </h1>
                        <p>Resep adonan kami membutuhkan waktu bertahun-tahun dan banyak percobaan 
                            unutk menyempurnakannya seperti Bola Lampu Edision. <br>
                            Sebelum kami meluncurkannya pada tahun 2005, kami melalui pengulangan yang tak terhitung
                            jumlahnya untuk menemukan keseimbangan, tekstur, dan alas yang sempurna untuk semua topping
                            artisanal yang akan kami taruh di atasnya. Baru dibuat dari awal, donat kami yang lembut dan
                            halus meleleh di mulut Anda dalam semua varietasnya yang luar biasa.
                        </p>
                        <a href="" class="btn btn-warning">Selengkapnya</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end About -->

    <!-- carousel -->
    <div class="container-fluid carousel-contain py-5">
        <div class="container">
            <h1 class="text-center mb-5">Our Best Product</h1>
            <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="asset/slide-1.jpg" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Produk 1</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="asset/slide-2.jpg" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Produk 2</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="asset/slide-3.jpg" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Produk 3</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- end carousel -->

    <!-- card produk -->
    <section style="padding-top: 80px;">
        <div class="container-fluid py-5" id="produk">
            <div class="container">
                <h1 class="text-center mb-5 mt-5">Our product</h1>
                <hr>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-">
                            <ul class="list-group">
                                <a class="list-group-item d-flex justify-content-between align-items-center">
                                    Donat
                                    <span class="badge bg-primary rounded-pill">10</span>
                                </a>
                                <a class="list-group-item d-flex justify-content-between align-items-center">
                                    Donut Kering
                                    <span class="badge bg-primary rounded-pill">5</span>
                                </a>
                                <a class="list-group-item d-flex justify-content-between align-items-center">
                                    Donut basah
                                    <span class="badge bg-primary rounded-pill">6</span>
                                </a>
                                <a class="list-group-item d-flex justify-content-between align-items-center">
                                    Molen
                                    <span class="badge bg-primary rounded-pill">8</span>
                                </a>
                                <a class="list-group-item d-flex justify-content-between align-items-center">
                                    Kue ultah
                                    <span class="badge bg-primary rounded-pill">3</span>
                                </a>
                            </ul>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                    <div class="card">
                                        <img src="asset/produk/1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title text-center text-warning"> <strong>Donut Coklat</strong>
                                            </h5>
                                            <p class="card-text text-center">
                                                Some quick example text to build on the card title and make
                                                up the bulk of the card's content.
                                            </p>
                                            <h4 class="text-center text-warning mb-3">Rp. 18.000</h4>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-warning dropdown-toggle w-100" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Learn More
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">See</a></li>
                                                    <li><a class="dropdown-item" href="#">Buy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                    <div class="card">
                                        <img src="asset/produk/2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title text-center text-warning"> <strong>Donut Coklat Seres</strong>
                                            </h5>
                                            <p class="card-text text-center">
                                                Some quick example text to build on the card title and make
                                                up the bulk of the card's content.
                                            </p>
                                            <h4 class="text-center text-warning mb-3">Rp. 18.000</h4>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-warning dropdown-toggle w-100" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Learn More
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">See</a></li>
                                                    <li><a class="dropdown-item" href="#">Buy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                    <div class="card">
                                        <img src="asset/produk/3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title text-center text-warning"> <strong>Donut Tiramisu</strong>
                                            </h5>
                                            <p class="card-text text-center">
                                                Some quick example text to build on the card title and make
                                                up the bulk of the card's content.
                                            </p>
                                            <h4 class="text-center text-warning mb-3">Rp. 18.000</h4>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-warning dropdown-toggle w-100" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Learn More
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">See</a></li>
                                                    <li><a class="dropdown-item" href="#">Buy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                    <div class="card">
                                        <img src="asset/produk/4.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title text-center text-warning"> <strong>Donut Strowbery</strong>
                                            </h5>
                                            <p class="card-text text-center">
                                                Some quick example text to build on the card title and make
                                                up the bulk of the card's content.
                                            </p>
                                            <h4 class="text-center text-warning mb-3">Rp. 18.000</h4>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-warning dropdown-toggle w-100" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Learn More
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">See</a></li>
                                                    <li><a class="dropdown-item" href="#">Buy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                    <div class="card">
                                        <img src="asset/produk/5.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title text-center text-warning"> <strong>Donut Oreo</strong>
                                            </h5>
                                            <p class="card-text text-center">
                                                Some quick example text to build on the card title and make
                                                up the bulk of the card's content.
                                            </p>
                                            <h4 class="text-center text-warning mb-3">Rp. 18.000</h4>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-warning dropdown-toggle w-100" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Learn More
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">See</a></li>
                                                    <li><a class="dropdown-item" href="#">Buy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                    <div class="card">
                                        <img src="asset/produk/6.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title text-center text-warning"> <strong>Donut Greentea</strong>
                                            </h5>
                                            <p class="card-text text-center">
                                                Some quick example text to build on the card title and make
                                                up the bulk of the card's content.
                                            </p>
                                            <h4 class="text-center text-warning mb-3">Rp. 18.000</h4>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-warning dropdown-toggle w-100" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Learn More
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">See</a></li>
                                                    <li><a class="dropdown-item" href="#">Buy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
    
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end card produk -->

    <!-- kontak -->
    <div class="container-fluid py-5 bg-dark text-white" id="kontak">
        <div class="container">
            <h1 class="text-center mt-5 mb-4">Contact Me</h1>
            <table class="table table-bordered">
                <div class="offset-lg-3 col-lg-7">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">First name :</label>
                                    <input type="text" name="namadepan" id="namadepan" class="form-control" autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Last name :</label>
                                    <input type="text" name="namabelakang" id="namabelakang" class="form-control"
                                        autocomplete="off">
                                </div>
        
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label"> Your Email :</label>
                            <input type="text" name="email" id="email" class="form-control" autocomplete="off">
                            <label class="form-text">*your email will not be distributed</label>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Message :</label>
                            <textarea name="pesan" id="pesan" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-warning w-100">Kirim</button>
                        </div>
                    </form>
                </div>
            </table>
        </div>
    </div>

    <!-- Remove the container if you want to extend the Footer to full width. -->
    {{-- <div class="container my-5"> --}}

    <footer class="text-center text-lg-start" style="background-color: rgb(255, 137, 2);">
      <div class="container d-flex justify-content-center py-5">
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
          <i class="fab fa-facebook-f"></i>
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
          <i class="fab fa-youtube"></i>
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
          <i class="fab fa-instagram"></i>
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
          <i class="fab fa-twitter"></i>
        </button>
      </div>
  
      <!-- Copyright -->
      <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">donatJCO.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    
  {{-- </div> --}}
  <!-- End of .container -->
    <!-- end kontak -->
    @include('sweetalert::alert')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="path/to/lightbox.js"></script>
</body>

</html>