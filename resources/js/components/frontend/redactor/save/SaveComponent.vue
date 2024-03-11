<template>
    <div v-if="imgNatParams" class="col-lg-9 text-center mt-5">
        <a href="/cabinet/index" class="btn btn-dark">Личный Кабинет</a>
        <button id="download" class="btn btn-success m-2" ref="load_metrics"  @click="imgReads(
        $event,
        this.imgRead,
        this.canvas,
        this.context,
        imgNatParams,
        this.adaptivePosition,
        this.$store.state.fontRedact,
        this.$store.state.ChildFonts,
        this.$store.state.Brother,
        this.$store.state.AddInfo,
        this.$store.state.Birthday,
        this.$store.state.Father,
        this.$store.state.Height,
        this.$store.state.Horo,
        this.$store.state.Mother,
        this.$store.state.Sister,
        this.$store.state.Town,
        this.$store.state.WatchBirthday,
        this.$store.state.Week,
        this.$store.state.Weight,
        this.$store.state.YearsName,
        userid,
        urlproperty,
        )">Сохранить</button>
        <div v-if="spinner" class="spinner-border text-success col-lg-3" role="status">
            <span class="visually-hidden">Загрузка...</span>

        </div>
        <div style="color: #b1b1b1">
            <p>{{this.start}}</p>
            <p>{{this.progress}}</p>
            <p>{{this.progressTwo}}</p>
            <p>{{this.progressThree}}</p>
            <p>{{this.finish}}</p>
        </div>


            <canvas id="canvas" hidden>

            </canvas>


    </div>
</template>

