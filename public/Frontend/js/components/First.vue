<template>
    <div>
        <a href="" type="submit" @click.prevent="One()">Нажать {{Plus}}</a>
    </div>
</template>

<script>
    export default {
        name: "first-comp",
        data(){
            return{
                Plus:null
            }
        },
        methods:{
            One(){
                return this.Plus++
            }
        }

    }
</script>

<style scoped>

</style>
