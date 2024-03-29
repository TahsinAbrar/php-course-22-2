<?php

require_once __DIR__ . './codes/Articles.php';
require_once __DIR__ . './lib/database.php';
require_once __DIR__ . './lib/helpers.php';

if (empty($_GET['id'])) {
    throw new \Exception('Invalid request');
}

$id = $_GET['id'];

session_start();

// dd($_GET['id']);

$errors = $_SESSION['errors'] ?? [];

// Destroying session
session_destroy();



$article = getArticleById($pdo, $id);

// dd($article);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blogs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="post.css" />
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
                            <a class="nav-link py-2" href="../index.html">Home</a>
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
    </header>
    <!-- Header End -->
    <!-- Main -->
    <main>
        <div class="container">
            <div class="row mt-2">
                <div class="col">
                    <h1>Add Post</h1>
                </div>
            </div>
            <?php if (!empty($errors)): ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors as $key => $error): ?>
                        <li><?php echo $key . " : " . $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            <div class="row mt-2 w-75 bg-light mx-auto">
                <div class="col">
                    <form action="store.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title" value="<?php echo $article->title; ?>">
                        </div>
                        <div class="form-floating mb-3">
                            <textarea required name="description" class="form-control" placeholder="Write Here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Description</label>
                        </div>
                        <div class="mb-3">
                            <label for="author_name" class="form-label">Author Name</label>
                            <input name="author_name" required type="text" class="form-control" id="author_name" placeholder="Enter Author Name">
                        </div>
                        <div class="mb-3">
                            <select name="categories" required class="form-select" aria-label="Default select example">
                                <option selected>Category</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input name="image_path" class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">
                                Add Post
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="mt-2 mb-0">All Rights Reserved by Mahmud Hasan Rabbi</p>

                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fa-brands fa-github"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>