<script>
    export default {
        name: "Save-Component",
        props:[
        'imgNatParams',
            'userid',
            'urlproperty',
        ],

        data(){
            return{
                imgRead:null,
                canvas:null,
                context:null,
                spinner:false,
                start:null,
                finish:null,
                progress:null,
                progressTwo:null,
                progressThree:null,
                successMetric:null,
            }
        },

        methods:{
            //Method read img and property field component/Ф-я добавляет текст за счет канвас и выводит на экран с заполненными данными из формы.
            imgReads(event,imgRead,canvas, context, imgSize,adaptive,fieldName, fieldChild,fieldBrother, fieldAddInfo, fieldBirthday, fieldFather, fieldHeight, fieldHoro, fieldMother, fieldSister, fieldTown, fieldWatchBirthday, fieldWeek, fieldWeight, fieldYearsName,idUser,propertyUrl,){

                imgRead = new Image()
                canvas = document.getElementById("canvas")
                canvas.width = 3508;
                canvas.height = 4961;
                context = canvas.getContext("2d")
                imgRead.src = imgSize.currentSrc
                this.spinner = true
                setTimeout(()=>{
                    this.start =  this.$store.state.start
                },200);

                setTimeout(()=>{
                    this.progress = this.$store.state.progress
                    this.progressTwo = this.$store.state.progressTwo
                    this.progressThree=this.$store.state.progressThree
                },3000);
                setTimeout(()=>{
                    this.finish =  this.$store.state.finish
                },5000);

                setTimeout(()=>{
                    this.finish =  null
                    this.start =  null
                    this.progress = null
                    this.progressTwo = null
                    this.progressThree=null
                    this.spinner = false
                },12000);
                imgRead.onload = function () {

                    context.drawImage(imgRead,0,0)
                    var ParamsHeight = imgSize.naturalHeight/imgSize.clientHeight
                    var ParamsWidth = imgSize.naturalWidth/imgSize.clientWidth
                    var ParamsWidthNew = imgSize.clientWidth * 2
                    var coefficientWidthHeight = imgSize.naturalWidth/imgSize.clientHeight


                    //font.js component --fieldName--
                    context.fillStyle = fieldName.colorName
                    context.font = fieldName.fontSizeName * (ParamsWidth) +'px '+fieldName.font
                   context.fillText(fieldName.name,(fieldName.leftName * (coefficientWidthHeight)+fieldName.leftName) - ParamsWidthNew, ((ParamsHeight)* fieldName.topName ) +(fieldName.fontSizeName * (ParamsWidth)))

                    //children.js component --fieldChild--
                    context.fillStyle = fieldChild.colorNameChild
                    context.font = fieldChild.fontSizeNameChild * (ParamsWidth) +'px '+fieldChild.fontChild

                    context.fillText(fieldChild.nameChild,(fieldChild.leftChildPos * (coefficientWidthHeight)+fieldChild.leftChildPos) -ParamsWidthNew, ((ParamsHeight)* fieldChild.topChildPos ) +(fieldChild.fontSizeNameChild * (ParamsWidth)))

                    //brother.js component --fieldBrother--
                    context.fillStyle = fieldBrother.colorNameBrother
                    context.font = fieldBrother.fontSizeNameBrother * (ParamsWidth) +'px '+fieldBrother.fontBrother

                    context.fillText(fieldBrother.nameBrother,(fieldBrother.leftBrotherPos * (coefficientWidthHeight)+fieldBrother.leftBrotherPos) -ParamsWidthNew, ((ParamsHeight)* fieldBrother.topBrotherPos ) +(fieldBrother.fontSizeNameBrother * (ParamsWidth)))

                    //addinfo.js component --fieldAddnfo--
                    context.fillStyle = fieldAddInfo.colorNameAddInfo
                    context.font = fieldAddInfo.fontSizeNameAddInfo * (ParamsWidth) +'px '+fieldAddInfo.fontAddInfo

                    context.fillText(fieldAddInfo.nameAddInfo,(fieldAddInfo.leftAddInfoPos * (coefficientWidthHeight)+fieldAddInfo.leftAddInfoPos) -ParamsWidthNew, ((ParamsHeight)* fieldAddInfo.topAddInfoPos ) +(fieldAddInfo.fontSizeNameAddInfo * (ParamsWidth)))
                        //Birthday.js component --fieldBirthday--
                        context.fillStyle = fieldBirthday.colorNameBirthday
                    context.font = fieldBirthday.fontSizeNameBirthday * (ParamsWidth) +'px '+fieldBirthday.fontBirthday

                    context.fillText(fieldBirthday.nameBirthday,(fieldBirthday.leftBirthdayPos * (coefficientWidthHeight)+fieldBirthday.leftBirthdayPos) -ParamsWidthNew, ((ParamsHeight)* fieldBirthday.topBirthdayPos ) +(fieldBirthday.fontSizeNameBirthday * (ParamsWidth)))

                    //Father.js component --fieldFather--
                    context.fillStyle = fieldFather.colorNameFather
                    context.font = fieldFather.fontSizeNameFather * (ParamsWidth) +'px '+fieldFather.fontFather

                    context.fillText(fieldFather.nameFather,(fieldFather.leftFatherPos * (coefficientWidthHeight)+fieldFather.leftFatherPos) -ParamsWidthNew, ((ParamsHeight)* fieldFather.topFatherPos ) +(fieldFather.fontSizeNameFather * (ParamsWidth)))

                    //Height.js component --fieldHeight--
                    context.fillStyle = fieldHeight.colorNameHeight
                    context.font = fieldHeight.fontSizeNameHeight * (ParamsWidth) +'px '+fieldHeight.fontHeight

                    context.fillText(fieldHeight.nameHeight,(fieldHeight.leftHeightPos * (coefficientWidthHeight)+fieldHeight.leftHeightPos) -ParamsWidthNew, ((ParamsHeight)* fieldHeight.topHeightPos ) +(fieldHeight.fontSizeNameHeight * (ParamsWidth)))

                    //Horo.js component --fieldHoro--
                    context.fillStyle = fieldHoro.colorNameHoro
                    context.font = fieldHoro.fontSizeNameHoro * (ParamsWidth) +'px '+fieldHoro.fontHoro

                    context.fillText(fieldHoro.nameHoro,(fieldHoro.leftHoroPos * (coefficientWidthHeight)+fieldHoro.leftHoroPos) -ParamsWidthNew, ((ParamsHeight)* fieldHoro.topHoroPos ) +(fieldHoro.fontSizeNameHoro * (ParamsWidth)))


                    //Mother.js component --fieldMother--
                    context.fillStyle = fieldMother.colorNameMother
                    context.font = fieldMother.fontSizeNameMother * (ParamsWidth) +'px '+fieldMother.fontMother

                    context.fillText(fieldMother.nameMother,(fieldMother.leftMotherPos * (coefficientWidthHeight)+fieldMother.leftMotherPos) -ParamsWidthNew, ((ParamsHeight)* fieldMother.topMotherPos ) +(fieldMother.fontSizeNameMother * (ParamsWidth)))

                    //Sister.js component --fieldSister--
                    context.fillStyle = fieldSister.colorNameSister
                    context.font = fieldSister.fontSizeNameSister * (ParamsWidth) +'px '+fieldSister.fontSister

                    context.fillText(fieldSister.nameSister,(fieldSister.leftSisterPos * (coefficientWidthHeight)+fieldSister.leftSisterPos) -ParamsWidthNew, ((ParamsHeight)* fieldSister.topSisterPos ) +(fieldSister.fontSizeNameSister * (ParamsWidth)))

                    //Town.js component --fieldTown--
                    context.fillStyle = fieldTown.colorNameTown
                    context.font = fieldTown.fontSizeNameTown * (ParamsWidth) +'px '+fieldTown.fontTown

                    context.fillText(fieldTown.nameTown,(fieldTown.leftTownPos * (coefficientWidthHeight)+fieldTown.leftTownPos) -ParamsWidthNew, ((ParamsHeight)* fieldTown.topTownPos ) +(fieldTown.fontSizeNameTown * (ParamsWidth)))

                    //WatchBirthday.js component --fieldWatchBirthday--
                    context.fillStyle = fieldWatchBirthday.colorNameWatchBirthday
                    context.font = fieldWatchBirthday.fontSizeNameWatchBirthday * (ParamsWidth) +'px '+fieldWatchBirthday.fontWatchBirthday

                    context.fillText(fieldWatchBirthday.nameWatchBirthday,(fieldWatchBirthday.leftWatchBirthdayPos * (coefficientWidthHeight)+fieldWatchBirthday.leftWatchBirthdayPos) -ParamsWidthNew, ((ParamsHeight)* fieldWatchBirthday.topWatchBirthdayPos ) +(fieldWatchBirthday.fontSizeNameWatchBirthday * (ParamsWidth)))

                    //Week.js component --fieldWeek--
                    context.fillStyle = fieldWeek.colorNameWeek
                    context.font = fieldWeek.fontSizeNameWeek * (ParamsWidth) +'px '+fieldWeek.fontWeek

                    context.fillText(fieldWeek.nameWeek,(fieldWeek.leftWeekPos * (coefficientWidthHeight)+fieldWeek.leftWeekPos) -ParamsWidthNew, ((ParamsHeight)* fieldWeek.topWeekPos ) +(fieldWeek.fontSizeNameWeek * (ParamsWidth)))

                    //Weight.js component --fieldWeight--
                    context.fillStyle = fieldWeight.colorNameWeight
                    context.font = fieldWeight.fontSizeNameWeight * (ParamsWidth) +'px '+fieldWeight.fontWeight

                    context.fillText(fieldWeight.nameWeight,(fieldWeight.leftWeightPos * (coefficientWidthHeight)+fieldWeight.leftWeightPos) -ParamsWidthNew, ((ParamsHeight)* fieldWeight.topWeightPos ) +(fieldWeight.fontSizeNameWeight * (ParamsWidth)))
                    //YearsName.js component --fieldYearsName--
                    context.fillStyle = fieldYearsName.colorNameYearsName
                    context.font = fieldYearsName.fontSizeNameYearsName * (ParamsWidth) +'px '+fieldYearsName.fontYearsName

                    context.fillText(fieldYearsName.nameYearsName,(fieldYearsName.leftYearsNamePos * (coefficientWidthHeight)+fieldYearsName.leftYearsNamePos) -ParamsWidthNew, ((ParamsHeight)* fieldYearsName.topYearsNamePos ) +(fieldYearsName.fontSizeNameYearsName * (ParamsWidth)))
                    //link start
                    var image = canvas.toDataURL();
                    // download metrik images in storage
                    axios.post('/api/metrika/'+propertyUrl+'/userupload',{path:idUser,images:image}).then(res=>{
                        alert('Ваша метрика сформирована успешно. Вы можете скачать ее в личном кабинете')
                    }).catch(function (error){
                        alert ('Произошла ошибка при сохранении. Попробуйте заново и сообщите администрации сайта')
                        //console.log(error)
                    })
                    // Download ready images funcrion
                    // var tmpLink = document.createElement( 'a' );
                    // tmpLink.download = 'image.png'; // set the name of the download file
                    // tmpLink.href = image;
                    //
                    // document.body.appendChild( tmpLink );
                    // //var one = document.body.appendChild( tmpLink );
                    // tmpLink.click();
                    // document.body.removeChild( tmpLink );
                }
            },
        }
    }
</script>

<style scoped>

</style>
