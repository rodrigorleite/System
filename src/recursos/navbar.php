<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
<?php

if (isset($_SESSION['mensagem'])) {
    echo "<script>
            var notyf = new Notyf({
                duration: 3000,
                    position: {
                    x: 'center',
                    y: 'top',
                },
            
        });
            notyf.success(' " . $_SESSION['mensagem'] . " ');
            </script>";
    unset($_SESSION['mensagem']);
}
?>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"> <i class="fa-solid fa-book"></i> É isso ai!</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-center" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-center" href="#">Action</a></li>
                        <li><a class="dropdown-item text-center" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-center" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 text-center" type="search" placeholder="Buscar" aria-label="Search" />
                <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                <a class="btn ms-1" href="../backend/logout.php"><i class="fa-solid fa-door-open"></i></a>
            </form>
        </div>
    </div>
</nav>