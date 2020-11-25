<nav id="sidebar" >
    <!-- SIDE BAR -->
    <div class="custom-menu">
        <!-- BOTON DE ESCONDER -->
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
        </button>
    </div>
    <div class="img bg-wrap text-center py-4" style="background-image: url(../../assets/img/img1.jpg);">
        <div class="user-logo">
            <div class="img" style="background-image: url(../../assets/img/img5.jpg);"></div>
            <h3><?php echo $_SESSION['seller-user'] ?></h3>
        </div>
    </div>
    <ul class="list-unstyled components mb-5">
        <li class="active">
            <a onclick="ShowShome()"><span class="fa fa-home mr-3"></span>Home</a>
        </li>
        <li>
            <a onclick="ShowInventory()"><span class="fa fa-list mr-3"></span>Inventario</a>
        </li>
        <li>
            <a onclick="ShowSettings()"><span class="fa fa-cog mr-3"></span>Ajustes</a>
        </li>
        <li>
            <a onclick="ShowHelp()"><span class="fa fa-hands mr-3"></span>Ayuda</a>
        </li>
        <li>
            <a href="../../../model/loguot.php"><span class="fa fa-sign-out-alt mr-3"></span>Sign Out</a>
        </li>
    </ul>
    <footer>&copy Bsic Store v1.0 REV-16112020</footer>
</nav>