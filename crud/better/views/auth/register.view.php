<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <!-- Header -->
    <header>
      <nav id="mainNav" class="navbar bg-dark navbar-dark navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html">Blog</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarScroll"
            aria-controls="navbarScroll"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <div class="mx-auto"></div>
            <ul
              class="navbar-nav navbar-nav-scroll text-white"
              style="--bs-scroll-height: 100%"
            >
              <li class="nav-item">
                <a class="nav-link py-2" href="index.html">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link py-2" href="./admin/addpost.html"
                  >Write Now</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDarkDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Category
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-dark"
                  aria-labelledby="navbarDarkDropdownMenuLink"
                >
                  <li>
                    <a class="dropdown-item" href="popularpost.html"
                      >Popular Post</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="recentpost.html"
                      >Recent Post</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="tagpost.html">Tags</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item py-2">
                <form class="d-flex d-lg-none" role="search">
                  <input
                    class="form-control me-2 input-group-sm"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <button class="btn btn-sm btn-outline-warning" type="submit">
                    Search
                  </button>
                </form>
              </li>
              <li class="nav-item py-1">
                <a class="btn btn-secondary" href="/login" role="button"
                  >Login</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card shadow">
            <div class="card-title text-center border-bottom">
              <h2 class="p-3">Signup</h2>
            </div>
            <div class="card-body">
              <?php if (isset($error_message)): echo "<span style='color:red;'>" . $error_message . "</span>"; endif; ?>
              <form action="/auth/register" method="POST">
                <div class="mb-4">
                  <label for="name" class="form-label">User name</label>
                  <input type="text" name="name" class="form-control" id="name" />
                </div>
                <div class="mb-4">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" name="email" class="form-control" id="email" />
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password" />
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn text-dark btn-success main-bg">
                    Sign up
                  </button>
                </div>
              </form>
            </div>
            <div class="text-center">
              <p>
                Have an account?
                <a href="/login" class="link-primary">Login</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
        <!-- footer -->
        <footer class="bg-dark text-white" >
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <p class="mt-2 mb-0">All Rights Reserved by Mahmud Hasan Rabbi</p>
    
                <ul class="nav justify-content-center">
                  <li class="nav-item">
                    <a href="https://www.facebook.com/hxicso" class="nav-link"
                      ><i class="fa-brands fa-facebook"></i
                    ></a>
                  </li>
                  <li class="nav-item">
                    <a href="https://github.com/mhasanrabbi" class="nav-link"
                      ><i class="fa-brands fa-github"></i
                    ></a>
                  </li>
                  <li class="nav-item">
                    <a
                      href="https://www.linkedin.com/in/mahmudhasanrabbi/"
                      class="nav-link"
                      ><i class="fa-brands fa-linkedin-in"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
