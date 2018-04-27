<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel - Components  VueJS</title>

        <link rel="stylesheet" href="{{asset('css/app.css') }}">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <div id="app">
                        <h2 class="text-center">Captura tus ideas</h2> 
                         <div class="card card-body bg-light">
                         <h4>En que estas pensando?</h4>
                            <form >
                                <div class="input-group">
                                    <input type="text" class="form-control input-sm" maxlength="256">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-primary btn-sm">Agregar</button>
                                    </span>
                                </div>
                            </form>    
                            <hr>
                            <ul class="list-unstyled">
                                <li>
                                    <p>
                                        <small class="text-muted">
                                            <em>Hace un minuto</em>                                           
                                        </small>
                                        Mi nueva idea
                                    </p>
                                </li>
                            </ul>                         
                         </div>   
                    </div>
                </div>    
            </div>
        </div>
    
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
