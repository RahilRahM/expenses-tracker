<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51"
      crossorigin="anonymous"
    />          

    <!-- Iconbox -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Money Tracker</title>
  </head>
  <body>
    <!-- Navigation Bar -->

    <nav class="navbar navbar-expand-sm py-3 bg-body-tertiary sticky-top">
      <div class="container">
        <!-- Add the logo here -->

        <a class="navbar-brand" href="#">
          <img src="images/logo.png" alt="test" id="logo-header"/>
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
          <ul class="ms-auto navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features">Features</a>
            </li>

          </ul>
          <button class="btn  ms-lg-3 " id="loginModalBtn" data-bs-toggle="modal" data-bs-target="#loginModal"><a style="color: white;">Login</a></button>
        </div>
      </div>
    </nav>
    <!-- Navigation Bar End -->

    <!-- Hero Section -->
    <div id="home" class="hero vh-100 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-white mx-auto text-center">
            <h1 class="display-4 text-white">
              Managing expenses, <br>made simple
            </h1>
            <p class="text-white my-4">
              Track your money just like you track your time,
              for us every penny counts.
            </p>
            <a href="singup.php" class="me-3 btn">Get started</a>
            <a class="btn" id="loginModalBtn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
          </div>
        </div>
      </div>
    </div> 

    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login</h5>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form method="post" action="index.php">
              <?php include('errors.php'); ?>
              <div class="mb-3 input-group">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="name" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="password input-group" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
              </div>
              <div class="list-inline mb-3 form-check">
                <input type="checkbox" class="list-
                inline-item me-2" id="rememberMe">
                <label class="list-inline-item form-check-label" for="rememberMe">Remember me</label>
              </div>
              <div class="modal-footer input-group">
                <button type="button" class="btn"  name="login_user" id="save-expense-btn" ><a href="home.php">Login</a></button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    

    <!-- Services -->
    <section id="services">

        <div class="container">

        <!-- -------------------------------------------------------------------------------- -->

            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-green">SERVICES</h6>
                    <h1>Our Services</h1>
                    <p> We help manage your finances, budget effectively,
                      and keep track of your spending habits.</p>
                </div>
            </div>

            <!-- -------------------------------------------------------------------------------- -->

            <div class="row g-4">

                <div class="col-lg-4 col-sm-6">
                    <div class="services card-effect bounceInUp">
                        <div class="iconbox ">
                                <i class='bx bxs-report'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Data visualization</h5>
                        <p> An effective way to help you make sense of your financial data,
                           using graphs, charts, and other visual aids to represent financial
                          information in a more intuitive and user-friendly way.</p>

                    </div>
                </div>


            <!-- -------------------------------------------------------------------------------- -->


            <div class="col-lg-4 col-sm-6">
                <div class="services card-effect">
                    <div class="iconbox ">
                        <i class='bx bx-wallet-alt' ></i>
                    </div>
                    <h5 class="mt-4 mb-2"> Budgeting tools</h5>
                    <p>We can help set budgets for different categories
                      such as groceries, entertainment, rent, and utilities.
                      Track your spending against these budgets and adjust them as necessary.</p>

                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="services card-effect">
                    <div class="iconbox ">
                        <i class='bx bx-bar-chart-alt-2' ></i>
                    </div>
                    <h5 class="mt-4 mb-2">Financial analysis</h5>
                    <p>Have a clear insight of your financial health
                      , including net worth, cash flow, and debt-to-income ratio.
                      Set savings goals and track progress towards those goals.</p>
                </div>
            </div>

        </div>
    </section>
    <!-- End Services -->

    <!-- Features -->
    <section id="features" class="row w-100 bg-light py-0">
      <div class="col-lg-6 col-img"></div>

      <div class="col-lg-6 py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <h6 class="text-green">WHY US?</h6>
                      <h1>Best solution </h1>
                      <p>Manage your finances effectively.</p>


                    <div class="feature d-flex mt-5">
                      <div class="iconbox mx-4">
                        <i class='bx bx-user'></i>
                      </div>
                      <div>
                        <h5>User-friendly</h5>
                        <p>Simple and clean interface
                            with visual aids like graphs and charts to make the information more accessible.</p>
                      </div>
                    </div>

                    <div class="feature d-flex mt-5">
                      <div class="iconbox mx-4">
                        <i class='bx bx-fingerprint'></i>                      </div>
                      <div>
                        <h5>Security and privacy</h5>
                        <p> Robust security measures to protect user data</p>
                      </div>
                    </div>

                    <div class="feature d-flex mt-5">
                      <div class="iconbox mx-4">
                        <i class='bx bx-calendar-check'></i>
                      </div>
                      <div>
                        <h5>Bill tracking and reminders</h5>
                        <p> Users can set up reminders to pay bills on time and
                          track bill payments.</p>
                      </div>
                    </div>



              </div>
            </div>
          </div>
      </div>
      <div class="col-lg-6"></div>
    </section>
    <!-- End Features -->

    <!-- Footer -->
      <?php require_once 'footer.php'; ?>
    <!-- End Footer -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
