<template>
    <div class="table table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark" >
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Имя
                </th>
                <th>
                    Email
                </th>
                <th>
                    Текст
                </th>
                <th>
                    Ссылка
                </th>
            </tr>
            </thead>
            <tbody v-for="comments in parentArr">
    <tr>
        <td>
            {{comments.id}}
        </td>
        <td>

            <textarea type="text" v-model="comments.name">
                {{comments.name}}
            </textarea>

        </td>
        <td>
            <textarea type="email" v-model="comments.email" >
                {{comments.email}}
            </textarea>
        </td>

        <td>
            <textarea rows="9" type="text" v-model="comments.text">
                {{comments.text}}
            </textarea>

        </td>
        <td>

            <p>
                <a :href="'/metrika/' + comments.metrics.url" target="_blank">
                    {{comments.metrics.title}}
                </a>
            </p>
            <p>
                <a href="" @click.prevent="this.replyForm = comments.id" class="btn-sm btn-primary mt-10">
                    Ответить
                </a>
            </p>
            <div v-if="this.replyForm==comments.id">
                <p>
                    <textarea v-model="replyText" class="m-10" rows="11"></textarea>

                </p>
                <p>
                    <a href="#" @click.prevent="replyComment(this.replyText, this.adminName, this.adminEmail, comments.metric_id, comments.id)" class="btn-sm btn-dark mb-11">Отправить ➥</a>
                    <a href="#" @click.prevent="this.replyForm = false" class="btn-sm btn-danger ml-10">✖</a>
                </p>

            </div>



        </td>

        <td>
            <a href="#" @click.prevent="redactComment(comments.id,comments.text, comments.name, comments.email)" class="btn btn-dark m-2">Править</a>
            <a href="#" @click.prevent="deleteComment(comments.id)" class="btn btn-danger m-2">Удалить</a>
            <p v-if="comments.public == 'Нет'">
                <a href="#" @click.prevent="publicComment(comments.id,'ДА')" class="btn btn-success m-2">Одобрить</a>
            </p>
            <p v-else >
                <a href="#" @click.prevent="publicComment(comments.id,'Нет')" class="btn btn-outline-danger m-2">Скрыть</a>
            </p>

        </td>

    </tr>

    <tr v-for="comments_reply in replyArr" class="bg-gradient-light">
        <template v-if="comments_reply.parent_id == comments.id">
        <td>
            ➥
        </td>
        <td>
            <textarea type="email" v-model="comments_reply.name" >
                {{comments_reply.name}}
            </textarea>
        </td>
        <td>
            <textarea type="email" v-model="comments_reply.email" >
                {{comments_reply.email}}
            </textarea>
        </td>

        <td>
           <textarea rows="9" type="text" v-model="comments_reply.text">
                {{comments_reply.text}}
            </textarea>

        </td>
        <td>
            <p>
                <a :href="'/metrika/' + comments_reply.metrics.url" target="_blank">
                    {{comments_reply.metrics.title}}
                </a>
            </p>
            <p>
                <a href="" @click.prevent="this.replyForm = comments_reply.id" class="btn-sm btn-primary mt-10">
                    Ответить
                </a>
            </p>
            <div v-if="this.replyForm==comments_reply.id">
                <p>
                    <textarea v-model="replyText" class="m-10" rows="11"></textarea>

                </p>
                <p>
                    <a href="#" @click.prevent="replyComment(this.replyText, this.adminName, this.adminEmail, comments_reply.metric_id, comments_reply.id)" class="btn-sm btn-dark mb-11">Отправить ➥</a>
                    <a href="#" @click.prevent="this.replyForm = false" class="btn-sm btn-danger ml-10">✖</a>
                </p>

            </div>



        </td>

        <td>
            <a href="#" @click.prevent="redactComment(comments_reply.id,comments_reply.text, comments_reply.name, comments_reply.email)" class="btn btn-dark m-2">Править</a>
            <a href="#" @click.prevent="deleteComment(comments_reply.id)" class="btn btn-danger m-2">Удалить</a>
            <p v-if="comments_reply.public == 'Нет'">
                <a href="#" @click.prevent="publicComment(comments_reply.id,'ДА')" class="btn btn-success m-2">Одобрить</a>
            </p>
            <p v-else >
                <a href="#" @click.prevent="publicComment(comments_reply.id,'Нет')" class="btn btn-outline-danger m-2">Скрыть</a>
            </p>

        </td>
</template>

    </tr>
    <tr>
        <th>
            ID
        </th>
        <th>
            Имя
        </th>
        <th>
            Email
        </th>
        <th>
            Текст
        </th>
        <th>
            Ссылка
        </th>
    </tr>
            </tbody>



        </table>
    </div>

</template>

<script>
    export default {
        name: "AdminCommentComponent",
        data(){
          return{
              getComment: null,
              urlMetric: null,
              replyForm: false,
              replyText:null,
              pubComment:null,
              adminEmail:'admin@mail.ru',
              adminName:'Администрация',
              replyArr: [],
              parentArr:[],
          }
        },
        mounted() {
            this.getComments()
            //this.getRelationships(1)
        },
        methods:{
            getComments(){
                axios.get('/api/adm_panel/comments_admin').then(res=>{
                    this.getComment = res.data
                    //Array reply comments
                    this.replyArr = res.data.filter(function (reply) {
                        return reply.parent_id >0;
                    })
                    this.parentArr = res.data.filter(function (parent) {
                        return parent.parent_id == null;
                    })
                    //console.log(this.parentArr)

                    return this.getComment

                }).catch(function(error){
                    alert('Произошла ошибка вывода, просьба обратиться в консоль')
                    console.log(error)
                })
            },
            replyComment(text, name, email, metric_id,parent_id){
                axios.post('/api/adm_panel/comments_admin',{text:text, name:name, email:email, metric_id:metric_id, parent_id:parent_id}).then(res=>{

                    this.replyText = null
                    this.replyForm = false
                    this.getComments()
                    alert('Ответ успешно опубликован')

                }).catch(function(error){
                    alert('Произошла ошибка при отправке, просьба обратиться в консоль')
                    console.log(error)
                })
            },
            redactComment(id,text, name, email){
                axios.patch('/api/adm_panel/comments_admin/' + id,{text:text, name:name, email:email}).then(res=>{
                    this.getComments()
                    alert('Ваш комментарий отредактирован')

                }).catch(function(error){
                    alert('Произошла ошибка при отправке, просьба обратиться в консоль')
                    console.log(error)
                })
            },
            deleteComment(id){
                axios.delete('/api/adm_panel/comments_admin/' + id,).then(res=>{
                    this.getComments()
                    alert('Ваш комментарий удален')

                }).catch(function(error){
                    alert('Произошла ошибка при удалении, просьба обратиться в консоль')
                    console.log(error)
                })
            },
            publicComment(id,publicComment){
                this.pubComment = publicComment
                axios.patch('/api/adm_panel/comments_admin/public/' + id,{public:this.pubComment}).then(res=>{
                    this.getComments()
                    alert('Ваш комментарий прошел настройки публикации')
                    this.pubComment = null

                }).catch(function(error){
                    alert('Произошла ошибка при отправке, просьба обратиться в консоль')
                    console.log(error)
                })
            },
        }
    }
</script>

<style scoped>

</style>
