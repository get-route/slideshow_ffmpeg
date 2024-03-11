<template>
    <p v-if="VK">
        <img class="img-social" src="/public/Frontend/img/social/vk.png" @click="vkSoc(url,title,images) ">
    </p>
    <p v-if="OK">
            <img class="img-social" src="/public/Frontend/img/social/ok.png" @click="okSoc(url,title,images) ">
    </p>

</template>

<script>
    export default {
        name: "SocButComponents",
        props:['OK', 'VK', 'url', 'title', 'images',],
        methods:{
            vkSoc(url, title, imageUrl,){
                window.open('https://vk.com/share.php?url=' + url +'&title='+ title +'&image='+ imageUrl,"_blank","popup=yes")
            } ,
            okSoc(url, title, imageUrl,){
                window.open('https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&st.title='+ title +'&st.shareUrl='+ url + '&st.imageUrl=' + imageUrl,"_blank","popup=yes")
            }
        }
    }

</script>

<style scoped>
    .img-social, .img-social:hover{
        border: none;
        box-shadow: none;
        width: 32px;
        height: 32px;
    }
</style>
