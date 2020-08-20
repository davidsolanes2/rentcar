<!-- sidebar nav -->
    <!-- <nav id="sidebar-nav">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="#">Clientes</a></li>
            <li><a href="#">Contratos</a></li>
            <li><a href="#">Listado Cliente/Contratos</a></li>
        </ul>
    </nav> -->
    <ul class="list-unstyled components">
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="{{ route('cliente.index') }}">Clientes</a>
                    </li>
                    <li>
                        <a href="{{ route('contrato') }}">Contratos</a>
                    </li>
                    <li>
                        <a href="{{ route('cliente.listado') }}">Listado Cliente/Contratos</a>
                    </li>
                </ul>
        </li>
        <li>
            <li>
                <a href="#">About</a>
            </li>
                            
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
    </ul>