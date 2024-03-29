<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blogs</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- Header -->
  <header>
    <nav id="mainNav" class="navbar bg-dark navbar-dark navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <div class="mx-auto"></div>
          <ul class="navbar-nav navbar-nav-scroll text-white" style="--bs-scroll-height: 100%">
            <li class="nav-item">
              <a class="nav-link py-2" href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link py-2" href="./admin/addpost.html">Write Now</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="popularpost.html">Popular Post</a>
                </li>
                <li>
                  <a class="dropdown-item" href="recentpost.html">Recent Post</a>
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
                <input class="form-control me-2 input-group-sm" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-sm btn-outline-warning" type="submit">
                  Search
                </button>
              </form>
            </li>
            <li class="nav-item py-1">
              <a class="btn btn-secondary" href="login.html" role="button">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Banner -->
    <div class="banner-image">
      <div class="bg-overlay d-flex justify-content-center align-items-center">
        <div class="text-center">
          <h1 class="text-white">Blog</h1>
          <p class="text-white">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
            quae.
          </p>
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->
  <!-- Main -->
  <main>
    <section class="blog-container">
      <div class="contaniner m-1">
        <div class="row mx-auto">
          <div class="col col-lg-8">
            <div class="blog-left">
              <!-- Top Blog -->
              <div class="card mb-3">
                <a href="single.html">
                  <div class="inner">
                    <a href="single.html">
                      <img src="https://d3h2k7ug3o5pb3.cloudfront.net/image/2022-06-27/28b846f0-f5f9-11ec-8473-3d2a4b6fe397.png" class="card-img-top w-100" alt="..." />
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="single.html" class="text-decoration-none text-dark">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        This is a wider card with supporting text below as a
                        natural lead-in to additional content. This content is
                        a little bit longer.
                      </p>
                    </a>
                    <div class="date d-flex gap-2">
                      <p class="card-text">
                        <small class="text-muted"><a href="author.html" class="link-secondary">author</a></small>
                      </p>
                      <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- Card Group -->
              <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col col-xs-6">
                  <div class="card">
                    <img src="https://images.unsplash.com/photo-1590341328520-63256eb32bc3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8c3VwZXJoZXJvfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="..." />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        This is a longer card with supporting text below as a
                        natural lead-in to additional content. This content is
                        a little bit longer.
                      </p>
                      <div class="date d-flex gap-2">
                        <p class="card-text">
                          <small class="text-muted"><a href="author.html" class="link-secondary">author</a></small>
                        </p>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card">
                    <img src="https://images.unsplash.com/photo-1590341328520-63256eb32bc3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8c3VwZXJoZXJvfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="..." />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        This is a longer card with supporting text below as a
                        natural lead-in to additional content. This content is
                        a little bit longer.
                      </p>
                      <div class="date d-flex gap-2">
                        <p class="card-text">
                          <small class="text-muted"><a href="author.html" class="link-secondary">author</a></small>
                        </p>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card">
                    <img src="https://images.unsplash.com/photo-1590341328520-63256eb32bc3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8c3VwZXJoZXJvfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="..." />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        This is a longer card with supporting text below as a
                        natural lead-in to additional content. This content is
                        a little bit longer.
                      </p>
                      <div class="date d-flex gap-2">
                        <p class="card-text">
                          <small class="text-muted"><a href="author.html" class="link-secondary">author</a></small>
                        </p>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Blog Right -->
          <div class="col col-lg-4 d-none d-lg-block">
            <div class="blog-right">
              <div class="blog-search mb-5">
                <form class="d-flex" role="search">
                  <input class="form-control me-2 input-group-sm" type="search" placeholder="Search" aria-label="Search" />
                  <button class="btn btn-sm btn-outline-secondary" type="submit">
                    Search
                  </button>
                </form>
              </div>

              <div class="blog-recent mb-5">
                <h5>Recent Post</h5>
                <div class="recent-single-post">
                  <a>
                    <span>6 Free Quick Wireframe Tools For UI/UX Designers in
                      2019</span>
                  </a>
                </div>
                <div class="recent-single-post">
                  <a>
                    <span>6 Free Quick Wireframe Tools For UI/UX Designers in
                      2019</span>
                  </a>
                </div>
                <div class="recent-single-post">
                  <a>
                    <span>6 Free Quick Wireframe Tools For UI/UX Designers in
                      2019</span>
                  </a>
                </div>
              </div>

              <div class="blog-popular mb-5">
                <h5>Popular Post</h5>
                <div class="popular-single-post">
                  <a>
                    <span>6 Free Quick Wireframe Tools For UI/UX Designers in
                      2019</span>
                  </a>
                </div>
                <div class="popular-single-post">
                  <a>
                    <span>6 Free Quick Wireframe Tools For UI/UX Designers in
                      2019</span>
                  </a>
                </div>
                <div class="popular-single-post">
                  <a>
                    <span>6 Free Quick Wireframe Tools For UI/UX Designers in
                      2019</span>
                  </a>
                </div>
              </div>
              <div class="blog-tags mb-5">
                <h5>Tags</h5>
                <span class="badge rounded-pill text-bg-secondary"><a href="tagpost.html" class="link-light text-decoration-none">Primary</a></span>
                <span class="badge rounded-pill text-bg-secondary"><a href="tagpost.html" class="link-light text-decoration-none">Primary</a></span>
                <span class="badge rounded-pill text-bg-secondary"><a href="tagpost.html" class="link-light text-decoration-none">Primary</a></span>
                <span class="badge rounded-pill text-bg-secondary"><a href="tagpost.html" class="link-light text-decoration-none">Primary</a></span>
                <span class="badge rounded-pill text-bg-secondary"><a href="tagpost.html" class="link-light text-decoration-none">Primary</a></span>
                <span class="badge rounded-pill text-bg-secondary"><a href="tagpost.html" class="link-light text-decoration-none">Primary</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Main End -->

  <!-- Pagination -->
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="nextpage.html">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="nextpage.html">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="nextpage.html">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="nextpage.html">Next</a>
      </li>
    </ul>
  </nav>
  <!-- footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <p class="mt-2 mb-0">All Rights Reserved by Mahmud Hasan Rabbi</p>

          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a href="https://www.facebook.com/hxicso" class="nav-link"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/mhasanrabbi" class="nav-link"><i class="fa-brands fa-github"></i></a>
            </li>
            <li class="nav-item">
              <a href="https://www.linkedin.com/in/mahmudhasanrabbi/" class="nav-link"><i class="fa-brands fa-linkedin-in"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script type="text/javascript">
    const nav = document.querySelector("nav");
    window.addEventListener("scroll", function() {
      if (window.pageYOffset > 35) {
        nav.classList.add("bg-dark", "shadow");
      } else {
        nav.classList.remove("bg-dark", "shadow");
      }
    });
  </script>
</body>

</html>