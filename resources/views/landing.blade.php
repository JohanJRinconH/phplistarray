<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="row">
                
                    <div class="bg-white rounded p-4 shadow text-center">
                        <div class="row">
                            <div class="col-lg-4 d-flex justify-content-center align-items-center flex-column">
                                <h3>Johan Rincón</h3>
                                <small>Desarrollador Web</small>
                            </div>
                            <div class="col-lg-4">
                                <h1>LISTAR TEST</h1>
                                <pre class="mb-0">Multiplos de 3</pre>
                                <pre class="mb-0">Multiplos de 5</pre>
                                <pre>Multiplos de 3 y 5</pre>                            
                            </div>
                            <div class="col-lg-4 d-flex justify-content-center align-items-center flex-column">
                                <small>for <strong>practice</strong></small>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="grid-container">
                                    @forelse ($list as $listItem)
                                        <div class="grid-item bg-primary shadow rounded text-white">
                                            <strong>{{ $listItem }}</strong>        
                                        </div>                      
                                    @empty
                                        <h3>No hay lista para mostrar</h3>
                                    @endforelse	 
                                </div>                
                
                            </div>                   
                        </div>
                    </div>         
               
            </div>
        </div>
    </body>
</html>
