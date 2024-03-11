<template>

    <button  @click.prevent="replyComments(metricid, parentid, authcheck)" class="btn btn-dark btn-sm text-left">Ответить</button>

<div class="col-lg-6" v-if="openForm">
    <template v-if="this.auth==false">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
            <input v-model="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Александра">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label ">Email</label>
            <input v-model="email" type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
        </div>
    </template>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Ваш комментарий</label>
        <textarea v-model="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="m-3 text-center">
        <button  class="btn-sm btn-success m-2" @click="submitReply(name, email, text, this.metrikId, this.parentId, this.auth)" >Отправить</button>
        <button  @click.prevent="openForm=false" class="btn-sm">❌</button>
    </div>

</div>
</template>
<script>
    export default {
        name: "FormComponents",
        props:['metricid', 'parentid', 'authcheck'],
        data(){
            return{
                openForm:false,
                auth:false,
                metrikId:null,
                parentId:null,
                nameAuth:null,
                emailAuth:null,
                name:null,
                email:null,
                text:null,
            }
        },
        methods:{
            replyComments(metrikId, parentId, auth){
                this.openForm = true
                if (auth){
                    this.auth = JSON.parse(auth)
                }

                this.parentId = parentId
                this.metrikId = metrikId
               // console.log(metrikId, parentId ,auth)

            },
            submitReply(name, email, text, metrikId, parentId, auth){
                if (auth){
                    name = auth.name
                    email = auth.email
                }
                axios.post('/api/metric/add-comment',{name:name, email:email, text:text,metrikId:metrikId, parentId:parentId}).then(res=>{
                    this.text = null
                    alert('Спасибо за комментарий!. После проверки он будет добавлен.')
                }).catch(function (error) {
                    alert('Произошла ошибка. Попробуйте уточнить сведения комментария или обратитесь к администрации')
                })
            },
        }
    }
</script>

<style scoped>

</style>
