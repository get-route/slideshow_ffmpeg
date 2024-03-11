<template>



    <div class="btn-group row" role="group" aria-label="Basic radio toggle button group">
        <div class="col-lg-3 col-6 col-md-4 col-xl-3 col-sm-6">
            <input type="radio" v-model="checkTags" value="off" class="btn-check" name="btnradio" id="btnradio" autocomplete="off" checked @click="allMetrik()">
            <label class="btn btn-outline-dark" for="btnradio">ВСЕ</label>
        </div>

        <template v-for="tag in this.allTags">
            <div class="col-lg-3 col-6 col-md-4 col-xl-3 col-sm-6">
                <input type="radio" class="btn-check" v-model="checkTags" name="btnradio" :id="'btnradio'+tag.id" autocomplete="off" checked @click="filterMetrik(tag.metric)">
                <label class="btn btn-outline-dark" :for="'btnradio'+tag.id">#{{tag.title}}#</label>
            </div>

        </template>
    </div>

    <hr class="m-4">

    <div class="col-lg-4 mb-3" v-for="metrika in this.allMetriks">
        <div class="card" style="width: 18rem;">
            <a :href="'/metrika/'+ metrika.url" target="_blank">
                <img :src="'public/storage/thumbnail/thumbnail-'+metrika.photo" class="img-thumbnail card-metrik-all" :alt="metrika.title">

            </a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CatalogComponents",
        data(){
            return{
                allMetriks:null,
                allTags:null,
                checkTags:null,
            }
        },
        mounted() {
            this.allMetrik()
            this.allTag()
        },
        methods:{
            allMetrik(){
                axios.get('/api/all').then(res=>{
                    this.allMetriks = res.data
                }).catch(function (error) {
                    console.log(error)
                })
            },
            allTag(){
                axios.get('/api/all/tag').then(res=>{
                    this.allTags = res.data
                }).catch(function (error) {
                    console.log(error)
                })
            },
            filterMetrik(tagMetriks){
                this.allMetriks = tagMetriks
            }
        }
    }
</script>

<style scoped>

</style>
