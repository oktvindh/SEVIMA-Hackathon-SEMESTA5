<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdminLTE</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />

    <style>
      .container {
        min-width: 50%;
        /* background-color: white; */
      }
      .card {
        background-color: white;
        max-width: 350px;
        height: auto;
      }
      body {
        background-color: rgb(231, 218, 218);
      }

      input .emailIcon {
        background-image: url("");
      }

      .containerInput {
        display: flex;
      }

      .containerInput i {
        margin-left: -30px;
        margin-top: 12px;
      }
      /* .top-header {
        background-image: url("https://images.unsplash.com/photo-1546272989-40c92939c6c2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=682&q=80");
        height: 100vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .scroll {
        margin-left: 48%;
        margin-right: 50%;
        padding-top: 25%;
        font-size: 70px;
      } */
    </style>
  </head>
  <body>
    <!-- <div class="top-header"> -->
      <!-- <h1 class="text-center pt-5 text-white">
        selamat datang di website ku!! pook..pook..pook
      </h1> -->
      <div class="scroll text-white">
        <!-- <i class="bi bi-balloon"></i> -->
      </div>
    </div>
    <!-- ini bagian navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="sticky-nav">
      <!-- <a class="navbar-brand container" href="#">Navbar</a> -->
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div
        class="collapse navbar-collapse container"
        id="navbarSupportedContent"
      >
        <a class="navbar-brand" href="#">Navbar</a>

        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Dropdown
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>
    <!-- ini bagian akhir navbar -->

    <div class="container mb-5">
      <h1 class="text-center mt-5 p-3"><b>Admin</b>LTE</h1>
      <div class="card mx-auto p-3 rounded-0">
        <form>
          <h6 class="text-center p-2">Sign in to start your session</h6>
          <div class="form-group">
            <!-- <label for="exampleInputEmail1">Email address</label> -->
            <div class="containerInput">
              <input
                type="email"
                class="form-control emailIcon"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Email"
              />
              <i class="fa-solid fa-envelope"></i>
            </div>

            <!-- <small id="emailHelp" class="form-text text-muted"
              >We'll never share your email with anyone else.</small
            > -->
          </div>
          <div class="form-group">
            <!-- <label for="exampleInputPassword1">Password</label> -->
            <div class="containerInput">
              <input
                type="password"
                class="form-control pwIcon"
                id="exampleInputPassword1"
                placeholder="Password"
              />
              <!-- <i class="bi bi-cloud-lightning-fill"></i> -->
              <i class="bi bi-key-fill"></i>
            </div>
          </div>
          <div class="form-group form-check">
            <input
              type="checkbox"
              class="form-check-input"
              id="exampleCheck1"
            />
            <label class="form-check-label" for="exampleCheck1"
              >Remember Me</label
            >
            <button type="submit" class="btn btn-primary float-right">
              Sign in
            </button>
          </div>
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
          <h6 class="text-center p-3">-OR-</h6>
          <div class="btn-bottom">
            <button type="button" class="btn btn-primary btn-sm btn-block">
              <i class="fa-brands fa-facebook"></i>
              Sign in using facebook
            </button>
            <button type="button" class="btn btn-danger btn-sm btn-block">
              <i class="fa-brands fa-google-plus-g"></i>
              Sign in using Google
            </button>
          </div>
          <div class="forgot-ps mt-3">
            <!-- <h6 class="mt-3">I forgot my password</h6> -->
            <a href="#">I forgot my password</a>
          </div>
          <div class="regis-new mt-1">
            <a href="#">Register a new membership</a>
            <!-- <h6>Register a new membership</h6> -->
          </div>
        </form>
      </div>
    </div>
    <div class="container mt-5 mb-5 bg-light">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi id
      cupiditate voluptas, cum odit, voluptate magnam fugiat iusto veniam
      repudiandae quibusdam officiis voluptatum excepturi sint. Numquam
      reprehenderit quas aut impedit? Lorem ipsum dolor sit amet consectetur
      adipisicing elit. Quae vitae id voluptatibus laborum quam quo, qui, fuga
      alias tempore veritatis libero repellendus exercitationem, harum totam
      velit sunt. Quae, non facere. Lorem ipsum dolor, sit amet consectetur
      adipisicing elit. Quasi at ab voluptate tenetur corrupti, porro
      cupiditate, officiis quisquam, quod soluta perferendis! At totam eaque
      quibusdam accusamus cumque consequuntur vel voluptates.
    </div>
    <footer class="bg-light text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023 Copyright:
        <a class="text-dark" href="#">chicken.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <script
      src="https://kit.fontawesome.com/8b78f94593.js"
      crossorigin="anonymous"
    ></script>
    <script src="jquery.min.js"></script>
    <script>
      jQuery(document).ready(function ($) {
        $(window).scroll(function () {
          if ($(document).scrollTop() > 50) {
            $("#sticky-nav").addClass("fixed-top");
          } else {
            $("#sticky-nav").removeClass("fixed-top");
          }
        });
      });
    </script>
  </body>
</html>
<!-- Indah  -->
