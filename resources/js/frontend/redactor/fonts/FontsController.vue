<template>

        <div class="col-lg4">
            <input v-model="names" placeholder="Укажите имя ребенка">
        </div>
        <div class="col-lg-4" v-if="names">
            <select class="form-select btn font-selected" v-model="fontSelect" @click.self="$store.fonts.action.FontsClick($event)">
                <option selected :value="fontSelect">Выберите шрифт...</option>
                <option class="segoe-font" value="segoe-font">{{$store.fonts.state.names}}</option>
                <option class="verdana-font" value="verdana-font">{{$store.fonts.state.names}}</option>
                <option>Three</option>
            </select>
            {{$store.fonts.state.fontSelect}}
        </div>



</template>

<script>
    //import {mapState,mapActions} from 'vuex'
export default {
        name: "font-redactor",
        // data(){
        //     return{
        //         font:null,
        //         fontSelect:"Выберите шрифт",
        //         names:null,
        //     }
        // },

    // methods:{
    // ...mapActions(['FontsClick'])
    // }
        // methods:{
        //     FontsClick(event){
        //         console.log(event.target.value)
        //     },
        //
        // }
    }
</script>

<style scoped>
    .segoe-font{
        font-family: "Segoe Script";
        font-size: 34px;
    }
    .verdana-font{
        font-family: "Verdana";
        font-size: 34px;
    }


</style>
