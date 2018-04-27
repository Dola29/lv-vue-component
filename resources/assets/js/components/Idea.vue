<template>
    <div>
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
</template>

<script>
    export default {
        
    }
</script>
