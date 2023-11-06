<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Pizza</title>
  </head>
  <body class="bg-dark">
    <div class="container-fluid px-0">
      <div class="row">
        <img src="{{asset('img/pizza.png')}}" alt="pizza" class="img-fluid w-100" />
      </div>
    </div>

    <div class="container">
      <div class="row py-3">
        <img src="{{asset('img/pizza1.jpeg')}}" alt="pizza1" class="col-3" />
        <img src="{{asset('img/pizza2.jpg')}}" alt="pizza2" class="col-3" />
        <img src="{{asset('img/pizza3.jpeg')}}" alt="pizza3" class="col-3" />
        <img src="{{asset('img/pizza4.jpg')}}" alt="pizza4" class="col-3" />
      </div>
      <div class="row">
        <div class="col-8">
          <h4 class="text-white">Pepperoni Pizza</h4>
          <h3 class="text-danger">$10.00</h3>
        </div>
        <div class="col-4">
          <p class="text-white">⭐ 4.5 (50+)</p>
        </div>
      </div>

      <div class="row">
        <p class="col-12 text-white">
          A traditional Neapolitan pizza topped with tomato sauce, fresh
          mozzarella cheese, basil leaves, and drizzled with olive oil.
          <a class="text-success">Read more</a>
        </p>
      </div>

      <div class="row mt-3">
        <h5 class="text-white col-12">Size</h5>
      </div>

      <div class="row mt-1">
        <div class="col-2 text-white">
          <button type="button" class="btn btn-outline-light">S</button>
        </div>
        <div class="col-2 text-white">
          <button type="button" class="btn btn-outline-light">M</button>
        </div>
        <div class="col-2 text-white">
          <button type="button" class="btn btn-outline-light">L</button>
        </div>
        <div class="col-6"></div>
      </div>

      <div class="row mt-4">
        <h5 class="text-white col-12">Ingredients</h5>
      </div>

      <div class="row mt-1">
        <div class="col-3 text-white">
          <div class="border border-white rounded py-2">
            <img
              src="{{asset('img/tomato-15523.png')}}"
              alt="tomato"
              width="50px"
              height="48px"
              class="mx-auto d-block" 
            />
          </div>
        </div>

        <div class="col-3 text-white">
          <div class="border border-white rounded py-2">
            <img
              src="{{asset('img/basil-trans.png')}}"
              alt="basil"
              width="50px"
              height="48px"
              class="mx-auto d-block"
            />
          </div>
        </div>

        <div class="col-3 text-white">
          <div class="border border-white rounded py-2">
            <img
              src="{{asset('img/onion-png-38739.png')}}"
              alt="onion-png-38739"
              width="50px"
              height="48px"
              class="mx-auto d-block"
            />
          </div>
        </div>
        <div class="col-3"></div>
      </div>

      <div class="row mt-4">    
        <div class="col-2 py-1">
          <div class="border border-white rounded py-2 px-1 w-100">
            <img
              src="{{asset('img/icons8-shopping-bag-24.png')}}"
              alt="icon"
              class="mx-auto d-block"
              width="20px"
              height="20px"
            />
          </div>
        </div>
        <div class="col-10">
          <div class="border border-0 rounded py-2 px-1">
            <h3 class="text-white bg-success text-center font-weight-light">
              Order Now
            </h3>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
