<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/style.css" />
    <style>
      @import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900");

* {
  margin: 0;
  padding: 0;
  -webkit-font-smoothing: antialiased;
  -webkit-text-shadow: rgba(0, 0, 0, 0.01) 0 0 1px;
  text-shadow: rgba(0, 0, 0, 0.01) 0 0 1px;
}

.c-item {
  height: 480px;
}

.c-img {
  height: 100%;
  object-fit: cover;
  filter: brightness(0.6);
}
.container {
  max-width: 1200px;
  width: 90%;
  margin: auto;
}

.navbar {
  box-shadow: 0px 5px 10px 0px #aaa;
  position: fixed;
  width: 100%;
  background: #fff;
  color: #000;
  z-index: 100;
}
nav span {
  color: green;
}
.navbar-container {
  display: flex;
  justify-content: space-between;
  height: 64px;
  align-items: center;
}

.menu-items {
  order: 2;
  display: flex;
}
.logo {
  order: 1;
  font-size: 2.3rem;
}
.logo span {
  color: green;
}
.menu-items li {
  list-style: none;
  margin-left: 1.5rem;
  font-size: 1.3rem;
}

.navbar a {
  color: #444;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease-in-out;
}

.navbar a:hover {
  color: #117964;
}

body {
  font-family: "Rubik", sans-serif;
  font-size: 14px;
  font-weight: 400;
  background: #eff6fa;
  color: #000000;
}

