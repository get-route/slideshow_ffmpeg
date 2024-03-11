<template>
    <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Как работает сервис?</h1>
        <button @click="openVideo=false, openButton=true" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body col-lg-12 text-center" >
        <template v-if="openButton">
            <img @click="openVideos()" src="Frontend/img/video/video-instrukt.png" alt="инструкция по сайту">
        </template>
        <template v-if="openVideo">
            <iframe  :src="video" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </template>
    </div>
    <div class="modal-footer">
        <button @click="openVideo=false, openButton=true" type="button" class="btn btn-dark" data-bs-dismiss="modal">Закрыть</button>

    </div>





</template>

<script>
    export default {
        name: "IndexVideoComponent",
        props:['video'],
        data(){
            return{
                openVideo:false,
                openButton:true,
            }
        },
        methods:{
            openVideos(url){
               this.openVideo = true
                this.openButton = false
            }
        }
    }
</script>

<style scoped>

</style>
