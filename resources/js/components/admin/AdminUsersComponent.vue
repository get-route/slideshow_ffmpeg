<template>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Имя
                </th>
                <th>
                    Дата
                </th>
                <th>
                    Email
                </th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="user in this.getUsers">
                <td>
                    {{user.id}}
                </td>
                <td>
                    {{user.name}}
                </td>
                <td>
                    {{user.created_at}}
                </td>
                <td>{{user.email}}</td>
                <td>
                    <a href="#" class="btn btn-danger m-2" @click.prevent="deleteUser(user.id)">Удалить</a>

                </td>
            </tr>

            </tbody>
        </table>
    </div>

</template>

<script>
    export default {
        name: "AdminUsersComponent",
        data(){
            return{
                getUsers:null,
            }
        },
        mounted() {
            this.getUserTable()
        },
        methods:{
            getUserTable(){
                axios.get('/api/adm_panel/users_admin').then(res=>{
                   //console.log(res.data)
                    this.getUsers = res.data
                }).catch(function (error) {
                    console.log(error)
                })
            },
            deleteUser(id){
                axios.delete('/api/adm_panel/users_admin/delete/' + id).catch(res=>{
                    this.getUserTable()
                    alert('Пользователь удален')
                }).catch(function (error) {
                    console.log(error)
                })
            }
        }
    }
</script>

<style scoped>

</style>
