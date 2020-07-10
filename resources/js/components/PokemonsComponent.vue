<template>

    <div class="row">
        <spinner v-show="loading"></spinner>
        <div class="col-sm" v-for="pokemon in pokemons">
            <div class="card text-center" style="width: 18rem; margin-top: 70px;" >
                <img style="height: 100px; width: 100px; margin:20px; background-color: #EFEFEF" class="card-img-top rounded-circle mx-auto d-block" src="images/" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{pokemon.name}}</h5>
                    <p class="card-text"></p>
                    <a href="/trainers/" class="btn btn-primary">Ver Más...</a>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default{
        data(){ //Retorna Informacion o datos
            return{
                pokemons:[],
                loading: true
            }
        },
        mounted(){ //Se ejecuta al montar la aplicacion
            //console.log('Componente Montado')
            axios.get('http://127.0.0.1:8000/pokemons')
                .then((res) => {
                    this.pokemons = res.data
                    this.loading = false
                })
        }
    }
</script>
