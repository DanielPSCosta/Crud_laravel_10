<style>
    footer {
        background: #ffab62;
        width: 100%;
        height: 70px;
        position: absolute;
        bottom: 0;
        left: 0;
    }

    body {
        background-image: url("http://localhost/laravel_10/resources/img/img2.jpg");
        /* background-color: #cccccc; */
    }
</style>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:70px;">
        <a class="navbar-brand ml-1" href="http://localhost:8000/">Empresa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost:8000/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/products">Crud</a>
                </li>
            </ul>
            <span class="position-absolute top-30 end-0" style="margin-right:20px;">
                Usuario
            </span>
        </div>
    </nav>

    <div class="row">
        <div class="position-absolute text-light mt-5" style="font-size:100px; text-align:center;">
            SEJA BEM-VINDO
        </div>
    </div>

    <div id="footer">
        <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50 fixed-bottom">
            <div class="container text-center">
                <small>Copyright &copy; Seu site</small>
            </div>
        </footer>
    </div>
</body>

</html>