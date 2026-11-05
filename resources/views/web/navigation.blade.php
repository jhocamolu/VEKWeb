<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ route('home') }}" class=" {{ Route::currentRouteNamed('home') ? 'active' : '' }}">Inicio<br></a></li>
        <li><a href="{{ route('about') }}" class=" {{ Route::currentRouteNamed('about') ? 'active' : '' }}">Nosotros</a></li>
        <li><a href="{{ route('pricing') }}" class=" {{ Route::currentRouteNamed('pricing') ? 'active' : '' }}">Planes</a></li>
        <li class="dropdown"><a href="#"><span>Servicios</span> <i
                    class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li class="dropdown"><a href="#"><span>Marketing</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('marketing') }}">Web Marketing</a></li>
                        <li><a href="{{ route('strategy') }}">Estrategia de Marketing</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Sitios Web</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('website') }}">Tu sitio web</a></li>
                        <li><a href="{{ route('development') }}">Desarrollo de Software</a></li>
                        <li><a href="{{ route('integrate') }}">Integraciones</a></li>
                        <li><a href="{{ route('implement') }}">Implementacion</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Audiovisual</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('photo') }}">Fotografia</a></li>
                        <li><a href="{{ route('video') }}">Video</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Diseño</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('branding') }}">Branding</a></li>
                        <li><a href="{{ route('pop') }}">Para POP</a></li>
                        <li><a href="{{ route('digital') }}">Publicidad digital</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('contact') }}" class=" {{ Route::currentRouteNamed('contact') ? 'active' : '' }}">Contacto</a>
        </li>
        <li class="social-links d-flex">
            <a href="https://www.facebook.com/vekstudiocreativo"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/vek_studiocreativo/"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/company/vek-studio-creativo-sas"><i class="bi bi-linkedin"></i></a>
        </li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
