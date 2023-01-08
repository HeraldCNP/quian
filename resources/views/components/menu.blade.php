    <!-- Start Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div id="logo">

                        <a href="/">
                            <figure>
								<img src="{{ asset('/img/logo.png') }}"
									 alt="Elephant at sunset" width="200px">
							</figure>
						</a>
                        <p>Films</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <!-- Start Navigation -->
                    <nav>
                        <ul id="navigation" class="pull-right hidden-phone">
                            <li class="submenu">
                                <a class="{{ request()->routeIs('inicio') ? 'active' : '' }}" href="/">Inicio</a>
                                {{-- <ul class="dropmenu-active">
                                    <li><a href="index.html" class="drop-selected">Hero Carousel</a></li>
                                    <li><a href="index-cute.html">3D Cute Slider</a></li>
                                </ul> --}}
                            </li>
                            <li>
                                <a class="{{ request()->routeIs('acerca') ? 'active' : '' }}" href="/about">¿Quienes somos?</a>
                            </li>
                            <li>
                                <a class="{{ request()->routeIs('servicios') ? 'active' : '' }}" href="/servicios">Servicios</a>
                            </li>
                            <li>
                                <a class="{{ request()->routeIs('portafolio') ? 'active' : '' }}" href="portfolio.html">Portafolio</a>
                            </li>
                            
                            <li>
                                <a class="{{ request()->routeIs('contacto') ? 'active' : '' }}" href="/contacto">Contacto</a>
                            </li>
                            <!-- <li class="last submenu">
                                <a href="shortcodes.html">Features</a>
                                <ul class="dropmenu-active">
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="columns.html">Columns</a></li>
                                    <li><a href="retina.html">Retina Ready</a></li>
                                    <li><a href="responsive.html">Responsive</a></li>
                                    <li><a href="cute-slider.html">Cute Slider</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                    <!-- End Navigation -->
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
