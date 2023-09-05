
<style>
	footer {
		background: #ffab62;
		width: 100%;
		height: 70px;
		position: absolute;
		bottom: 0;
		left: 0;
	}

</style>

<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10 CRUD Application - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:70px;">
        <a class="navbar-brand ml-1" href="http://localhost/Estoque/Estoques">Empresa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/Estoque/Estoques">Home</a>
                </li>
                <!-- <li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li> -->
            </ul>
            <span class="position-absolute top-30 end-0" style="margin-right:20px;">
                SEJA BEM-VINDO
            </span>
        </div>

    </nav>

    <div class="container">
        @yield('content')
    </div>

    <div id="footer">
        <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50 fixed-bottom">
            <div class="container text-center">
                <small>Copyright &copy; Your Website</small>
            </div>
        </footer>
    </div>
</body>

</html>