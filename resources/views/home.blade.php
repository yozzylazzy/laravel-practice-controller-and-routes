<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&display=swap" rel="stylesheet">
    <title>Home</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='{{ asset('css/bootstrap.min.css') }}' rel='stylesheet'>
    <script src='{{ asset('js/jquery.min.js') }}'></script>
</head>
<style>
    .material-symbols-outlined {
        font-size: 2em;
        vertical-align: middle;
        margin-right: 0.2em;
    }

    .dropdown-item:hover {
        background-color: aqua;
    }

    .navbar-nav .nav-link {
        font-size: 1.1em;
        font-family: 'Gemunu Libre', sans-serif;
        vertical-align: middle;
    }

    .navbar {
        font-family: 'Gemunu Libre', sans-serif;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/"><span class="material-symbols-outlined">
                        code
                    </span><b
                        style="vertical-align: middle; font-size: 1.4em; font-family: 'Gemunu Libre', sans-serif;">YOZZY
                        LAZZY</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                MY PROJECTS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <h4 class="card-header bg-dark text-white"><b>Development</b></h4>
                                <li><a class="dropdown-item" href="/game">Game Development</a></li>
                                <li><a class="dropdown-item" href="/web">Web Development</a></li>
                                <li><a class="dropdown-item" href="/mobile">Application Mobile Development</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <h4 class="card-header bg-dark text-white"><b>Research</b></h4>
                                <li><a class="dropdown-item" href="/machinelearning">Machine Learning</a></li>
                                <li><a class="dropdown-item" href="/deeplearning">Deep Learning</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/about">ABOUT ME</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mt-5">Welcome to my website</h1>
                    <p class="text-center">This is my website, I will share my projects here</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mt-5">My Projects</h1>
                    <p class="text-center">This is my projects</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid bg-dark text-white p-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Footer</h1>
                    <p class="text-center">This is footer</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
