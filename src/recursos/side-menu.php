<ul class="navbar-nav sidebar accordion" id="accordionSidebar">
    <p class="mt-4 text-center" style="color:white; font-weight: 600;">
        Bem vindo(a) <?php
        echo $_SESSION["usuario"]; ?>
    </p>
    <hr class="sidebar-divider d-none d-md-block" style="color:white;">

    <li class="mt-2">
        <a href="home.php" class="menu-item"><i class="fa-solid fa-house"></i> Inicio</a>
    </li>
    <hr class="sidebar-divider d-none d-md-block" style="color:white;">

    <div class="sidebar-heading" style="color:white;">Área de Cadastro</div>

    <li class="mt-2">
        <a href="area.php" class="menu-item"><i class="fa-solid fa-graduation-cap"></i> Áreas</a>
    </li>
    <li class="mt-2">
        <a href="city.php" class="menu-item"><i class="fa-solid fa-building"></i> Cidades</a>
    </li>
    <li class="mt-2">
        <a href="course.php" class="menu-item"><i class="fa-solid fa-book"></i> Cursos</a>
    </li>
    <li class="mt-2">
        <a href="pointf.php" class="menu-item"><i class="fa-solid fa-map-pin"></i> Ponto Focal</a>
    </li>
    <li class="mt-2">
        <a href="region.php" class="menu-item"><i class="fa-solid fa-map-location-dot"></i> Regiões</a>
    </li>
    <li class="mt-2">
        <a href="user.php" class="menu-item"><i class="fa-solid fa-user-group"></i> Usuario</a>
    </li>

    <hr class="sidebar-divider d-none d-md-block" style="color:white;">

    <div class="sidebar-heading" style="color:white;">Área de Vendas</div>

    <li class="mt-2">
        <a href="searchs.php" class="menu-item"><i class="fa-solid fa-magnifying-glass"></i> Buscar
            Vendas</a>
    </li>
    <li class="mt-2">
        <a href="venda.php" class="menu-item"><i class="fa-solid fa-money-bill-trend-up"></i> Efetuar
            Venda</a>
    </li>
</ul>