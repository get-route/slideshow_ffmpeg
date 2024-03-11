<template>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Таблица метрик сайта</h4>
                <p><a href="#" @click="this.hidenForm = true" class="btn btn-success ">Добавить</a>
                <template v-if="this.hidenForm">
                    <a @click="this.hidenForm=false, this.openUpdForm=false" href="#" class="btn btn-danger m-4">Х</a>
                </template>
                </p>
                <!--container add new metric-->
                <div v-if="this.hidenForm" class="col-lg-12 m-4" style="border: black 1px dotted">
                    <div class="row text-center">
                        <div class="col-lg-12 m-4">
                            <h2>Title</h2>
                            <textarea  v-model="titleForm" cols="50" rows="2" placeholder="Укажите заголовок страницы"></textarea>

                        </div>
                        <div class="col-lg-12 m-4">
                            <h2>H1</h2>
                            <textarea  v-model="h1Form" cols="50" rows="2" placeholder="Укажите h1"></textarea>

                        </div>

                        <div class="col-lg-12 row">
                            <h2 class="col-lg-12">Выберите метрику
                                    <label for="image" class="btn btn-success">➕</label>
                                    <input id="image" name="image" ref="addImg" style="visibility:hidden;" @change="addImages()" type="file">


                            </h2>

                                <div  class="overflow-scroll img-metric">
                                    <template v-for="directive in this.directiveImg">
                                        <a  @click.prevent="this.successImage(directive)" href="#" class="btn col-lg-4">
                                            <img @click="deleteImage(directive)" src="/public/admin/image/delete.png">
                                            <img :src="'/public/storage/thumbnail/thumbnail-'+ directive"  class="img-metric-admin">
                                            <img v-if="this.activeImg == directive" src="/public/admin/image/verification.png">

                                        </a>
                                    </template>


                                </div>


                        </div>
                        <div class="col-lg-12 m-4">
                            <h2>Description</h2>
                            <textarea  v-model="descriptionForm" cols="50" rows="4" placeholder="Описание для поисковиков"></textarea>

                        </div>
                        <div class="col-lg-12 ">
                            <h2>Краткая информация</h2>
                            <ckeditor id="editor1" v-model="editorData" :config="editorConfig"></ckeditor>
                        </div>
                        <div class="col-lg-12">

                            <h2>Теги для метрики</h2>
                            <div class="row m-4">
                                <div v-for="tags in this.allTag" class="col-lg-3 m-4">
                                        <input class="form-check-input " type="checkbox" :id="tags.url" v-model="tagsArr" :value="tags.id">
                                        <label class="form-check-label btn btn-dark" :for="tags.url">{{tags.title}}</label>

                                </div>
                            </div>



                        </div>
                        <div class="col-lg-12 row">
                            <h2 class="col-lg-12">Доступ ({{this.priseForm}})</h2>

                            <div class="col-lg-4">
                                    <a href="" @click.prevent="this.priseForm = 'Бесплатная'">
                                        <p>БЕСПЛАТНО</p>
                                        <img src="/public/admin/image/slippers.png">
                                        <p v-if="this.priseForm == 'Бесплатная'">
                                            <img  src="/public/admin/image/verification.png">
                                        </p>
                                    </a>

                                </div>
                                <div class="col-lg-4">
                                    <a href="#"  @click.prevent="this.priseForm = 'Платная'">
                                        <p>ПЛАТНО</p>
                                        <img src="/public/admin/image/price.png">
                                        <p v-if="this.priseForm == 'Платная'">
                                            <img  src="/public/admin/image/verification.png">
                                        </p>
                                    </a>

                                </div>


                        </div>
                        <div class="col-lg-12 text-center">
                            <a href="#" @click.prevent="createMetric(this.titleForm,this.h1Form,this.activeImg,this.descriptionForm, this.editorData, this.tagsArr, this.priseForm)" class="btn btn-success m-6">ОПРАВИТЬ</a>
                        </div>

                    </div>
                </div>
                <!--end container add new metric-->

                <!--container UPDATE metric-->
                <div v-if="this.openUpdForm" class="col-lg-12 m-4" style="border: black 1px dotted">
                    <div class="row text-center">
                        <template v-if="this.openUpdForm">
                            <a @click="this.hidenForm=false, this.openUpdForm=false" href="#" class="btn btn-danger m-4">Х</a>
                        </template>
                        <h1>Форма обновления метрики</h1>
                        <div class="col-lg-12 m-4">
                            <h2>Title</h2>
                            <textarea  v-model="this.editMetric.title" cols="50" rows="2">
                                {{this.editMetric.title}}
                            </textarea>
                        </div>
                        <div class="col-lg-12 m-4">
                            <h2>H1</h2>
                            <textarea  v-model="this.editMetric.h1" cols="50" rows="2">
                                {{this.editMetric.h1}}
                            </textarea>
                        </div>
                        <div class="col-lg-12 row">
                            <h2 class="col-lg-12">Выберите метрику
                                <label for="image" class="btn btn-success">➕</label>
                                <input id="image" name="image" ref="addImg" style="visibility:hidden;" @change="addImages()" type="file">


                            </h2>

                            <div  class="overflow-scroll img-metric">
                                <template v-for="directive in this.directiveImg">
                                    <a  @click.prevent="this.successImage(directive)" href="#" class="btn col-lg-4">
                                        <img @click="deleteImage(directive)" src="/public/admin/image/delete.png">
                                        <img :src="'/public/storage/thumbnail/thumbnail-'+ directive"  class="img-metric-admin">
                                        <img v-if="this.activeImg == directive" src="/public/admin/image/verification.png">

                                    </a>
                                </template>


                            </div>


                        </div>
                        <div class="col-lg-12 m-4">
                            <h2>Description</h2>
                            <textarea  v-model="this.editMetric.description" cols="50" rows="4" placeholder="Описание для поисковиков">{{this.editMetric.description}}</textarea>

                        </div>
                        <div class="col-lg-12 ">
                            <h2>Краткая информация</h2>
                            <ckeditor id="editor1" v-model="this.editMetric.text" :config="editorConfig"></ckeditor>
                        </div>
                        <div class="col-lg-12">

                            <h2>Теги для метрики</h2>
                            <div class="row m-4">
                                <div v-for="tags in this.allTag" class="col-lg-3 m-4">

                                        <input class="form-check-input " type="checkbox" :id="tags.url" v-model="tagsArr" :value="tags.id">

                                    <label class="form-check-label btn btn-dark" :for="tags.url">{{tags.title}}</label>

                                </div>
                            </div>



                        </div>
                        <div class="col-lg-12 row">
                            <h2 class="col-lg-12">Доступ ({{this.editMetric.prise}})</h2>

                            <div class="col-lg-4">
                                <a href="" @click.prevent="this.editMetric.prise = 'Бесплатная'">
                                    <p>БЕСПЛАТНО</p>
                                    <img src="/public/admin/image/slippers.png">
                                    <p v-if="this.editMetric.prise == 'Бесплатная'">
                                        <img  src="/public/admin/image/verification.png">
                                    </p>
                                </a>

                            </div>
                            <div class="col-lg-4">
                                <a href="#"  @click.prevent="this.editMetric.prise = 'Платная'">
                                    <p>ПЛАТНО</p>
                                    <img src="/public/admin/image/price.png">
                                    <p v-if="this.editMetric.prise == 'Платная'">
                                        <img  src="/public/admin/image/verification.png">
                                    </p>
                                </a>

                            </div>


                        </div>
                        <div class="col-lg-12 text-center">
                            <a href="#" @click.prevent="updateMetric(this.idActiveUpd, this.editMetric.title,this.editMetric.h1,this.activeImg,this.editMetric.description, this.editMetric.text, this.tagsArr, this.editMetric.prise)" class="btn btn-success m-6">ОБНОВИТЬ</a>
                        </div>

                    </div>
                </div>
                <!--end container UPDATE metric-->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Метрика
                            </th>
                            <th>
                                Заголовок
                            </th>
                            <th>
                                Теги
                            </th>
                            <th>
                                Доступ
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="metric in allMetrics">
                            <td class="py-1 img-table">
                                <a :href="'/metrika/'+ metric.url" target="_blank"> <img :src="'/public/storage/thumbnail/thumbnail-'+ metric.photo" alt="image"></a>
                            </td>
                            <td>
                                {{metric.title}}
                            </td>
                            <td>
                                <p v-for="tags_metric in metric.tags">
                                    <a :href="'/tag/'+tags_metric.url">{{tags_metric.title}}</a>
                                </p>
                            </td>


                            <td>
                               {{metric.prise}}
                            </td>
                            <td>
                                <a href="#" class="btn btn-dark m-2" @click="editMetrics(metric.id)">Править</a>
                                <a href="#" @click.prevent="deleteMetrics(metric.id)" class="btn btn-danger m-2">Удалить</a>
                                <a v-if="metric.public == 'Нет'" href="#" @click.prevent="publicONMetrics(metric.id,'Да')" class="btn btn-success m-2">Одобрить</a>
                                <a v-else href="#" @click.prevent="publicONMetrics(metric.id,'Нет')" class="btn btn-facebook m-2">Скрыть</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: "AdminMetricComponent",
        data(){
            return{
                allMetrics: null,
                allTag: null,
                directiveImg:null,
                editorConfig: {
                    language:'ru',
                },
                tagsArr:[],//tags all data
                editorData: "",
                titleForm:"",
                h1Form:"",
                descriptionForm:"",
                imagesForm:"",
                priseForm:"Бесплатная",
                hidenForm: false,//hide form creted metric
                openUpdForm:false,//hide form update metric
                successImg:null,
                activeImg: null,
                addimg:null,
                idActiveUpd:null,//active for patch metric in table
                editMetric:null,
            }
        },

        mounted() {
            this.getMetrics()
            this.allTags()
            this.getDirective()

            },
        methods:{
          createMetric(titleForm,h1Form,activeImg,descriptionForm, editorData, tagsArr, priseForm){
              axios.post('/api/adm_panel/metrics_admin/create',{title:titleForm,h1:h1Form,photo:activeImg,description:descriptionForm,text:editorData,tags:tagsArr,prise:priseForm}).then(res=>{
                  this.getMetrics()
                  this.tagsArr = []
                  this.hidenForm= false
                  this.titleForm=""
                  this.activeImg=null
                  this.descriptionForm=""
                  this.editorData=null
                  this.priseForm= "Бесплатная"
              }).catch(function (error) {
                  console.log(error)
                  alert('Произошла ошибка при отправке. Посмотрите консоль')
              })
          },
            updateMetric(id, titleForm,h1Form,activeImg,descriptionForm, editorData, tagsArr, priseForm){
              axios.patch('/api/adm_panel/metrics_admin/update/'+ id,{title:titleForm,h1:h1Form,photo:activeImg,description:descriptionForm,text:editorData,tags:tagsArr,prise:priseForm}).then(res=>{
                  this.getMetrics()
                  this.openUpdForm = false
                  this.idActiveUpd = null
                  this.tagsArr = []
                  this.activeImg=null
                  this.priseForm= "Бесплатная"
              }).catch(function (error) {
                  console.log(error)
                  alert('Произошла ошибка при отправке. Посмотрите консоль')
              })
          },
            publicONMetrics(id,publicON){
                axios.patch('/api/adm_panel/metrics_admin/ON/'+ id,{publicON:publicON}).then(res=>{
                    this.getMetrics()
                }).catch(function (error) {
                    console.log(error)
                    alert('Произошла ошибка при отправке. Посмотрите консоль')
                })
            },
            editMetrics(id){
              axios.get('/api/adm_panel/metrics_admin/edit/' + id).then(res=>{
                  this.editMetric = res.data[0]
                  console.log(this.editMetric)
                  this.openUpdForm = true
                  this.idActiveUpd = id
                  this.activeImg = this.editMetric.photo
              }).catch(function (error) {
                  console.log(error)
                  alert('Произошла ошибка выгрузки. Посмотрите консоль')
              })
          },
            getMetrics(){
              axios.get('/api/adm_panel/metrics_admin').then(res=>{
                  this.allMetrics = res.data
              }).catch(function (error) {
                  console.log(error)
                  alert('Произошла ошибка выгрузки. Посмотрите консоль')
              })
          },
            deleteMetrics(id){
                axios.delete('/api/adm_panel/metrics_admin/delete/' + id).then(res=>{
                    this.getMetrics()
                    alert('Запись удалена')
                }).catch(function (error) {
                    console.log(error)
                    alert('Произошла ошибка удаления. Посмотрите консоль')
                })

            },
            allTags(){
              axios.get('/api/adm_panel/metrics_admin/all-tags').then(res=>{
                  this.allTag = res.data
              }).catch(function (error) {
                  console.log(error)
                  alert('Произошла ошибка выгрузки. Посмотрите консоль')
              })
          },
            getDirective(){
              axios.get('/api/adm_panel/metrics_admin/directive').then(res=>{
                  this.directiveImg = res.data
              }).catch(function (error) {
                  console.log(error)
                  alert('Папка пуста или ошибка соединения. Обратитесь в консоль')
              })
          },
            addImages(){
                const formData = new FormData()
                formData.append('image',this.$refs.addImg.files[0])
              axios.post('/api/adm_panel/metrics_admin/add-image',formData,{
                  headers:{
                      'Content-Type':'multipart/form-data'
                  }
              }).then(res=>{
                  this.addimg = res.data
                  this.getDirective()
                  alert('Картинка успешно загружена')

              }).catch(function (error) {
                  console.log(error)
                  alert('Изображение не было загружено')
              })
          },
            deleteImage(image){
                axios.get('/api/adm_panel/metrics_admin/delete-image/'+ image,{image:image}).then(res=>{
                    this.getDirective()
                    console.log('Удалил')
                }).catch(function (error) {
                    console.log(error)
                    alert('Произошла ошибка выгрузки. Посторите консоль')
                })
            },
            successImage(img){
              this.successImg = img
                this.activeImg = img
            },
            openUpdateForm(id){
                this.openUpdForm = true
                this.idActiveUpd = id
            },

        },

    }
</script>

<style scoped>

</style>
