<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
<title> News</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="hello">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="about">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signup">SignUp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth/login">SignIp</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer style="background-color: black; color: white; position: absolute; bottom: 0; width: 100%;">
        Aksenov Kirill 221-322
    </footer>
</body>

</html>