div {
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.bbb_viewed {
  padding-top: 51px;
  padding-bottom: 60px;
  background: #eff6fa;
}

.bbb_main_container {
  background-color: #fff;
  padding: 11px;
}

.bbb_viewed_title_container {
  border-bottom: solid 1px #dadada;
}

.bbb_viewed_title {
  margin-bottom: 16px;
  margin-top: 8px;
}

.bbb_viewed_nav_container {
  position: absolute;
  right: -5px;
  bottom: 14px;
}

.bbb_viewed_nav {
  display: inline-block;
  cursor: pointer;
}

.bbb_viewed_nav i {
  color: #dadada;
  font-size: 18px;
  padding: 5px;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}

.bbb_viewed_nav:hover i {
  color: #606264;
}

.bbb_viewed_prev {
  margin-right: 15px;
}

.bbb_viewed_slider_container {
  padding-top: 13px;
}

.bbb_viewed_item {
  width: 100%;
  background: #ffffff;
  border-radius: 2px;
  padding-top: 25px;
  padding-bottom: 25px;
  padding-left: 30px;
  padding-right: 30px;
}

.bbb_viewed_image {
  width: 150px;
  height: 150px;
}

.bbb_viewed_image img {
  display: block;
  max-width: 100%;
}

.bbb_viewed_content {
  width: 100%;
  margin-top: 25px;
}

.bbb_viewed_price {
  font-size: 16px;
  color: #000000;
  font-weight: 500;
}

.bbb_viewed_item.discount .bbb_viewed_price {
  color: #df3b3b;
}

.bbb_viewed_price span {
  position: relative;
  font-size: 12px;
  font-weight: 400;
  color: rgba(0, 0, 0, 0.6);
  margin-left: 8px;
}

.bbb_viewed_price span::after {
  display: block;
  position: absolute;
  top: 6px;
  left: -2px;
  width: calc(100% + 4px);
  height: 1px;
  background: #8d8d8d;
  content: "";
}

.bbb_viewed_name {
  margin-top: 3px;
}

.bbb_viewed_name a {
  font-size: 14px;
  color: #000000;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}

.bbb_viewed_name a:hover {
  color: #0e8ce4;
}

.item_marks {
  position: absolute;
  top: 18px;
  left: 18px;
}

.item_mark {
  display: none;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  color: #ffffff;
  font-size: 10px;
  font-weight: 500;
  line-height: 36px;
  text-align: center;
}

.item_discount {
  background: #df3b3b;
  margin-right: 5px;
}

.item_new {
  background: #0e8ce4;
}

.bbb_viewed_item.discount .item_discount {
  display: inline-block;
}

.bbb_viewed_item.is_new .item_new {
  display: inline-block;
}
svg {
  float: left;
  margin-right: 10px;
}
.grid {
  padding: 60px;
  position: relative;
}
.learn-more {
  position: absolute;
  bottom: 0;
  right: 0;
  margin-top: 10px;
}
.col {
  margin-top: 50px;
  height: auto;
}
.grid a {
  color: #000;
  font-weight: bold;
  font-size: 15px;
  text-decoration: none;
}
.grid a:hover {
  color: green;
}
.testimonial {
  background-color: white;
  padding: 25px 30px;
  border-radius: 100px;
}
.container-testimonial {
  max-width: 1200px;
  width: 90%;
  margin: 50px auto;
}

    </style>
    <title>Shop</title>
  </head>
  <body>
    <header id="navbar">
      <nav
        class="navbar navbar-expand-lg navbar-scroll fixed-top shadow-0 border-bottom border-dark"
      >
        <div class="container">
          <a class="navbar-brand" href="#!">Avad<span>a:</span></a>
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#!">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Shortcodes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Pages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Blog</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->
    </header>
    <section id="carousel-bootstrap">
      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#hero-carousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#hero-carousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#hero-carousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active c-item">
            <img
              src="https://images.unsplash.com/photo-1579033461380-adb47c3eb938?fit=crop&w=1964&q=100"
              class="d-block w-100 c-img"
              alt="Slide 1"
            />
            <div class="carousel-caption top-0 mt-4">
              <p class="mt-5 fs-3 text-uppercase">Discover the hidden world</p>
              <h1 class="display-1 fw-bolder text-capitalize">
                The Aurora Tours
              </h1>
              <button class="btn btn-primary px-4 py-2 fs-5 mt-5">
                Book a tour
              </button>
            </div>
          </div>
          <div class="carousel-item c-item">
            <img
              src="https://images.unsplash.com/photo-1516466723877-e4ec1d736c8a?fit=crop&w=2134&q=100"
              class="d-block w-100 c-img"
              alt="Slide 2"
            />
            <div class="carousel-caption top-0 mt-4">
              <p class="text-uppercase fs-3 mt-5">The season has arrived</p>
              <p class="display-1 fw-bolder text-capitalize">
                3 available tours
              </p>
              <button
                class="btn btn-primary px-4 py-2 fs-5 mt-5"
                data-bs-toggle="modal"
                data-bs-target="#booking-modal"
              >
                Book a tour
              </button>
            </div>
          </div>
          <div class="carousel-item c-item">
            <img
              src="https://images.unsplash.com/photo-1612686635542-2244ed9f8ddc?fit=crop&w=2070&q=100"
              class="d-block w-100 c-img"
              alt="Slide 3"
            />
            <div class="carousel-caption top-0 mt-4">
              <p class="text-uppercase fs-3 mt-5">Destination activities</p>
              <p class="display-1 fw-bolder text-capitalize">
                Go glacier hiking
              </p>
              <button
                class="btn btn-primary px-4 py-2 fs-5 mt-5"
                data-bs-toggle="modal"
                data-bs-target="#booking-modal"
              >
                Book a tour
              </button>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <article class="grid">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              fill="currentColor"
              class="bi bi-1-circle-fill"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"
              />
            </svg>

            <h3>Responsive design</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Asperiores, quam doloribus facilis vitae quo, nemo cumque minima
            praesentium magni laborum necessitatibus molestias delectus maiores
            assumenda, obcaecati reiciendis vero iste quas.
            <br />
            <br />

            <a href="#" class="learn-more">Learn more &nbsp;> </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              fill="currentColor"
              class="bi bi-2-circle-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"
              />
            </svg>
            <h3>Awesome Slider</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Asperiores, quam doloribus facilis vitae quo, nemo cumque minima
            praesentium magni laborum necessitatibus molestias delectus maiores
            assumenda, obcaecati reiciendis vero iste quas.
            <br />
            <br />
            <a href="#" class="learn-more">Learn more &nbsp; ></a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 mx-auto">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              fill="currentColor"
              class="bi bi-3-circle-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"
              />
            </svg>
            <h3>Loaded With Option</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Asperiores, quam doloribus facilis vitae quo, nemo cumque minima
            praesentium magni laborum necessitatibus molestias delectus maiores
            assumenda, obcaecati reiciendis vero iste quas.
            <br />
            <br />
            <a href="#" class="learn-more">Learn more &nbsp;></a>
          </div>
        </div>
      </div>
    </article>
    <article class="bootstrap-carousel">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6">
              <h3 class="mb-3">Recent Work</h3>
            </div>

            <div class="col-12">
              <div
                id="carouselExampleIndicators2"
                class="carousel slide"
                data-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            class="img-fluid"
                            alt="100%x280"
                            src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d"
                          />
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">
                              With supporting text below as a natural lead-in to
                              additional content.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            class="img-fluid"
                            alt="100%x280"
                            src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698"
                          />
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">
                              With supporting text below as a natural lead-in to
                              additional content.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            class="img-fluid"
                            alt="100%x280"
                            src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a"
                          />
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">
                              With supporting text below as a natural lead-in to
                              additional content.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            class="img-fluid"
                            alt="100%x280"
                            src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4"
                          />
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">
                              With supporting text below as a natural lead-in to
                              additional content.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            class="img-fluid"
                            alt="100%x280"
                            src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840"
                          />
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">
                              With supporting text below as a natural lead-in to
                              additional content.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            class="img-fluid"
                            alt="100%x280"
                            src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e"
                          />
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">
                              With supporting text below as a natural lead-in to
                              additional content.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            class="img-fluid"
                            alt="100%x280"
                            src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23"
                          />
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">
                              With supporting text below as a natural lead-in to
                              additional content.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            class="img-fluid"
                            alt="100%x280"
                            src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129"
                          />
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">
                              With supporting text below as a natural lead-in to
                              additional content.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img
                            class="img-fluid"
                            alt="100%x280"
                            src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6"
                          />
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">
                              With supporting text below as a natural lead-in to
                              additional content.
                            </p>
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
    </article>
    <aside>
      <div class="container-testimonial">
        <div class="row">
          <div class="col-sm-6 col-12">
            <p><b>Why chose us</b></p>
            <ul class="fa-ul">
              <li>
                <span class="fa-li"
                  ><i class="fa-solid fa-check-square"></i></span
                >Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius,
                tempore!
              </li>
              <li>
                <span class="fa-li"
                  ><i class="fa-solid fa-check-square"></i></span
                >Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum,
                beatae!
              </li>
              <li>
                <span class="fa-li"
                  ><i class="fa-solid fa-check-square"></i></span
                >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Commodi, itaque!
              </li>
              <li>
                <span class="fa-li"
                  ><i class="fa-solid fa-check-square"></i></span
                >Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Reprehenderit, aut?
              </li>
              <li>
                <span class="fa-li"
                  ><i class="fa-solid fa-check-square"></i></span
                >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Inventore, maxime?
              </li>
              <li>
                <span class="fa-li"
                  ><i class="fa-solid fa-check-square"></i></span
                >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum,
                veritatis!
              </li>
            </ul>
          </div>
          <div class="col-sm-6 col-12">
            <p><b>What client's say</b></p>
            <div class="testimonial">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Architecto, at omnis! Ex quas quos debitis neque blanditiis
              dolorum magnam hic obcaecati voluptates sequi possimus tenetur non
              totam, ad nobis expedita.
            </div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              fill="currentColor"
              class="bi bi-people-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
              />
              <path
                fill-rule="evenodd"
                d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"
              />
              <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
            </svg>
            <p>Jon Doe</p>
          </div>
        </div>
      </div>
    </aside>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted">
      <!-- Section: Social media -->
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
      >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Avada
              </h6>
              <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Products</h6>
              <p>
                <a href="#!" class="text-reset">Angular</a>
              </p>
              <p>
                <a href="#!" class="text-reset">React</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Vue</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Laravel</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
              <p>
                <a href="#!" class="text-reset">Pricing</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Settings</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> Romania, Bucharest, Ro</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                info@example.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 0054545</p>
              <p><i class="fas fa-print me-3"></i> + 00124523452</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div
        class="text-center p-4"
        style="background-color: rgba(0, 0, 0, 0.05)"
      >
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="#"></a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    ></script>
    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
    ></script>
  </body>
</html>
