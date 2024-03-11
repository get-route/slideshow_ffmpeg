<template>
    <div class="container row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-9">

            <template v-if="authcheck==false">
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
                <button class="btn-lg btn-success" @click="NewComment(name, email,text, authcheck, metricid, this.parent_id)">Отправить</button>
            </div>

        </div>
    </div>

</template>

<script>
    export default {
        name: "IndexComponents",
        props:['authcheck','metricid'],
        data(){
            return{
                name:null,
                email:null,
                text:null,
                parent_id:null,
            }
        },
        methods:{
            NewComment(name, email, text, auth, metrikId, parentId){
                if (auth){
                    auth = JSON.parse(auth)
                    name = auth.name
                    email = auth.email
                }
                axios.post('/api/metric/new-comment',{name:name, email:email, text:text,metrikId:metrikId, parentId:parentId}).then(res=>{
                    this.text = null
                    alert('Спасибо за комментарий!. После проверки он будет добавлен.')

                }).catch(function (error) {
                    alert('Произошла ошибка. Попробуйте уточнить сведения комментария или обратитесь к администрации')
                })
            }
        }
    }
</script>

<style scoped>

</style>
