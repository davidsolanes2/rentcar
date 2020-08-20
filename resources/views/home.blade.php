@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
      
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- {{ __('You are logged in!') }} -->

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
                </div>
            </div>
        </div>
        <div class="col-md-8">
            @yield('content')
            <h4>Pagina de inicio de la aplicacion</h4>
        </div>   
    </div>
</div>
@endsection
