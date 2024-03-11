<template>
        <div class="row">

            <div class="col-lg-8">

                <p :class="fontSelect">{{$store.fonts.state.fontSelect}}</p>

            </div>
        </div>

</template>
<script>
    //import {mapState,mapActions} from 'vuex'
    //import FontsController from "./fonts/FontsController.vue";
    export default {
         name:'redactor-index',
        //components: {FontsController},
        // computed:{
        //     ...mapState([fontSelect])    ,
        //
        // },
    }
</script>


<style scoped>
    .font-selected option{
        font-size: 20px;

    }



</style>
