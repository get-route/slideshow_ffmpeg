<template>
    <div class="table-responsive">
        <div>
            <a href="#" class="btn-sm btn-success m-2" @click.prevent="this.openAddForm = true">+</a>
            <template v-if="openAddForm">
                <a href="#" class="btn btn-success m-2" @click.prevent="createTag(this.titleAdd, this.text, this.h1, this.description)">Добавить</a>
                <a href="#" class="btn-sm btn-danger m-2" @click.prevent="this.openAddForm = false">X</a>
                <p>
                    <label >Title</label>
                    <input v-model="titleAdd">
                </p>
                <p>
                    <label>Заголовок H1</label>
                    <input v-model="h1">
                </p>
                <p>

                    <label>Description</label>
                    <input v-model="description">

                </p>

                <p>
                    <ckeditor id="editor1" v-model="text" :config="editorConfig"></ckeditor>
                </p>


            </template>
        </div>
        <div v-if="openEditForm">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <label>Title</label>
                    <textarea v-model="this.titleAdd">{{titleAdd}}</textarea>
                </div>
                <div class="col-lg-12 text-center">
                    <label>Заголовок H1</label>
                    <textarea v-model="this.h1">{{h1}}</textarea>
                </div>
                <div class="col-lg-12 text-center">
                    <label>Description</label>
                    <textarea v-model="this.description">{{description}}</textarea>
                </div>
                <div class="col-lg-12">
                    <ckeditor id="editor1" v-model="this.text" :config="editorConfig"></ckeditor>
                </div>
                <a href="#" class="btn btn-dark m-2" @click.prevent="updateTag(this.idTag, this.titleAdd, this.text, this.h1, this.description)">Обновить</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Заголовок
                </th>
                <th>
                    Текст
                </th>
                <th>
                    URL
                </th>

            </tr>
            </thead>
            <tbody>

            <tr v-for="tags in getTag">
                <td>
                    {{tags.id}}
                </td>
                <td>
                    {{tags.title}}
                </td>
                <td>

                    {{tags.text}}
                </td>
                <td>
                    <a :href="'/tag/'+tags.url">{{tags.url}}</a>
                </td>
                <td>
                    <a href="#" class="btn btn-dark m-2" @click.prevent="openFormUpd(tags.id, tags.title, tags.text, tags.h1, tags.description)">Править</a>
                    <a href="#" class="btn btn-danger m-2" @click.prevent="deleteTag(tags.id)">Удалить</a>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "AdminTagComponent",
    data(){
            return{
                getTag: {},
                title:null,
                h1:null,
                text:null,
                description:null,
                idTag:null,
                titleAdd:null,
                redactorActive:null,
                addTag:null,
                editorConfig: {
                    language:'ru',
                },
                openAddForm:false,
                openEditForm:false,

            }

    },
        mounted() {
            this.getTags()
        },
        methods:{
            getTags() {
                axios.get('/api/adm_panel/tags_admin').then(res=>{
                    this.getTag = res.data
                }).catch(function (error) {
                    console.log(error)
                })

            },
            openFormUpd(id, title, text, h1, description){
                this.idTag = id
                this.titleAdd = title
                this.text = text
                this.h1 = h1
                this.description = description
                this.openEditForm = true
            },
            updateTag(id, title, text, h1, description){
                axios.patch('/api/adm_panel/tags_admin/' + id, {title:title, text:text, h1:h1, description:description}).then(res=>{
                    this.idTag = null
                    this.titleAdd = null
                    this.text = null
                    this.h1 = null
                    this.description = null
                    this.openEditForm = false
                    this.getTags()
                    //console.log(id, title, text)
                    alert('Обновление успешно выполнено')
                }).catch(function (error) {
                    //console.log(error)
                    alert("Обновление было прервано по ошибке")
                })
            },
            deleteTag(id){
                axios.delete('/api/adm_panel/tags_admin/' + id).then(res=>{
                    this.getTags()
                    alert("Запись успешно была удалена")
                }).catch(function (error) {
                    //console.log(error)
                    alert('Произошла ошибка при удалении, обратитесь в консоль')
                })
            },
            createTag(title, text, h1, description){
                axios.post('/api/adm_panel/tags_admin',{title:title, text:text, h1:h1, description:description}).then(res=>{
                    this.getTags()
                    alert("Запись успешно была добавлена")
                    this.titleAdd = null
                    this.text = null
                    this.idTag = null
                    this.h1 = null
                    this.openAddForm = false
                    //console.log(res)
                    //console.log(this.titleAdd)

                }).catch(function (error) {
                    //console.log(error)
                    alert('Произошла ошибка, обратитесь в консоль')
                })
            }
    }



    }

</script>

<style scoped>

</style>
