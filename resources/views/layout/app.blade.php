<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Products</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/product">products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">contact</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      @yield('content');


      <div class="container-fluid">
        <!-- Footer -->
        <footer
                class="text-center text-lg-start text-white"
                style="background-color: #45526e"
                >
          <!-- Grid container -->
          <div class="container p-0 pb-0">
            <!-- Section: Links -->
            <section class="">
              <!--Grid row-->
              <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">
                    Company name
                  </h6>
                  <p>
                    Here you can use rows and columns to organize your footer
                    content. Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit.
                  </p>
                </div>
                <!-- Grid column -->
      
                <hr class="w-100 clearfix d-md-none" />
      
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                  <p>
                    <a class="text-white">MDBootstrap</a>
                  </p>
                  <p>
                    <a class="text-white">MDWordPress</a>
                  </p>
                  <p>
                    <a class="text-white">BrandFlow</a>
                  </p>
                  <p>
                    <a class="text-white">Bootstrap Angular</a>
                  </p>
                </div>
                <!-- Grid column -->
      
                <hr class="w-100 clearfix d-md-none" />
      
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">
                    Useful links
                  </h6>
                  <p>
                    <a class="text-white">Your Account</a>
                  </p>
                  <p>
                    <a class="text-white">Become an Affiliate</a>
                  </p>
                  <p>
                    <a class="text-white">Shipping Rates</a>
                  </p>
                  <p>
                    <a class="text-white">Help</a>
                  </p>
                </div>
      
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />
      
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                  <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                  <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                  <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                  <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
              </div>
              <!--Grid row-->
            </section>
            <!-- Section: Links -->
      
            <hr class="my-3">
      
            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
              <div class="row d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                  <!-- Copyright -->
                  <div class="p-3">
                    © 2020 Copyright:
                    <a class="text-white" href="https://mdbootstrap.com/"
                       >MDBootstrap.com</a
                      >
                  </div>
                  <!-- Copyright -->
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                  <!-- Facebook -->
                  <a
                     class="btn btn-outline-light btn-floating m-1"
                     class="text-white"
                     role="button"
                     ><i class="fab fa-facebook-f"></i
                    ></a>
      
                  <!-- Twitter -->
                  <a
                     class="btn btn-outline-light btn-floating m-1"
                     class="text-white"
                     role="button"
                     ><i class="fab fa-twitter"></i
                    ></a>
      
                  <!-- Google -->
                  <a
                     class="btn btn-outline-light btn-floating m-1"
                     class="text-white"
                     role="button"
                     ><i class="fab fa-google"></i
                    ></a>
      
                  <!-- Instagram -->
                  <a
                     class="btn btn-outline-light btn-floating m-1"
                     class="text-white"
                     role="button"
                     ><i class="fab fa-instagram"></i
                    ></a>
                </div>
                <!-- Grid column -->
              </div>
            </section>
            <!-- Section: Copyright -->
          </div>
          <!-- Grid container -->
        </footer>
        <!-- Footer -->
      </div>
      <!-- End of .container -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"
        integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous">
    </script>
</body>

</html>
