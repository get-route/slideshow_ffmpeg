<template>
    <div v-for="metrika in metriks" class="card position-relative shadow" style="max-width: 370px;">
        <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;">
            <img src="Frontend/img/steps/bg.png" style="max-width:550px;" alt="shape"/>
        </div>


        <div class="card-body p-3">
            <img class="mb-4 mt-2 rounded-2 w-100" :src="'/storage/thumbnail/thumbnail-' + metrika.photo " alt="booking"/>
            <div>
                <h5 class="fw-medium">{{metrika.h1}}</h5>
                <div class="icon-group mb-4">
                    <a :href="'/metrika/'+ metrika.url" target="_blank">
                    <span class="btn icon-item">
                        <img src="Frontend/img/steps/send.svg" alt=""/>
                    </span></a>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center mt-n1">
                        <img class="me-3"
                             src="Frontend/img/steps/building.svg" width="18" alt="building"/>
                        <span class="fs--1 fw-medium">{{span==0 ? metrika.likes++:span}} уже оценило</span>
                    </div>
                    <div class="show-onhover position-relative">
                        <div
                            class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3"
                            style="width: 260px;border-radius:18px;">
                            <div class="card-body py-3">
                                <div class="d-flex">
                                    <div style="margin-right: 10px"><img class="rounded-circle"
                                                                         :src="'/storage/thumbnail/thumbnail-' + metrika.photo"
                                                                         width="50" alt="favorite"/>
                                    </div>
                                    <div>
                                        <p class="fs--1 mb-1 fw-medium">Метрика </p>
                                        <h5 class="fw-medium mb-3">Оценить запись</h5>
                                        <h6 class="fs--1 fw-medium mb-2">
                                            <span >{{span}}
                                            </span> лайка
                                        </h6>
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="25"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <transition name="bounce">
                            <button v-if="this.like" class="btn" @click="likeBlock(metrika.id, metrika.likes++,'-')"><img src="Frontend/img/steps/heart-like.png" width="20" alt="step"/>
                            </button>
                        </transition>
                        <transition name="bounce">
                        <button v-if="!this.like" class="btn" @click="likeBlock(metrika.id, metrika.likes--,'+')"><img src="Frontend/img/steps/heart.png" width="20" alt="step"/>
                        </button>
                        </transition>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "InfoBlockComponent",
        props:['metriks'],
        data(){
            return{
                like:null,
                countLike:0,
            }
        },
        methods:{
            likeBlock(id, count, operation){
                if (operation == '-'){
                    this.like = null
                    this.countLike = count++


                }else {
                    this.like = true
                    this.countLike = count--

                }
            },

        },
         computed:{
            span(){
                return this.countLike
            }
         }
    }
</script>

<style scoped>

</style>
