<!--  Preloader Start
========================-->
    <div id='preloader'>
        <div id='status'>
            <img src='img/loading.gif' alt='Cargando' />
        </div>
    </div>

    <!--=========== Main Header area ===============-->
    <header id="home">
        <div class="main-navigation">
            <div class="container">
                <div class="row">
                    <!-- logo-area-->
                    <div class="col-xl-2 col-lg-3 col-md-3">
                        <div class="logo-area">
                            <a href="./"><img src="img/LogoMAS_Navbar.png" alt="Grupo de Comunicaciones MÁS"></a>
                        </div>
                    </div>
                    <!-- mainmenu-area-->
                    <div class="col-xl-10 col-lg-9 col-md-9">
                        <div class="main-menu f-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="d-none d-md-inline"><a class="footer-socials" href="https://facebook.com/TuFrecuenciaF"><i class="fab fa-facebook"></i></a></li>
                                    <li class="d-none d-md-inline"><a class="footer-socials" href="https://instagram.com/TuFrecuenciaF"><i class="fab fa-instagram"></i></a></li>
                                    <li class="d-none d-md-inline"><a class="footer-socials" href="https://twitter.com/TuFrecuenciaF"><i class="fab fa-twitter"></i></a></li>
                                    <li class="d-none d-md-inline"><a class="footer-socials" href="https://youtube.com/TuFrecuenciaF"><i class="fab fa-youtube"></i></a></li>
                                    <li>
                                        <a <?php echo ($paginagrupomas == "inicio") ? 'class="current"' : ''; ?> href="./">Página principal</a>
                                    </li>
                                    <li>
                                        <a <?php echo ($paginagrupomas == "nosotros") ? 'class="current"' : ''; ?> href="./nosotros">Nosotros</a>
                                    </li>
                                    <li>
                                        <a <?php echo ($paginagrupomas == "medios") ? 'class="current"' : ''; ?> href="./medios">Medios <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown">
                                            <li><a href="https://frecuenciaf.com/">Radio</a></li>
                                            <li><a href="./medios#impresos">TV</a></li>
                                            <li><a href="./medios#impresos">Impresos</a></li>
                                            <li><a href="./medios#digital">Digital</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a <?php echo ($paginagrupomas == "contacto") ? 'class="current"' : ''; ?> href="./contacto">Contacto</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu-->
                        <div class="mobile-menu"></div>
                        <!--Search-->
                        <!--
                        <div class="search-box-area">
                            <div id="search" class="fade">
                                <a href="#" class="close-btn" id="close-search">
                                    <em class="fa fa-times"></em>
                                </a>
                                <input placeholder="what are you looking for?" id="searchbox" type="search" />
                            </div>
                            <div class="search-icon-area">
                                <a href='#search'>
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </header>