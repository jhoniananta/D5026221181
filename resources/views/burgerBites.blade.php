<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap5 and CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="{{asset('css/style-burgerBites.css')}}" />
    <!-- Icon on the website -->
    <link rel="icon" href="{{asset('img/burgerBites/icon_burger.png')}}" />
    <title>BurgerBites</title>
  </head>

  <body>
    <!-- Section Home dan Navbar -->
    <div class="area-awal">
      <div class="bg-box">
        <img src="{{asset('img/burgerBites/hero-bg.jpg')}}" alt="" />
      </div>
      <!-- Navbar -->
      <header>
        <nav
          class="navbar fixed-top navbar-expand-lg navbar-dark "
        >
          <div class="container-fluid px-4">
            <a class="navbar-brand" href="#home">
              <img
                src="{{asset('img/burgerBites/icon_burger.png')}}"
                style="width: 2rem; height: 1.7rem"
                alt="icon"
                class="d-inline-block align-text-top"
              />
              <h4 class="fw-medium d-none d-md-inline ps-1">BurgerBites</h4>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item ms-2 ms-md-0">
                  <a class="nav-link" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item ms-2 ms-md-0">
                  <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item ms-2 ms-md-0">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item ms-0 ms-md-2">
                  <a class="btn btn-secondary" href="#contact">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Section Home dan carousel nya -->
      <section class="slider_section" id="home">
        <div
          id="customCarousel1"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <div class="container">
                <div class="row px-4">
                  <div class="col-md-7 col-lg-6">
                    <div class="detail-box">
                      <h2>Juicy Perfection</h2>
                      <p>
                        Take a bite out of juicy perfection with our
                        mouthwatering burgers! Sink your teeth into the juiciest
                        burgers in town, dripping with flavorful goodness.
                      </p>
                      <div class="btn-box">
                        <a target="_blank" href="https://bkdelivery.co.id/" class="btn1"> Order Now </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <div class="container">
                <div class="row px-5">
                  <div class="col-md-7 col-lg-6">
                    <div class="detail-box">
                      <h2>Burger Bliss</h2>
                      <p>
                        Craving a truly satisfying burger? We've got the fixings
                        to fulfill your wildest burger dreams. Experience burger
                        bliss you never thought possible from 100% premium beef
                        patties grilled to perfection.
                      </p>
                      <div class="btn-box">
                        <a target="_blank" href="https://bkdelivery.co.id/" class="btn1"> Order Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <div class="container">
                <div class="row px-5">
                  <div class="col-md-7 col-lg-6">
                    <div class="detail-box">
                      <h2>Gourmet Indulgence</h2>
                      <p>
                        Escape the ordinary with our gourmet burgers - an
                        explosion of flavors in every bite! Let your palate
                        delight in our chef-crafted burgers made with only the
                        finest ingredients.
                      </p>
                      <div class="btn-box">
                        <a target="_blank" href="https://bkdelivery.co.id/" class="btn1"> Order Now </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#customCarousel1"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#customCarousel1"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

          <div class="carousel-indicators justify-content-center">
            <button
              type="button"
              data-bs-target="#customCarousel1"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#customCarousel1"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#customCarousel1"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
        </div>
      </section>
    </div>

    <!-- Section Menu -->
    <section
      id="menu"
      class="py-5 mx-2"
    >
      <!-- Menu Title -->
      <div class="menu-title m-4">
        <h1 class="text-center">Our Menu</h1>
      </div>
      <!-- Card menu -->
      <div class="d-flex flex-column flex-wrap justify-content-center gap-5">
        <div class="card mx-auto">
          <img src="{{asset('img/burgerBites/burger2.jpg')}}" class="card-img-top" alt="..." />
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title">Cheese Burger Favorite</h5>
              <p class="card-text">
                The Classic A juicy beef patty with melted cheese, lettuce, tomato, onion, pickles, and signature sauce on a toasted sesame bun. The quintessential burger done right.
              </p>
            </div>
            <div class="cta-section">
              <div>$5.00</div>
              <a target="_blank" href="https://bkdelivery.co.id/menus/cheese-burger-favorit/" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
        <div class="card card-dark mx-auto">
          <img src="{{asset('img/burgerBites/burger3.jpg')}}" class="card-img-top" alt="..." />
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title">Gold Collection</h5>
              <p class="card-text">
                The Spicy Gold Collection seasoned beef patty topped with pepperjack cheese, jalapeños, crispy fried onions, lettuce, tomato, and a fiery chipotle aioli. A taste of the Southwest in burger form.
              </p>
            </div>
            <div class="cta-section">
              <div>$10.00</div>
              <a target="_blank" href="https://bkdelivery.co.id/menus/gold-collection/" class="btn btn-light dark-btn">Order Now</a>
            </div>
          </div>
        </div>
        <div class="card mx-auto">
          <img src="{{asset('img/burgerBites/burger-4.png')}}" class="card-img-top" alt="..." />
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title">Chees Whooper</h5>
              <p class="card-text">
                The Hawaiian Sweet and savory burger with a beef patty, grilled pineapple, crispy bacon, melted Swiss cheese, lettuce, tomato, and tangy Hawaiian glaze on a toasted bun. A tropical burger getaway.
              </p>
            </div>
            <div class="cta-section">
              <div>$6.00</div>
              <a target="_blank" href="https://bkdelivery.co.id/menus/cheese-whopper-2/" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
        <div class="card card-dark mx-auto">
          <img src="{{asset('img/burgerBites/burger-5.png')}}" class="card-img-top" alt="..." />
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title">Double Mantul</h5>
              <p class="card-text">
                The Double Beef patty smothered in sautéed mushrooms and truffle aioli then topped with melted Gruyère cheese, arugula, and tomato on a brioche bun.
              </p>
            </div>
            <div class="cta-section">
              <div>$7.00</div>
              <a target="_blank" href="https://bkdelivery.co.id/menus/double-mantul-2/" class="btn btn-light dark-btn">Order Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section About -->
    <section class="about_section" id="about">
      <div class="container ">
        <div class="row">
          <div class="col-md-6 ">
            <div class="img-box">
              <img src="{{asset('img/burgerBites/about-img.png')}}" alt="about">
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h1>
                  BurgerBites
                </h1>
              </div>
              <p>
                At BurgerBites, we serve up mouthwatering burger bites made with 100% fresh beef patties andpremium ingredients. Our petite burgers pack a flavor punch in every tasty bite. Crafted with care and creativity, BurgerBites offers a fun, unique take on the classic burger experience. We take juicy quarter-pound beef patties and sandwich them between soft, pillowy buns with your choice of crisp vegetables, melty cheese, and our legendary secret sauce.
              </p>
              <a target="_blank" href="https://www.britannica.com/topic/Burger-King-Corporation">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Section Form Contact  -->
    <div id="contact" class="container-fluid contact shadow py-5">
      <div class="container">
        <div class="contact-title">
          <h1 class="text-center">Stay connected with us!
          </h1>
          <h5 class="text-center">have any question? feel free to ask..</h5>
        </div>
        <section class="pt-4">
          <form id="contact-form" action="" >
            <div class="form-group row">
              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6 mb-3">
                <label for="nama" class="labelform">Name :</label>
                <input type="text" id="nama" class="form-control form-control-md inputform" placeholder="Your Name"/>
              </div>
              <div class="col-md-2 col-lg-3"></div>

              <!-- Validasi Nama -->
              <div class="col-md-2 col-lg-3"></div>
              <div class="col-12 col-md-8 col-lg-6">
                <div id="validasiNama"></div>
              </div>
              <div class="col-md-2 col-lg-3"></div>

              <div class="col-md-2 col-lg-3"></div>
                <div class="col-12 col-md-8 col-lg-6 mb-3">
                  <label for="email" class="labelform">Email :</label>
                  <input type="text" id="email" class="form-control form-control-md inputform" placeholder="Your Email"/>
                </div>
              <div class="col-md-2 col-lg-3"></div>
              
              <!-- Validasi email -->
              <div class="col-md-2 col-lg-3"></div>
                <div class="col-12 col-md-8 col-lg-6">
                  <div id="validasiEmail"></div>
                </div>
              <div class="col-md-2 col-lg-3"></div>

              <div class="col-md-2 col-lg-3"></div>
                <div class="col-12 col-md-8 col-lg-6 mb-3">
                  <label for="pesan" class="labelform">Message :</label>
                  <textarea type="text" id="pesan" rows="3" class="form-control form-control-md inputform mb-2" placeholder="Write your message here"></textarea>
                </div>
              <div class="col-md-2 col-lg-3"></div>
              
              <!-- Validasi pesan -->
              <div class="col-md-2 col-lg-3"></div>
                <div class="col-12 col-md-8 col-lg-6">
                  <div id="validasiPesan" class="mb-2"></div>
                </div>
                <div class="col-md-2 col-lg-3"></div>
              
              <div class="col-md-2 col-lg-3"></div>
                <div class="col-12 col-md-8 col-lg-6 pb-3">
                  <button onclick="validateInput()" type="button" class="btn btn-dark">Submit</button>
                </div>
              <div class="col-md-2 col-lg-3"></div>

              <!-- Message terkirimkan -->
              <div class="col-md-2 col-lg-3"></div>
                <div class="col-12 col-md-8 col-lg-6">
                  <div id="sendmessage"></div>
                </div>
                <div class="col-md-2 col-lg-3"></div>
            </div> 
          </form>
        </section>
      </div>
    </div>

    <!-- Footer -->
    <footer class="w-100 p-3">
      <div class="mt-2">
        <p>BurgerBites &#169; 2023, Stay Juicy</p>
      </div>
    </footer>

    <!-- Import Bootstrap5 and popper JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <!-- Custom js -->
    <script src="{{asset('js/index-burgerBites.js')}}"></script>
  </body>
</html>
